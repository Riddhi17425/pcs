<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function contact()
    {
        $meta_title       = "Contact Us | Accounting, Bookkeeping &amp; Payroll Services";
        $meta_description = "Get in touch with PCS Global Group for expert Accounting, Bookkeeping, Payroll Services, and Strata Management solutions tailored to your business needs.";
        $countries        = Country::all();
        return view('front.contact', compact('meta_title', 'meta_description', 'countries'));
    }

    public function store(Request $request)
    {
        // Honeypot check (detect bots)
        if (! empty($request->fax_number)) {
            \Log::warning('Honeypot triggered — possible spam entry', [
                'email' => $request->email,
                'name'  => $request->fullname,
            ]);

            // Don’t show an error to bots — just act like it succeeded
            return redirect()->route('thank.you');
        }
        $request->validate([
            'fullname'    => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:20',
            'full_phone'  => 'nullable|string|max:20',
            'companyName' => 'nullable',
            'country'     => 'nullable|string',
            'services'    => 'nullable|array|min:1',
            'message'     => 'nullable|string',
        ]);

        $rawPhone = $request->full_phone ?: $request->phone;

        $phone = '+' . ltrim($rawPhone, '+');

        Contact::create([
            'fullname' => $request->fullname,
            'country'  => $request->country,
            'phone'    => $phone,
            'email'    => $request->email,
            'services' => $request->services,
            'message'  => $request->message,
        ]);
        $sheetData = [
            'form_type' => 'Contact Form',
            'name'      => $request->fullname ?? '',
            'contact'   => $phone,
            'email'     => $request->email ?? '',
            'country'   => $request->country ?? '',
            'services'  => is_array($request->services)
                ? implode(', ', $request->services)
                : ($request->services ?? ''),
            'message'   => $request->message ?? '',
            'date'      => now()->format('Y-m-d H:i:s'),
        ];
        // Redirect to contact route with success message
        $response = Http::timeout(30)
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->post('https://script.google.com/macros/s/AKfycbznUt89nic300-hxaU7aQJr_P3CcDUsbgtKOh49HfLljKp5saEKlCKgkHUKQB1vVEP6/exec', $sheetData);

        // Check response
        if ($response->successful()) {
            $responseData = $response->json();
            if (isset($responseData['status']) && $responseData['status'] === 'success') {
                Log::info('Data successfully sent to Google Sheets', [
                    'email'    => $request->email,
                    'response' => $responseData,
                ]);
                return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');

            } else {
                Log::warning('Google Sheets API returned error', [
                    'response' => $responseData,
                    'email'    => $request->email,
                ]);
                return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');

            }
        } else {
            Log::error('Google Sheets API request failed', [
                'status' => $response->status(),
                'body'   => $response->body(),
                'email'  => $request->email,
            ]);
            return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');

        }
        // return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');
    }
}

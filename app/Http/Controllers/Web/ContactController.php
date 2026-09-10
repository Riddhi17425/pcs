<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Country;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function contact()
    {
        $meta_title="Contact Us | Accounting, Bookkeeping &amp; Payroll Services";
        $meta_description="Get in touch with PCS Global Group for expert Accounting, Bookkeeping, Payroll Services, and Strata Management solutions tailored to your business needs.";
        $countries =Country::all();
        return view('front.contact',compact('meta_title','meta_description','countries'));
    }

    public function store(Request $request)
    {
        // Honeypot check (detect bots)
        if (!empty($request->fax_number)) {
            \Log::warning('Honeypot triggered — possible spam entry', [
                'email' => $request->email,
                'name' => $request->fullname
            ]);
     
            // Don’t show an error to bots — just act like it succeeded
            return redirect()->route('thank.you');
        }
        $request->validate([
           'fullname' => 'required|string|max:255',
            'email'    => 'required|email',
            'phone'    => 'required|string|max:20',
            'country'  => 'required|string',
            'services' => 'required|array|min:1',
            'message'  => 'nullable|string',
        ]);

        Contact::create([
            'fullname'         => $request->fullname,
            'country' => $request->country,
            'phone'      => $request->phone,
            'email'        => $request->email,
            'services'        => $request->services,
            'message'      => $request->message,
        ]);
        $sheetData = [
                    'form_type'=>'Contact Form',
                    'name'     => $request->fullname ?? '',
                    'contact' => $request->number ?? $request->phone ?? '',
                    'email' => $request->email ?? '',
                    'country' => $request->country ?? '',
                    'services'  => is_array($request->services)
                    ? implode(', ', $request->services)
                    : ($request->services ?? ''),
                    'message' => $request->message ?? '',
                    'date'    => now()->format('Y-m-d H:i:s')
                ];
        // Redirect to contact route with success message
        $response = Http::timeout(30)
                ->withHeaders([
                    'Content-Type' => 'application/json'
                ])
                ->post('https://script.google.com/macros/s/AKfycbznUt89nic300-hxaU7aQJr_P3CcDUsbgtKOh49HfLljKp5saEKlCKgkHUKQB1vVEP6/exec', $sheetData);
 
            // Check response
            if ($response->successful()) {
                $responseData = $response->json();
                if (isset($responseData['status']) && $responseData['status'] === 'success') {
                    Log::info('Data successfully sent to Google Sheets', [
                        'email' => $request->email,
                        'response' => $responseData
                    ]);
                                return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');
 
                } else {
                    Log::warning('Google Sheets API returned error', [
                        'response' => $responseData,
                        'email' => $request->email
                    ]);
                    return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');
 
                }
            } else {
                Log::error('Google Sheets API request failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                    'email' => $request->email
                ]);
                    return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');
 
            }
        // return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');
    }
}

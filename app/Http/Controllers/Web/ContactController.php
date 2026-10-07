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
        // 1. HONEYPOT CHECK
        if (!empty($request->fax_number))
        {
            Log::warning('Honeypot triggered — possible spam entry', [
                'email' => $request->email,
                'name'  => $request->fullname,
                'ip'    => $request->ip(),
            ]);

            return redirect()->route('thank.you');
        }

        // 2. VALIDATION
        $request->validate([
            'fullname' => [
                'required',
                'string',
                'min:2',
                'max:70',
                'regex:/^[a-zA-Z\s]+$/',
            ],
            'email' => [
                'required',
                'email',
                'max:70',
            ],
            'phone' => [
                'required',
                'digits_between:10,15',
            ],
            'full_phone' => [
                'nullable',
                'string',
                'max:20',
            ],
            'companyName' => [
                'nullable',
                'string',
                'max:255',
            ],
            'country' => [
                'nullable',
                'string',
                'max:255',
            ],
            'services' => [
                'required',
                'array',
                'min:1',
            ],
            'services.*' => [
                'string',
                'max:255',
            ],
            'message' => [
                'nullable',
                'string',
                'max:1000',
            ],
            'g-recaptcha-response' => [
                'required',
            ],
        ], [
            'fullname.required' => 'Please enter your full name.',
            'fullname.min' => 'Name must be at least 2 characters.',
            'fullname.max' => 'Name cannot exceed 70 characters.',
            'fullname.regex' => 'Name can contain letters and spaces only.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email cannot exceed 70 characters.',

            'phone.required' => 'Please enter your phone number.',
            'phone.digits_between' => 'Phone number must contain 10 to 15 digits.',

            'services.required' => 'Please select at least one service.',
            'services.min' => 'Please select at least one service.',

            'g-recaptcha-response.required' => 'Please verify you are not a robot.',
        ]);

        // 3. PHONE
        $rawPhone = $request->full_phone ?: $request->phone;
        $phone = '+' . ltrim($rawPhone, '+');

        // 4. SAVE CONTACT
        Contact::create([
            'fullname' => $request->fullname,
            'country'  => $request->country,
            'phone'    => $phone,
            'email'    => $request->email,
            'services' => $request->services,
            'message'  => $request->message,
        ]);

        // 5. GOOGLE SHEET DATA
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

        // 6. SEND TO GOOGLE SHEET
        $response = Http::timeout(30)
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->post(
                'https://script.google.com/macros/s/AKfycbznUt89nic300-hxaU7aQJr_P3CcDUsbgtKOh49HfLljKp5saEKlCKgkHUKQB1vVEP6/exec',
                $sheetData
            );

        // 7. GOOGLE SHEET RESPONSE
        if ($response->successful())
        {
            $responseData = $response->json();
            if (isset($responseData['status']) && $responseData['status'] === 'success')
            {
                Log::info('Data successfully sent to Google Sheets', [
                    'email'    => $request->email,
                    'response' => $responseData,
                ]);
            } 
            else
            {
                Log::warning('Google Sheets API returned error', [
                    'response' => $responseData,
                    'email'    => $request->email,
                ]);
            }
        } 
        else
        {
            Log::error('Google Sheets API request failed', [
                'status' => $response->status(),
                'body'   => $response->body(),
                'email'  => $request->email,
            ]);
        }

        // 8. SUCCESS
        return redirect()
            ->route('thank.you')
            ->with('success', 'Your message has been sent successfully.');
    }
}
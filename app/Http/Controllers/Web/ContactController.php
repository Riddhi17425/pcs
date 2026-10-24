<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    // Shared page (sab countries). Header/footer: route middleware 'country:<key>' -> $site
    public function contact()
    {
        $meta_title       = "Contact Us | Accounting, Bookkeeping &amp; Payroll Services";
        $meta_description = "Get in touch with PCS Global Group for expert Accounting, Bookkeeping, Payroll Services, and Strata Management solutions tailored to your business needs.";
        $countries        = Country::all();
        return view('pages.shared.contact', compact('meta_title', 'meta_description', 'countries'));
    }

    private function servicesFor(string $country): array
    {
        $all = [
            'us' => [
                'Accounting Outsourcing Services',
                'Bookkeeping Outsourcing Services',
                'Outsourced Tax Preparation Services',
                'Payroll Outsourcing Services',
                'Outsourced Audit Support Services',
            ],
            'gb' => [
                'Accounting Outsourcing',
                'Small Business Accounting',
                'Bookkeeping Outsourcing',
                'Tax Preparation Outsourcing',
                'Payroll Outsourcing',
                'VAT Outsourcing',
            ],
            'au' => [
                'Accounting Outsourcing',
                'Bookkeeping Outsourcing',
                'Tax Preparation Outsourcing',
                'BAS/IAS Return Services',
                'Payroll Outsourcing',
                'Strata Management Services',
            ],
            'in' => [
                'Accounting & Bookkeeping',
                'Payroll Outsourcing Services',
                'Taxation Services',
                'Recruitment Outsourcing Services',
                'IT Automation Services',
            ],
        ];

        return $all[$country] ?? $all['in'];
    }

    public function store(Request $request)
    {
        // Honeypot check (detect bots)
        if (! empty($request->fax_number)) {
            Log::warning('Honeypot triggered — possible spam entry', [
                'email' => $request->email,
                'name'  => $request->fullname,
            ]);
            return redirect()->route('thank.you');
        }

        $pageCountry     = strtolower((string) $request->page_country);
        $allowedServices = $this->servicesFor($pageCountry);

        $request->validate([
            'fullname'    => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:20',
            'full_phone'  => 'nullable|string|max:20',
            'companyName' => 'nullable',
            'country'     => 'nullable|string',
            'service'     => ['required', 'string', 'max:150', Rule::in($allowedServices)],
            'message'     => 'nullable|string',
        ]);

        $rawPhone = $request->full_phone ?: $request->phone;
        $phone    = '+' . ltrim($rawPhone, '+');

        Contact::create([
            'fullname' => $request->fullname,
            'country'  => $request->country,
            'phone'    => $phone,
            'email'    => $request->email,
            'service'  => $request->service,
            'message'  => $request->message,
        ]);

        $contactFormTypes = [
            'au' => 'Australia Contact Form',
            'gb' => 'UK Contact Form',
            'us' => 'US Contact Form',
            'in' => 'India Contact Form',
        ];
        $formType = $contactFormTypes[$pageCountry] ?? 'India Contact Form';

        $sheetData = [
            'form_type' => $formType,
            'name'      => $request->fullname ?? '',
            'contact'   => $phone,
            'email'     => $request->email ?? '',
            'country'   => $request->country ?? '',
            'services'  => $request->service ?? '',
            'service'   => $request->service ?? '',
            'Service'   => $request->service ?? '',
            'Services'  => $request->service ?? '',
            'message'   => $request->message ?? '',
            'date'      => now()->format('Y-m-d H:i:s'),
        ];

        try {
            $response = Http::timeout(30)
                ->withHeaders(['Content-Type' => 'application/json'])
                ->post('https://script.google.com/macros/s/AKfycbxcIU_MubfJF-n2Et1XSIK7H2qiX45wUz1cS2C3fJWZdKtU9q3RpQ-owYPXrM2on8S6mg/exec', $sheetData);

            if ($response->successful() && $response->json('status') === 'success') {
                Log::info('Data successfully sent to Google Sheets', ['email' => $request->email]);
            } else {
                Log::warning('Google Sheets API returned error', [
                    'status' => $response->status(),
                    'body'   => $response->body(),
                    'email'  => $request->email,
                ]);
            }
        } catch (\Throwable $e) {
            Log::error('Google Sheets API request failed', [
                'error' => $e->getMessage(),
                'email' => $request->email,
            ]);
        }

        return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');
    }
}
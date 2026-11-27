<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\ConsultantForm;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Industries;
use App\Models\OurExpert;
use App\Models\RequestForm;
use App\Models\TrustedPartner;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ServiceController extends Controller
{
    private const MAIN_SHEET_URL = 'https://script.google.com/macros/s/AKfycbxcIU_MubfJF-n2Et1XSIK7H2qiX45wUz1cS2C3fJWZdKtU9q3RpQ-owYPXrM2on8S6mg/exec';

    private const CONSULTATION_SHEET_URL = 'https://script.google.com/macros/s/AKfycbxmc2raCrl1hNlg7iZjRa11x4UarwXt9IKBOZRZ9thD6grj8hEZniC6Bl8BAddqoAug/exec';

    public function index()
    {
        $meta_title       = "";
        $meta_description = "";
        $images           = TrustedPartner::where('status', 'Active')->get();
        $industries       = Industries::where('status', 'Active')->get();
        $ourexpert        = OurExpert::where('status', 'Active')->get();
        $blogs            = Blogs::orderBy('id', 'desc')->where('status', 'Active')->get();
        return view('pages.india.home', compact('meta_title', 'meta_description', 'images', 'industries', 'ourexpert', 'blogs'));
    }

    public function requestStore(Request $request)
    {
        if (! empty($request->fax_number)) {
            Log::warning('Honeypot triggered — possible spam entry', [
                'email' => $request->email,
                'name'  => $request->fullname,
            ]);

            return $this->requestSuccess($request);
        }

        $request->validate([
            'fullname'   => 'required|string|min:2|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'required|string|max:20',
            'full_phone' => 'nullable|string|max:20',
            'country'    => 'nullable|string|max:100',
            'message'    => 'nullable|string|max:1000',
            'company'    => 'nullable|string|max:255',
            'city'       => 'nullable|string|max:100',
            'service'    => 'nullable|string|max:150',
            'form_type'  => 'nullable|string|max:100',
        ]);

        if ($request->has('g-recaptcha-response') && ! $this->captchaPassed($request)) {
            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Captcha verification failed. Please try again.',
            ]);
        }

        $rawPhone = $request->full_phone ?: $request->phone;
        $phone    = '+' . ltrim($rawPhone, '+');

        RequestForm::create([
            'fullname' => $request->fullname,
            'country'  => $request->country ?? '',
            'phone'    => $phone,
            'email'    => $request->email,
            'company'  => $request->company ?? '',
            'city'     => $request->city ?? '',
            'service'  => $request->service ?? '',
            'message'  => $request->message ?? '',
            'page_url' => url()->previous(),
        ]);

        $allowedFormTypes = ['Enquire Now',
                                'Request a Consultation',
                                'India Consultation Form',
                                'Australia Consultation Form',
                                'UK Consultation Form',
                                'US Consultation Form',
                                'India Footer Form',
                                'Australia Footer Form',
                                'UK Footer Form',
                                'US Footer Form',
                            ];
        $formType = in_array($request->form_type, $allowedFormTypes, true)
            ? $request->form_type
            : 'Website Enquiry';

        $serviceValue = is_array($request->services)
        ? implode(', ', $request->services)
        : ($request->services ?? $request->service ?? '');

        $sheetData = [
            'form_type' => $formType,
            'name'      => $request->fullname ?? '',
            'email'     => $request->email ?? '',
            'contact'   => $phone,
            'company'   => $request->company ?? '',
            'country'   => $request->country ?? '',
            'city'      => $request->city ?? '',
            'services'  => $serviceValue,
            'service'    => $serviceValue,
            'Service'    => $serviceValue,
            'Services'   => $serviceValue,
            'message'   => $request->message ?? '',
            'page_url'  => url()->previous(),
            'date'      => now()->format('Y-m-d H:i:s'),
        ];
   
        $consultationForms = ['Request a Consultation', 'Free Consultation Modal',
    'India Form', 'Australia Form', 'United Kingdom Form', 'United States Form',];
        $sheetUrl = (in_array($formType, $consultationForms, true) && self::CONSULTATION_SHEET_URL !== '')
            ? self::CONSULTATION_SHEET_URL
            : self::MAIN_SHEET_URL;

        try {
            $response = Http::timeout(30)
                ->withHeaders(['Content-Type' => 'application/json'])
                ->post($sheetUrl, $sheetData);

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

        return $this->requestSuccess($request);
    }

    private function requestSuccess(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully.',
            ]);
        }

        return redirect()->route(\App\Support\Site::thankYouRoute($request))->with('success', 'Your message has been sent successfully.');
    }

    private function captchaPassed(Request $request): bool
    {
        $secret = in_array($request->getHost(), ['localhost', '127.0.0.1'])
            ? '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe'
            : '';

        if ($secret === '') {
            return true;
        }

        $token = $request->input('g-recaptcha-response');
        if (! $token) {
            return false;
        }

        try {
            $res = Http::asForm()->timeout(10)->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret'   => $secret,
                'response' => $token,
                'remoteip' => $request->ip(),
            ]);

            return $res->successful() && $res->json('success') === true;
        } catch (\Throwable $e) {
            Log::error('reCAPTCHA verify failed', ['error' => $e->getMessage()]);
            return false;
        }
    }

    public function consultantstore(Request $request)
    {
        $request->validate([
            'c_fullname' => 'required|string|max:255',
            'c_email'    => 'required|email',
            'c_phone'    => 'required|string|max:20',
            'c_country'  => 'required|string',
            'c_message'  => 'nullable|string',
        ]);

        ConsultantForm::create([
            'fullname' => $request->c_fullname,
            'country'  => $request->c_country,
            'phone'    => $request->c_phone,
            'email'    => $request->c_email,
            'message'  => $request->c_message,
        ]);
        return redirect()->route(\App\Support\Site::thankYouRoute($request))->with('success', 'Your message has been sent successfully.');
    }

    public function about()
    {
        $meta_title       = "";
        $meta_description = "";
        $whychooseus      = WhyChooseUs::where('status', 'Active')->get();
        return view('pages.shared.about', compact('meta_title', 'meta_description', 'whychooseus'));
    }

    public function dataSecurity()
    {
        $faq              = Faq::where('status', 'Active')->where('faq_url', 'data-security')->first();
        $meta_title       = "Data Security & Protection Services | PCS Global ";
        $meta_description = "PCS Global cybersecurity solutions protect businesses from cyber threats, data breaches, and compliance risks, ensuring secure and uninterrupted operations.";

        return view('pages.india.data-security', compact('meta_title', 'meta_description', 'faq'));
    }

    public function accountingBookeeping()
    {
        $faq              = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-bookkeeping')->first();
        $meta_title       = "Accounting Outsourcing Services | PCS Global";
        $meta_description = "Looking for accounting outsourcing services? PCS Global supports businesses and accounting firms with accounts payable, receivables and financial reporting.";

        return view('pages.india.accounting-bookkeeping', compact('meta_title', 'meta_description', 'faq'));
    }

    public function payrollService()
    {
        $meta_title       = "Payroll Outsourcing Services | PCS Global";
        $meta_description = "PCS Global provides outsourced payroll solutions for businesses seeking accurate payroll processing, streamlined administration and scalable support. Talk to Us!";

        return view('pages.india.payroll-services', compact('meta_title', 'meta_description'));
    }

    public function hireOffshoreAccountant()
    {
        $meta_title       = "Hire Offshore Accountants for CPA & Accounting Firm";
        $meta_description = "Looking to hire offshore accountants? PCS Global supports CPA and accounting firms with expert bookkeeping, tax preparation, and accounting professionals.";

        return view('pages.india.hire-offshore-accountant', compact('meta_title', 'meta_description'));
    }

    public function bookkeepingServices()
    {
        $meta_title       = "Bookkeeping Outsourcing Services | PCS Global";
        $meta_description = "Looking for bookkeeping outsourcing services? PCS Global helps businesses and accounting firms manage daily bookkeeping, reconciliations and financial records.";

        return view('pages.india.bookkeeping-services', compact('meta_title', 'meta_description'));
    }

    public function taxationservices()
    {
        $meta_title       = "Tax Preparation Outsourcing Services | PCS Global";
        $meta_description = "PCS Global provides tax preparation outsourcing services, including tax returns, tax compliance and reliable tax support for businesses and accounting firms.";

        return view('pages.india.taxation-services', compact('meta_title', 'meta_description'));
    }

    public function strataManagement()
    {
        $faq         = Faq::where('status', 'Active')->where('faq_url', 'strata-management')->first();
        $whychooseus = WhyChooseUs::where('status', 'Active')->get();

        $meta_title       = "Outsourced Strata Management Services Australia | PCS Global";
        $meta_description = "Looking for the best strata management services in Australia? PCS Global offers outsourced support that helps strata companies save time and reduce costs.";

        return view('pages.shared.strata-management', compact('meta_title', 'meta_description', 'faq', 'whychooseus'));
    }

    public function recruitmentService()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'recruitment-services')->first();

        $meta_title       = "Recruitment Process Outsourcing Services – RPO Solution";
        $meta_description = "PCS Global offers Recruitment Process Outsourcing (RPO) services to streamline hiring, cut recruitment costs, and help businesses attract top talent.";

        return view('pages.india.recruitment-services', compact('meta_title', 'meta_description', 'faq'));
    }

    public function globalUsa()
    {
        $meta_title       = "Accounting Outsourcing Services USA | PCS Global";
        $meta_description = "Accounting outsourcing services for US businesses and CPA firms. Get GAAP-compliant accounts payable, accounting receivable and reporting support. Inquire Now!";

        return $this->usServicePage('accounting', $meta_title, $meta_description);
    }

    public function bookkeepingUsa()
    {
        $meta_title       = "Outsourced Bookkeeping Services in USA | PCS Global";
        $meta_description = "Outsourced bookkeeping services in the USA for small businesses and CPA firms. Bank reconciliation, ledgers and QuickBooks or Xero support. Get a quote.";

        return $this->usServicePage('bookkeeping', $meta_title, $meta_description);
    }

    public function payrollUsa()
    {
        $meta_title       = "Payroll Outsourcing Services USA | PCS Global";
        $meta_description = "Payroll outsourcing services for CPA & Recruiting Firms. Get accurate payroll processing, direct deposit, pay stubs and payroll tax compliance. Inquire Now!";

        return $this->usServicePage('payroll', $meta_title, $meta_description);
    }

    // Shared view for the US service pages; content lives in resources/content/us/services/<key>.php
    private function usServicePage(string $key, string $meta_title, string $meta_description)
    {
        $page = require resource_path("content/us/services/{$key}.php");

        return view('pages.us.service-page', compact('page', 'meta_title', 'meta_description'));
    }

    public function globalAus()
    {
        $meta_title       = "Accounting Outsourcing Services Australia | PCS Global";
        $meta_description = "Looking for the best outsourced accounting services in Australia? PCS Global offers offshore accounting support with expert teams and secure processes.";

        return $this->australiaServicePage('accounting', $meta_title, $meta_description);
    }

    public function bookkeepingAustralian()
    {
        $meta_title       = "Bookkeeping Outsourcing Services Australia | PCS Global";
        $meta_description = "Need outsourced bookkeeping services in Australia? PCS Global delivers accurate, offshore bookkeeping with expert teams and secure processes. Talk to Us!";

        return $this->australiaServicePage('bookkeeping', $meta_title, $meta_description);
    }

    public function payrollAustralian()
    {
        $meta_title       = "Payroll Outsourcing Services Australia | PCS Global";
        $meta_description = "PCS Global offers outsourced payroll services in Australia, including payroll processing, administration and management support for accounting firms. Inquire Now!";

        return $this->australiaServicePage('payroll', $meta_title, $meta_description);
    }

    // Shared view for the Australia service pages; content lives in resources/content/australia/services/<key>.php
    private function australiaServicePage(string $key, string $meta_title, string $meta_description)
    {
        $page = require resource_path("content/australia/services/{$key}.php");

        return view('pages.australia.service-page', compact('page', 'meta_title', 'meta_description'));
    }

    public function globalUk()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-uk')->first();

        $meta_title       = "UK Expert Accounting & Bookkeeping Services";
        $meta_description = "PCS offers reliable accounting & bookkeeping services for UK SMEs—managing your back office, accounting, and compliance with expert precision.";

        return view('pages.uk.pcs-global-uk', compact('meta_title', 'meta_description', 'faq'));
    }

    public function thankyou()
    {
        $meta_title       = "";
        $meta_description = "";

        return view('pages.shared.thank-you', compact('meta_title', 'meta_description'));
    }

    public function taxationservicesusa()
    {
        $meta_title       = "Outsource Tax Preparation Services in USA | PCS Global";
        $meta_description = "Outsource tax return preparation services for CPA & Tax firms. Get individual, corporate and partnership returns, state filings and audit support. Inquire Now!";

        return $this->usServicePage('tax', $meta_title, $meta_description);
    }

    public function taxationaustralian()
    {
        $meta_title       = "Tax Preparation Outsourcing Services Australia | PCS Global";
        $meta_description = "Get outsource tax preparation services in Australia with PCS Global. Accurate, compliant tax return preparation by experienced offshore tax specialists.";

        return $this->australiaServicePage('tax', $meta_title, $meta_description);
    }

    public function taxationservicesuk()
    {
        $meta_title       = "Tax Preparation Services in UK | PCS Global";
        $meta_description = "At PCS Global, we make taxation easy to understand for UK businesses, offering full-service assistance so businesses remain compliant and financially optimised.";

        return view('pages.uk.taxation-services-uk', compact('meta_title', 'meta_description'));
    }

    public function itautomation()
    {
        $meta_title       = "IT Outsourcing Services | IT Outsourcing Company";
        $meta_description = "PCS Global Group is a leading IT outsourcing company offering secure, scalable IT outsourcing services to help businesses reduce costs and grow efficiently.";
        $faq              = Faq::where('status', 'Active')->where('faq_url', 'it-automation')->first();
        return view('pages.india.it-automation', compact('meta_title', 'meta_description', 'faq'));
    }

    public function smallBusinessAccountingServices(Request $request)
    {
        $meta_title       = "Accounting Services for Small Businesses & SMEs | PCS Global";
        $meta_description = "Accountant services for small business and SMEs across the UK. PCS Global manages VAT, payroll, corporation tax and year-end accounts. Get a quote.";

        return view('pages.uk.small-business-accounting-service', compact('meta_title', 'meta_description'));
    }

    public function outsourceTaxPreparationServices(Request $request)
    {
        $meta_title       = "Outsourcing Tax Preparation Services in UK | PCS Global";
        $meta_description = "Outsourced tax services for accountants and tax return outsourcing for UK businesses. Personal and corporate tax, tax planning, HMRC filing. Get a quote.";

        return $this->ukServicePage('tax', $meta_title, $meta_description);
    }

    public function ukLanding(Request $request)
    {
        $meta_title       = "UK Expert Accounting & Bookkeeping Services";
        $meta_description = "PCS offers reliable accounting & bookkeeping services for UK SMEs—managing your back office, accounting, and compliance with expert precision.";
        $faq              = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-uk')->first();

        return view('pages.uk.uk-landing', compact('meta_title', 'meta_description', 'faq'));
    }

    public function accountingOutSourcingServices(Request $request)
    {
        $meta_title       = "Accounting Outsourcing Services in UK | PCS Global";
        $meta_description = "Accounting outsourcing services in the UK for accountancy firms. PCS Global manage accounts payable, accounts receivable & year-end accounts. Get a quote.";

        return $this->ukServicePage('accounting', $meta_title, $meta_description);
    }

    public function bookkeepingUk()
    {
        $meta_title       = "Outsourced Bookkeeping Services UK | PCS Global";
        $meta_description = "Outsourced bookkeeping services in the UK for accountants and small businesses. Bank reconciliation, ledgers and VAT-ready records on Xero or QuickBooks.";

        return $this->ukServicePage('bookkeeping', $meta_title, $meta_description);
    }

    public function payrollUk()
    {
        $meta_title       = "Payroll Outsourcing Services UK | PCS Global";
        $meta_description = "Outsourced payroll services for accountants and small businesses. PCS global provide accurate payroll processing, RTI, PAYE, pensions and P60s. Get a quote.";

        return $this->ukServicePage('payroll', $meta_title, $meta_description);
    }

    // Shared view for the UK service pages; content lives in resources/content/uk/services/<key>.php
    private function ukServicePage(string $key, string $meta_title, string $meta_description)
    {
        $page = require resource_path("content/uk/services/{$key}.php");

        return view('pages.uk.service-page', compact('page', 'meta_title', 'meta_description'));
    }

    public function whitelabelAccountingServices()
    {
        $meta_title       = "White Label Accounting Services for Accounting Firms | PCS Global";
        $meta_description = "PCS Global is trusted white label accounting partner offering bookkeeping, accounts payable, receivable and client accounting services for US, UK & Australian firms.";
        $countries        = Country::all();

        return view('pages.india.whitelabel-accounting-services', compact('meta_title', 'meta_description', 'countries'));
    }

}

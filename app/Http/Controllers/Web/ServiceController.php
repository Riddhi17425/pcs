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
    // Sheet 1: Enquire Now popup + baaki website enquiries (contact page ka form ContactController se isi sheet me jaata hai)
    private const MAIN_SHEET_URL = 'https://script.google.com/macros/s/AKfycbxcIU_MubfJF-n2Et1XSIK7H2qiX45wUz1cS2C3fJWZdKtU9q3RpQ-owYPXrM2on8S6mg/exec';

    // Sheet 2: "Request a Consultation" band form + CTA button wala "Free Consultation" popup
    // (khali kar doge to ye forms bhi Sheet 1 me jayenge)
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
        // Honeypot check (detect bots)
        if (! empty($request->fax_number)) {
            Log::warning('Honeypot triggered — possible spam entry', [
                'email' => $request->email,
                'name'  => $request->fullname,
            ]);

            // Bots ko error mat dikhao — success jaisa behave karo
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

        // reCAPTCHA server-side verification
        // (sirf tab jab form me captcha field aaya ho, taaki is route ko use karne wale baaki forms na tootein)
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

        // Kaun sa form hai (sirf allowed labels, taaki koi sheet me kuch bhi na likh sake)
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

        // $sheetData = [
        //     'form_type' => $formType,
        //     'name'      => $request->fullname ?? '',
        //     'email'     => $request->email ?? '',
        //     'contact'   => $phone,
        //     'company'   => $request->company ?? '',
        //     'country'   => $request->country ?? '',
        //     'city'      => $request->city ?? '',
        //     'services'  => is_array($request->services)
        //         ? implode(', ', $request->services)
        //         : ($request->services ?? $request->service ?? ''),
        //     'message'   => $request->message ?? '',
        //     'page_url'  => url()->previous(),
        //     'date'      => now()->format('Y-m-d H:i:s'),
        // ];
         
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

        // Google Sheet fail ho to bhi user ko success dikhana hai (data DB me save ho chuka hai)
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

    /**
     * AJAX (jQuery) request ko JSON, normal form post ko thank-you redirect.
     */
    private function requestSuccess(Request $request)
    {
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully.',
            ]);
        }

        return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');
    }

    /**
     * Google reCAPTCHA token ko server par verify karta hai.
     */
    private function captchaPassed(Request $request): bool
    {
        // Localhost par Google ki test secret, live par apni secret key yahan daalo
        $secret = in_array($request->getHost(), ['localhost', '127.0.0.1'])
            ? '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe'
            : '';

        if ($secret === '') {
            return true; // secret nahi hai to server-side check skip
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
        // Redirect to contact route with success message
        return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');
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
        $faq = Faq::where('status', 'Active')->where('faq_url', 'payroll-services')->first();

        $meta_title       = "Payroll Outsourcing Services | PCS Global";
        $meta_description = "PCS Global provides payroll outsourcing services for startups, SMEs, and enterprises, helping businesses manage payroll efficiently with expert professionals.";

        return view('pages.india.payroll-services', compact('meta_title', 'meta_description', 'faq'));
    }

    public function taxationservices()
    {
        $meta_title       = "Tax Preparation Outsourcing Services | PCS Global";
        $meta_description = "Outsource tax preparation to PCS Global: workpapers, draft returns and sales tax workings for CPA firms and businesses in the USA, UK and Australia.";

        return view('pages.india.taxation-services', compact('meta_title', 'meta_description'));
    }

    public function payrolloutsourcing()
    {
        $meta_title       = "";
        $meta_description = "";

        return view('pages.india.payroll-outsourcing-services', compact('meta_title', 'meta_description'));
    }

    // Shared page (India, Australia). Header/footer: route middleware 'country:<key>' -> $site
    public function strataManagement()
    {
        $faq         = Faq::where('status', 'Active')->where('faq_url', 'strata-management')->first();
        $whychooseus = WhyChooseUs::where('status', 'Active')->get();

        $meta_title       = "Strata Management Services – PCS Global ";
        $meta_description = "PCS Global specializes in strata management, providing expert administration, operations & management for residential, commercial & industrial properties.";

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
        $faq = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-usa')->first();

        $meta_title       = "Accounting & Bookkeeping Services for US Businesses";
        $meta_description = "Looking for reliable accounting and bookkeeping services in the USA? PCS offers expert bookkeeping, VAT registration, payroll, and CFO solutions for SMEs.";

        return view('pages.us.pcs-global-usa', compact('meta_title', 'meta_description', 'faq'));
    }

    public function globalAus()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-aus')->first();

        $meta_title       = "Accounting & Bookkeeping Services for Australian Businesses";
        $meta_description = "PCS is a leading Australia-based accounting and bookkeeping service provider. Outsource your financial tasks to our expert team and focus on growth.";

        return view('pages.australia.pcs-global-aus', compact('meta_title', 'meta_description', 'faq'));
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

        return view('pages.india.thank-you', compact('meta_title', 'meta_description'));
    }

    public function taxationservicesusa()
    {
        $meta_title       = "Tax Preparation Services in USA | PCS Global";
        $meta_description = "At PCs Global, our expert US tax professionals assist you in minimizing your tax liability and staying fully compliant with state regulations.";

        return view('pages.us.taxation-services-usa', compact('meta_title', 'meta_description'));
    }

    public function taxationaustralian()
    {
        $meta_title       = "Tax Preparation Services for Australian Business";
        $meta_description = "As a trusted Australian Tax Outsourcing partner, PCS Global specialises in corporate tax compliance, GST registration, and international tax structuring.";

        return view('pages.australia.taxation-services-australian', compact('meta_title', 'meta_description'));
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
        $meta_description = "Simplify your accounting with PCS Global. We provide dedicated services for UK small businesses and SMEs, ensuring compliance and financial clarity.";

        return view('pages.uk.small-business-accounting-service', compact('meta_title', 'meta_description'));
    }

    public function outsourceTaxPreparationServices(Request $request)
    {
        $meta_title       = "Tax Preparation Services in UK | PCS Global";
        $meta_description = "At PCS Global, we make taxation easy to understand for UK businesses, offering full-service assistance so businesses remain compliant and financially optimised.";

        return view('pages.uk.outsource-tax-preparation-services', compact('meta_title', 'meta_description'));
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
        $meta_title       = "Outsourced Accounting Services for UK Accounting Firms | PCS Global";
        $meta_description = "Scale your UK accounting firm with expert outsourced accounting services from PCS Global. Improve productivity, reduce costs, and meet deadlines easily.";

        $faq = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-uk')->first();
        return view('pages.uk.accounting-outsourcing-service', compact('meta_title', 'meta_description', 'faq'));
    }

    public function whitelabelAccountingServices()
    {
        $meta_title       = "White Label Accounting Services for Accounting Firms | PCS Global";
        $meta_description = "PCS Global is trusted white label accounting partner offering bookkeeping, accounts payable, receivable and client accounting services for US, UK & Australian firms.";
        $countries        = Country::all();

        return view('pages.india.whitelabel-accounting-services', compact('meta_title', 'meta_description', 'countries'));
    }

}

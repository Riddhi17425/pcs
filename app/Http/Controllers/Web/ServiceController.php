<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrustedPartner;
use App\Models\Industries;
use App\Models\OurExpert;
use App\Models\Blogs;
use App\Models\WhyChooseUs;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Models\Faq;
use App\Models\ConsultantForm;
use App\Models\RequestForm;
use App\Models\Country;

class ServiceController extends Controller
{
    public function index()
    {    
        $meta_title = "";
        $meta_description = "";
        $images = TrustedPartner::where('status','Active')->get();
        $industries = Industries::where('status','Active')->get();
        $ourexpert = OurExpert::where('status','Active')->get();
        $blogs = Blogs::orderBy('id','desc')->where('status','Active')->get();
        return view('front.dashboard',compact('meta_title','meta_description','images','industries','ourexpert','blogs'));
    }

    

    public function requestStore(Request $request)
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
            'message'  => 'nullable|string',
        ]);

        RequestForm::create([
            'fullname'         => $request->fullname,
            'country' => $request->country,
            'phone'      => $request->phone,
            'email'        => $request->email,
            'message'      => $request->message,
        ]);
        $sheetData = [
                    'form_type'=>'Request Form',
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
            'fullname'         => $request->c_fullname,
            'country' => $request->c_country,
            'phone'      => $request->c_phone,
            'email'        => $request->c_email,
            'message'      => $request->c_message,
        ]);
        // Redirect to contact route with success message
        return redirect()->route('thank.you')->with('success', 'Your message has been sent successfully.');
    }

    public function about()
    {
        // return 1;
        $meta_title="";
        $meta_description="";
        $whychooseus = WhyChooseUs::where('status','Active')->get();
        return view('front.about',compact('meta_title','meta_description','whychooseus'));
    }

     public function dataSecurity()
    {
         $faq = Faq::where('status', 'Active')->where('faq_url', 'data-security')->first();
        $meta_title = "Data Security & Protection Services | PCS Global ";
        $meta_description = "PCS Global cybersecurity solutions protect businesses from cyber threats, data breaches, and compliance risks, ensuring secure and uninterrupted operations.";

        return view('front.data-security',compact('meta_title','meta_description','faq'));
    }
    
    public function accountingBookeeping()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-bookkeeping')->first();
        $meta_title = "Bookkeeping & Accounting Services for Startups & SMBs";
        $meta_description = "PCS offers bookkeeping, tax, accounting & advisory services for startups and small businesses—so you can focus on growth while we handle your finances.";

        return view('front.accounting-bookkeeping',compact('meta_title','meta_description','faq'));
    }

    public function payrollService()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'payroll-services')->first();

        $meta_title = "Payroll Outsourcing Services | PCS Global";
        $meta_description = "PCS Global provides payroll outsourcing services for startups, SMEs, and enterprises, helping businesses manage payroll efficiently with expert professionals.";

        return view('front.payroll-services', compact('meta_title', 'meta_description', 'faq'));
    }
     public function taxationservices()
    {
        $meta_title = "Global Tax Consultants for Australia, USA, UK - PCS";
        $meta_description = "PCS Global Group provides expert tax consulting and advisory services for Australia USA, and the UK, ensuring accuracy, compliance and optimised financial outcomes.";

        return view('front.taxation-services', compact('meta_title', 'meta_description'));
    }
     public function payrolloutsourcing()
    {
        $meta_title = "";
        $meta_description = "";
        
        return view('front.payroll-outsourcing-services',compact('meta_title','meta_description'));
    }

    public function strataManagement()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'strata-management')->first();
        $whychooseus = WhyChooseUs::where('status','Active')->get();
 
        $meta_title = "Strata Management Services – PCS Global ";
        $meta_description = "PCS Global specializes in strata management, providing expert administration, operations & management for residential, commercial & industrial properties.";

        return view('front.strata-management',compact('meta_title','meta_description','faq','whychooseus'));
    }

    public function recruitmentService()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'recruitment-services')->first();

        $meta_title = "Recruitment Process Outsourcing Services – RPO Solution";
        $meta_description = "PCS Global offers Recruitment Process Outsourcing (RPO) services to streamline hiring, cut recruitment costs, and help businesses attract top talent.";

        return view('front.recruitment-services',compact('meta_title','meta_description','faq'));
    }

    public function globalUsa()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-usa')->first();

        $meta_title = "Accounting & Bookkeeping Services for US Businesses";
        $meta_description = "Looking for reliable accounting and bookkeeping services in the USA? PCS offers expert bookkeeping, VAT registration, payroll, and CFO solutions for SMEs.";

        return view('front.pcs-global-usa',compact('meta_title','meta_description','faq'));
    }

    public function globalAus()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-aus')->first();

        $meta_title = "Accounting & Bookkeeping Services for Australian Businesses";
        $meta_description = "PCS is a leading Australia-based accounting and bookkeeping service provider. Outsource your financial tasks to our expert team and focus on growth.";

        return view('front.pcs-global-aus',compact('meta_title','meta_description','faq'));
    }

    public function globalUk()
    {
        $faq = Faq::where('status', 'Active')->where('faq_url', 'pcs-global-uk')->first();

        $meta_title = "UK Expert Accounting & Bookkeeping Services";
        $meta_description = "PCS offers reliable accounting & bookkeeping services for UK SMEs—managing your back office, accounting, and compliance with expert precision.";

        return view('front.pcs-global-uk',compact('meta_title','meta_description','faq'));
    }
    
    public function thankyou()
    {
        $meta_title = "";
        $meta_description = "";
        
        return view('front.thank-you',compact('meta_title','meta_description'));
    }
    
    public function taxationservicesusa()
    {
        $meta_title = "Tax Preparation Services in USA | PCS Global";
        $meta_description = "At PCs Global, our expert US tax professionals assist you in minimizing your tax liability and staying fully compliant with state regulations.";
        
        return view('front.taxation-services-usa',compact('meta_title','meta_description'));
    }
     public function taxationaustralian()
    {
        $meta_title = "Tax Preparation Services for Australian Business";
        $meta_description = "As a trusted Australian Tax Outsourcing partner, PCS Global specialises in corporate tax compliance, GST registration, and international tax structuring.";
        
        return view('front.taxation-services-australian',compact('meta_title','meta_description'));
    }
     public function taxationservicesuk()
    {
        $meta_title = "Tax Preparation Services in UK | PCS Global";
        $meta_description = "At PCS Global, we make taxation easy to understand for UK businesses, offering full-service assistance so businesses remain compliant and financially optimised.";
        
        return view('front.taxation-services-uk',compact('meta_title','meta_description'));
    }
    public function itautomation()
    {
        $meta_title = "IT Outsourcing Services | IT Outsourcing Company";
        $meta_description = "PCS Global Group is a leading IT outsourcing company offering secure, scalable IT outsourcing services to help businesses reduce costs and grow efficiently.";
        $faq = Faq::where('status', 'Active')->where('faq_url', 'it-automation')->first();
        return view('front.it-automation',compact('meta_title','meta_description','faq'));
    }
    
    public function whitelabelAccountingServices(){
        $meta_title = "";
        $meta_description = "";
        
        return view('front.whitelabel-accounting-services',compact('meta_title','meta_description'));
    }
}

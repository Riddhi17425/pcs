<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrustedPartner;
use App\Models\Industries;
use App\Models\OurExpert;
use App\Models\Blogs;
use App\Models\Faq;
use Illuminate\Support\Carbon;
use App\Models\WhatsappInquiry;

class HomeController extends Controller
{
    public function index()
    {    
        $meta_title = "Property, Strata & Staffing Solutions for US, UK, & AU";
        $meta_description = "PCS Global offers tailored property & strata management solutions, including accounting, payroll, bookkeeping, and recruitment in the USA, UK, and Australia.";
        $images = TrustedPartner::where('status','Active')->get();
        $industries = Industries::where('status','Active')->get();
        $ourexpert = OurExpert::where('status','Active')->get();
        $blogs = Blogs::orderBy('id','desc')->where('status','Active')->get();
        return view('front.dashboard',compact('meta_title','meta_description','images','industries','ourexpert','blogs'));
    }
    
    public function datasecurity()
    {    
        $faq = Faq::where('status', 'Active')->where('faq_url', 'data-security')->first();
        $meta_title = "Data Security & Protection Services | PCS Global";
        $meta_description = "PCS Global cybersecurity solutions protect businesses from cyber threats, data breaches, and compliance risks, ensuring secure and uninterrupted operations";
        return view('front.data-security',compact('meta_title','meta_description','faq'));
    }
    
    public function PrivacyPolicy(){
        $meta_title = "Privacy Policy | PCS Global - Data Collection & Protection";
        $meta_description = "Read the PCS Global Group Privacy Policy to understand how we collect, use, protect, and manage your personal data when you visit and interact with our website.";
        return view('front.privacy-policy',compact('meta_title','meta_description'));
    }
    
    // public function whatsaapinquiry(Request $request)
    // {
    //     WhatsappInquiry::create([
           
    //         'number'  => $request->number,
    //         'message'  => $request->message,
    //     ]);
    
    //     $timestamp = Carbon::now()->format('Y-m-d H:i:s');
    
    //     // Google Sheet expects:
    //     // form_type, contact, message, date
    //     $sheetsData = [
    //         'form_type' => 'whatsapp inquiry',
    //         'contact'   => $request->number,
    //         'message'  => $request->message,
    //         'date'      => $timestamp,
    //     ];
    //     try {
    //         Http::withHeaders(['Content-Type' => 'application/json'])
    //             ->post('https://script.google.com/macros/s/AKfycbx0NpN0bdDJrfxmdAny47IvxRqjVcTIg3CB3iu9ohoD4b_yj-GRVnnLUTO2N4llHG9fqA/exec', 
    //                 $sheetsData
    //             );
    //     } catch (\Exception $e) {
    //         \Log::error('Google Sheets Exception (WhatsApp Inquiry):', [
    //             'message'   => $e->getMessage(),
    //             'trace'     => $e->getTraceAsString(),
    //             'data_sent' => $sheetsData
    //         ]);
    //     }
    
        
    //     $number = '918460268698'; // Change if needed
    //     $message = 'Inquiry from the website.';
    //     $whatsappUrl = "https://api.whatsapp.com/send/?phone={$number}&text=" . urlencode($message);
    
    //     return redirect()->away($whatsappUrl);
    // }
   
}

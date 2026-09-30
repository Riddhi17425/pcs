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
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {    
        $meta_title = "Accounting Outsourcing Partner for UK, US & Australian Firms";
        $meta_description = "PCS Global is a trusted accounting outsourcing partner for accounting firms, providing bookkeeping, taxation and payroll services in the UK, USA & Australia.";
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
    
    public function whatsaapinquiry(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required',
            'message' => [
                'nullable','string','max:500',
    
                function ($attribute, $value, $fail) {
                    if (!$value) return;
                    
                    if (preg_match('/<[^>]*>/', $value)) {
                        $fail('HTML tags are not allowed.');
                    }
    
                    if (preg_match('/https?:\/\/|www\./i', $value)) {
                        $fail('Links are not allowed in message.');
                    }
    
                    if (preg_match('/[\x{0400}-\x{04FF}]/u', $value)) {
                        $fail('Invalid characters detected.');
                    }
    
                    $spamWords = ['seo','crypto','viagra','casino','furniture','wholesale'];
                    $count = 0;
    
                    foreach ($spamWords as $word) {
                        if (stripos($value, $word) !== false) {
                            $count++;
                        }
                    }
    
                    if ($count >= 2) {
                        $fail('Spam content detected.');
                    }
    
                    preg_match_all('/https?:\/\/|www\./i', $value, $matches);
                    if (count($matches[0]) > 1) {
                        $fail('Too many links not allowed.');
                    }
                }
            ],
        ]);
        
         // ❌ If honeypot filled → it's a bot
        if (!empty($request->website_honey_point)) {
            return back(); // silently ignore
        }
    
     WhatsappInquiry::create([
         
            'message' => $request->message,
            'number' =>  $request->number,
        ]);
    
        $timestamp = Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s');
        
            // Google Sheet expects:
            // form_type, contact, message, date
            $sheetsData = [
                'form_type' => 'whatsapp inquiry',
                'contact'   => $request->number,
                'message'  => $request->message,
                'date'      => $timestamp,
            ];
        
            // Send to Google Sheets
            try {
                Http::withHeaders(['Content-Type' => 'application/json'])
                    ->post('https://script.google.com/macros/s/AKfycbx0NpN0bdDJrfxmdAny47IvxRqjVcTIg3CB3iu9ohoD4b_yj-GRVnnLUTO2N4llHG9fqA/exec', 
                        $sheetsData
                    );
            } catch (\Exception $e) {
                \Log::error('Google Sheets Exception (WhatsApp Inquiry):', [
                    'message'   => $e->getMessage(),
                    'trace'     => $e->getTraceAsString(),
                    'data_sent' => $sheetsData
                ]);
            }
    
        $number = '918460268698'; // Or use $request->number if needed
        $message = "Inquiry from Website\n\n"
                . "Customer Number: " . $request->full_number . "\n"
                . "Message: " . $request->message;
        $whatsappUrl = "https://api.whatsapp.com/send/?phone={$number}&text=" . urlencode($message) . "&type=phone_number&app_absent=0";
    
        return redirect()->away($whatsappUrl);
        
    
    }
   
}

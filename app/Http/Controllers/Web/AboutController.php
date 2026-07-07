<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChooseUs;
use App\Models\OurTeam;
use App\Models\Faq;

class AboutController extends Controller
{
    public function about()
    {
        $meta_title="About Us | PCS Global – Strata Company";
        $meta_description="At PCS Global, we deliver smart, affordable strata management solutions to all types of businesses that enhance efficiency, reduce costs, and support growth.";
        $whychooseus = WhyChooseUs::where('status','Active')->get();
        $teamMembers = OurTeam::where('status', 'Active')->get();
        $faq = Faq::where('status', 'Active')->where('faq_url', 'about')->first();
        return view('front.about',compact('meta_title','meta_description','whychooseus','teamMembers','faq'));
    }
    
    public function ukAbout(Request $request){
        $meta_title="About Us | PCS Global – Strata Company";
        $meta_description="At PCS Global, we deliver smart, affordable strata management solutions to all types of businesses that enhance efficiency, reduce costs, and support growth.";
        $whychooseus = WhyChooseUs::where('status','Active')->get();
        $teamMembers = OurTeam::where('status', 'Active')->get();
        $faq = Faq::where('status', 'Active')->where('faq_url', 'about')->first();
        return view('front.uk_about',compact('meta_title','meta_description','whychooseus','teamMembers','faq'));
    }
    
}

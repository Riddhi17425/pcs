<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChooseUs;
use App\Models\OurTeam;
use App\Models\Faq;

class AboutController extends Controller
{
    // Shared page (India, Australia, US). Header/footer: route middleware 'country:<key>' -> $site
    public function about()
    {
        $meta_title="About PCS Global | Accounting & Finance Outsourcing Partner";
        $meta_description="Learn about PCS Global, our experienced team, core values and commitment to accuracy, integrity and long-term partnerships with global accounting firms.";
        $whychooseus = WhyChooseUs::where('status','Active')->get();
        $teamMembers = OurTeam::where('status', 'Active')->get();
        $faq = Faq::where('status', 'Active')->where('faq_url', 'about')->first();
        return view('pages.shared.about',compact('meta_title','meta_description','whychooseus','teamMembers','faq'));
    }
   
    public function ukAbout(Request $request){
        $meta_title="About PCS Global | Accounting & Finance Outsourcing Partner";
        $meta_description="Learn about PCS Global, our experienced team, core values and commitment to accuracy, integrity and long-term partnerships with global accounting firms.";
        $whychooseus = WhyChooseUs::where('status','Active')->get();
        $teamMembers = OurTeam::where('status', 'Active')->get();
        $faq = Faq::where('status', 'Active')->where('faq_url', 'about')->first();
        return view('pages.uk.uk_about',compact('meta_title','meta_description','whychooseus','teamMembers','faq'));
    }
 
    
}

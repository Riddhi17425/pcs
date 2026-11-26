<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhyChooseUs;
use App\Models\OurTeam;
use App\Models\Faq;

class AboutController extends Controller
{
    public function about(Request $request)
    {
        // Meta per country (the route's country middleware sets the 'country' attribute)
        $meta = [
            'us' => [
                'About PCS Global | Trusted US Accounting Outsourcing Partner',
                'PCS Global is an accounting outsourcing partner for US businesses and firms, providing bookkeeping, tax, payroll and GAAP support. Meet our US expert team.',
            ],
            'australia' => [
                'About PCS Global | Australian Accounting Outsourcing Partner',
                'PCS Global is accounting outsourcing partner for Australian businesses and firms, providing bookkeeping, tax, payroll and Strata support. Meet our expert team.',
            ],
        ][$request->attributes->get('country')] ?? [
            'About PCS Global | Trusted Global Accounting Outsourcing Partner',
            'Learn about PCS Global, our experienced team, core values and commitment to accuracy, integrity and long-term partnerships with global accounting firms.',
        ];
        [$meta_title, $meta_description] = $meta;
        $whychooseus = WhyChooseUs::where('status','Active')->get();
        $teamMembers = OurTeam::where('status', 'Active')->get();
        $faq = Faq::where('status', 'Active')->where('faq_url', 'about')->first();
        return view('pages.shared.about',compact('meta_title','meta_description','whychooseus','teamMembers','faq'));
    }
   
    public function ukAbout(Request $request){
        $meta_title="About PCS Global | Trusted UK Accounting Outsourcing Partner";
        $meta_description="PCS Global is an accounting outsourcing partner for UK businesses and firms, providing bookkeeping, tax, payroll and VAT support. Meet our UK expert team.";
        $whychooseus = WhyChooseUs::where('status','Active')->get();
        $teamMembers = OurTeam::where('status', 'Active')->get();
        $faq = Faq::where('status', 'Active')->where('faq_url', 'about')->first();
        return view('pages.uk.uk_about',compact('meta_title','meta_description','whychooseus','teamMembers','faq'));
    }
 
    
}

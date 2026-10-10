<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\OurExpert;
use App\Models\TrustedPartner;
use Illuminate\Http\Request;

// Australia, US, UK ka home page.
// Country: route group ka middleware 'country:<key>' (routes/countries/*.php)
// View: resources/views/pages/<country>/home.blade.php   |   Meta + team filter: config/sites.php -> 'home'
class CountryHomeController extends Controller
{
    public function home(Request $request)
    {
        $country = $request->attributes->get('country');
        $home = config("sites.$country.home");

        return view("pages.$country.home", [
            'meta_title' => $home['meta_title'],
            'meta_description' => $home['meta_description'],
            'images' => TrustedPartner::where('status', 'Active')->get(),
            'blogs' => Blogs::orderBy('id', 'desc')->where('status', 'Active')->get(),
            // team slider: sirf is country ke experts (designation LIKE)
            'ourexpert' => OurExpert::where('status', 'Active')
                ->where(function ($q) use ($home) {
                    foreach ($home['experts'] as $pattern) {
                        $q->orWhere('designation', 'like', $pattern);
                    }
                })
                ->get(),
        ]);
    }
}

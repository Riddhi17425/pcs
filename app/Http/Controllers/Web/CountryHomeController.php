<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\OurExpert;
use App\Models\TrustedPartner;

// Sab countries (Australia, US, ...) ka home page. Country route ke ->defaults('country', ...) se aati hai,
// view / meta / team filter config/sites.php se.
class CountryHomeController extends Controller
{
    public function home($country)
    {
        $home = config("sites.$country.home") ?? abort(404);
        $meta_title = $home['meta_title'];
        $meta_description = $home['meta_description'];
        $images = TrustedPartner::where('status', 'Active')->get();
        $blogs = Blogs::orderBy('id', 'desc')->where('status', 'Active')->get();
        $ourexpert = OurExpert::where('status', 'Active')
            ->where(function ($q) use ($home) {
                foreach ($home['experts'] as $pattern) {
                    $q->orWhere('designation', 'like', $pattern);
                }
            })
            ->get();

        return view($home['view'], compact('meta_title', 'meta_description', 'images', 'blogs', 'ourexpert'));
    }
}

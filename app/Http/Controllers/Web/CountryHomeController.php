<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\OurExpert;
use App\Models\TrustedPartner;
use Illuminate\Http\Request;

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

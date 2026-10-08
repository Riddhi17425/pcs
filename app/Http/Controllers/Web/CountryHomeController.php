<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\OurExpert;
use App\Models\TrustedPartner;

// Sab countries (Australia, US, UK) ka home page.
// Country route ke ->defaults('country', ...) se aati hai.
// Meta + team filter: config/sites.php   |   Page content: resources/content/<country>/home.php
class CountryHomeController extends Controller
{
    public function home($country)
    {
        $site = config("sites.$country") ?? abort(404);
        $home = $site['home'];

        $db = [
            'images' => TrustedPartner::where('status', 'Active')->get(),
            'blogs' => Blogs::orderBy('id', 'desc')->where('status', 'Active')->get(),
            'ourexpert' => OurExpert::where('status', 'Active')
                ->where(function ($q) use ($home) {
                    foreach ($home['experts'] as $pattern) {
                        $q->orWhere('designation', 'like', $pattern);
                    }
                })
                ->get(),
        ];

        $content = require resource_path("content/$country/home.php");
        $sections = $content($db);

        return view('shared.country-home', [
            'meta_title' => $home['meta_title'],
            'meta_description' => $home['meta_description'],
            'site' => $site,
            'sections' => $sections,
        ]);
    }
}

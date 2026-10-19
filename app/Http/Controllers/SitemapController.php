<?php

namespace App\Http\Controllers;

use App\Models\Blogs;

class SitemapController extends Controller
{
    public function index()
    {
        $todayTime = now()->toAtomString();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // HOMEPAGE
        $xml .= '<url>';
        $xml .= '<loc>' . url('/') . '</loc>';
        $xml .= '<lastmod>' . $todayTime . '</lastmod>';
        $xml .= '<priority>1.00</priority>';
        $xml .= '</url>';

        // STATIC PAGES
        $staticPages = [
            'data-security',
            'about',
            'contact-us',
            'strata-management',
            'white-label-accounting-services',
            'outsourced-accounting-bookkeeping-services',
            'outsourced-taxation-services',
            'outsourced-payroll-services',
            'recruitment-services',
            'payroll-outsourcing-services',
            'australia/bookkeeping-accounting-services',
            'us/bookkeeping-and-accounting-services',
            'us/taxation-services',
            'australia/taxation-services',
            'uk/taxation-services',
            'it-automation',
            'uk/accounting-outsourcing-services/',
            'uk/small-business-accounting-services/',
            'uk/outsource-tax-preparation-services/',
            'uk/about/',
            'blog',
        ];

        foreach ($staticPages as $page)
        {
            $xml .= '<url>';
            $xml .= '<loc>' . url($page) . '</loc>';
            $xml .= '<lastmod>' . $todayTime . '</lastmod>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.60</priority>';
            $xml .= '</url>';
        }

        // DYNAMIC BLOG PAGES
        $blogs = Blogs::where('status', 'Active')
            ->whereNotNull('url')
            ->where('url', '!=', '')
            ->latest('updated_at')
            ->get();

        foreach ($blogs as $blog)
        {
            $lastModified = $blog->updated_at
                ? $blog->updated_at->toAtomString()
                : $todayTime;

            $xml .= '<url>';
            $xml .= '<loc>' . url('blogs/' . $blog->url) . '</loc>';
            $xml .= '<lastmod>' . $lastModified . '</lastmod>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.60</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
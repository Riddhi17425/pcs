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

        // STATIC PAGES
        $staticPages = [
            '/',
            '/about',
            '/white-label-accounting-services',
            '/recruitment-services',
            '/it-automation',
            '/data-security',
            '/blog',
            '/contact-us',
            '/accounting-outsourcing-services',
            '/tax-preparation-outsourcing-services',
            '/bookkeeping-outsourcing-services',
            '/payroll-outsourcing-services',

            // AUSTRALIA PAGES
            '/au',
            '/au/about',
            '/au/accounting-outsourcing-services',
            '/au/tax-preparation-outsourcing-services',
            '/au/strata-management-services',
            '/au/contact-us',

            // UK PAGES
            '/uk',
            '/uk/about',
            '/uk/accounting-outsourcing-services',
            '/uk/small-business-accounting-services',
            '/uk/tax-preparation-outsourcing-services',
            '/uk/contact-us',

            // US PAGES
            '/us',
            '/us/about',
            '/us/accounting-outsourcing-services',
            '/us/tax-preparation-outsourcing-services',
            '/us/contact-us',
        ];

        foreach ($staticPages as $page)
        {
            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars(url($page), ENT_XML1, 'UTF-8') . '</loc>';
            $xml .= '<lastmod>' . $todayTime . '</lastmod>';
            $xml .= '</url>';
        }

        // DYNAMIC BLOG DETAIL PAGES
        $blogs = Blogs::where('status', 'Active')
            ->whereNotNull('url')
            ->where('url', '!=', '')
            ->orderBy('updated_at', 'asc')
            ->get();

        foreach ($blogs as $blog)
        {
            $lastModified = $blog->updated_at
                ? $blog->updated_at->toAtomString()
                : $todayTime;

            $blogUrl = url('blogs/' . $blog->url);

            $xml .= '<url>';
            $xml .= '<loc>' . htmlspecialchars($blogUrl, ENT_XML1, 'UTF-8') . '</loc>';
            $xml .= '<lastmod>' . $lastModified . '</lastmod>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
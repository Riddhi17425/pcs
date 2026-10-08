<?php

// Har country site ka header / footer aur country-specific settings.
// Shared pages (blogs, about, contact, strata) aur country home isi se decide karte hain kya lagana hai.
// Note: Blogs aur Data Security abhi sab countries me ek hi (main) page hain; dusri countries
// unhe naye tab me kholti hain, isliye unke alag blog routes nahi hain.
return [
    'india' => [
        'header' => 'countries.india.layouts.frontheader',
        'footer' => 'countries.india.layouts.frontfooter',
        'blog' => 'blog',
        'blog_detail' => 'blogs.detail',
    ],
    'australia' => [
        'header' => 'countries.australia.layouts.frontheader-au',
        'footer' => 'countries.australia.layouts.frontfooter-au',
        'home' => [
            'view' => 'countries.australia.pages.home',
            'meta_title' => 'Accounting Outsourcing Company for Australian Businesses & Firms | PCS Global',
            'meta_description' => 'PCS Global is a trusted Australian accounting outsourcing company supporting businesses and accounting firms with bookkeeping, tax, payroll and financial support.',
            // team slider me admin panel ke kaun se experts aayen (designation LIKE)
            'experts' => ['%Australia%'],
        ],
    ],
    'us' => [
        'header' => 'countries.us.layouts.frontheader-us',
        'footer' => 'countries.us.layouts.frontfooter-us',
        'home' => [
            'view' => 'countries.us.pages.home',
            'meta_title' => 'Accounting Outsourcing Company for US Businesses & CPA Firms | PCS Global',
            'meta_description' => 'PCS Global is a trusted accounting outsourcing company for US businesses and CPA firms, with dedicated teams for accounting, bookkeeping, tax, payroll and audit support.',
            'experts' => ['%USA%', '% US'],
        ],
    ],
    'uk' => [
        'header' => 'countries.uk.layouts.frontheader-uk',
        'footer' => 'countries.uk.layouts.frontfooter-uk',
        'home' => [
            'view' => 'countries.uk.pages.home',
            'meta_title' => 'Accounting Outsourcing Company for UK Businesses & Accountancy Firms | PCS Global',
            'meta_description' => 'PCS Global is a trusted accounting outsourcing company for UK businesses and accountancy firms, covering accounting, bookkeeping, payroll, tax and VAT.',
            'experts' => ['%UK%'],
        ],
    ],
];

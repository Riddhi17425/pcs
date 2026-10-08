<?php

// Har country site ka header / footer aur country-specific settings.
// Shared pages (blogs, about, contact, strata) aur country home isi se decide karte hain kya lagana hai.
// Home page ka content: resources/content/<country>/home.php  |  Poora map: STRUCTURE.md (project root)
// Note: Blogs aur Data Security abhi sab countries me ek hi (main) page hain; dusri countries
// unhe naye tab me kholti hain, isliye unke alag blog routes nahi hain.
return [
    'india' => [
        'header' => 'countries.india.layouts.header',
        'footer' => 'countries.india.layouts.footer',
        'phone' => '+917968260121', // "Request A Call" buttons isi number par call karte hain
        'blog' => 'blog',
        'blog_detail' => 'blogs.detail',
    ],
    'australia' => [
        'header' => 'countries.australia.layouts.header',
        'footer' => 'countries.australia.layouts.footer',
        'phone' => '+61399980494',
        'home' => [
            'meta_title' => 'Accounting Outsourcing Company for Australian Businesses & Firms | PCS Global',
            'meta_description' => 'PCS Global is a trusted Australian accounting outsourcing company supporting businesses and accounting firms with bookkeeping, tax, payroll and financial support.',
            // team slider me admin panel ke kaun se experts aayen (designation LIKE)
            'experts' => ['%Australia%'],
        ],
    ],
    'us' => [
        'header' => 'countries.us.layouts.header',
        'footer' => 'countries.us.layouts.footer',
        'phone' => '+13478018715',
        'home' => [
            'meta_title' => 'Accounting Outsourcing Company for US Businesses & CPA Firms | PCS Global',
            'meta_description' => 'PCS Global is a trusted accounting outsourcing company for US businesses and CPA firms, with dedicated teams for accounting, bookkeeping, tax, payroll and audit support.',
            'experts' => ['%USA%', '% US'],
        ],
    ],
    'uk' => [
        'header' => 'countries.uk.layouts.header',
        'footer' => 'countries.uk.layouts.footer',
        'phone' => '+441134034334',
        'home' => [
            'meta_title' => 'Accounting Outsourcing Company for UK Businesses & Accountancy Firms | PCS Global',
            'meta_description' => 'PCS Global is a trusted accounting outsourcing company for UK businesses and accountancy firms, covering accounting, bookkeeping, payroll, tax and VAT.',
            'experts' => ['%UK%'],
        ],
    ],
];

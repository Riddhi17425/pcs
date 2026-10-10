<?php

// Har country site ki settings: header type, CSS files, menu, footer, phone, home page meta.
// - Route group ka middleware 'country:<key>' (routes/countries/*.php) is site ko views me $site bana ke share karta hai.
// - Links yahan route NAMES hain; App\Support\Site unhe URL bana deta hai.
// - Blogs aur Data Security sab countries ka ek hi (main) page hai; dusri countries unhe naye tab me kholti hain.
// Poora map: STRUCTURE.md (project root)

// Australia / US / UK ek hi header use karte hain, isliye CSS bhi same (order zaroori hai)
$countryCss = [
    'style.css',
    'common/request-modal.css',
    'responsive.css',
    'common/buttons.css',
    'common/header-overlay.css',
    'common/hero-dark.css',
    'common/home-sections.css',
    'common/contact-form.css',
];

// US / UK footer badges (asset path: public/front/images/...)
$isoBadges = [
    ['figma-footer-badges/iso-9001.png', 'ISO 9001', 'circle'],
    ['figma-footer-badges/iso-27001.png', 'ISO 27001', 'circle'],
    ['figma-footer-badges/gdpr.png', 'GDPR', 'circle'],
];

return [
    'india' => [
        'header' => 'global',   // resources/views/partials/header/global.blade.php
        'css' => [
            'style.css',
            'common/buttons.css',
            'common/request-modal.css',
            'common/contact-form.css',
            'responsive.css',
        ],
        // "Request A Call" buttons isi number par call karte hain
        'phone' => ['tel' => '+917968260121', 'label' => '(+91) 796 826 0121'],
        'blog' => 'blog',
        'blog_detail' => 'blogs.detail',
        'services' => [
            ['Accounting & Bookkeeping', 'pcs.global.bookkeeping'],
            ['Strata Property Management', 'strata.management'],
            ['Payroll Outsourcing Services', 'payroll.services'],
            ['Taxation Services', 'taxation.services'],
            ['Recruitment Outsourcing Services', 'recruitment.services'],
            ['IT Automation Services', 'it.automation'],
        ],
        'footer' => [
            'home' => 'front.home',
            'quick_links' => [
                ['Home', 'front.home'],
                ['About Us', 'about'],
                ['Data Security', 'datasecurity'],
                ['Contact Us', 'contact'],
                ['Blogs', 'blog'],
            ],
            'address' => '22A Mort Street Blacktown<br>NSW 2148 Australia.',
            'phones' => [
                ['number' => '(+613) 9998 0494', 'label' => 'AUS', 'icon' => 'contry-icon/australia-icon.png', 'alt' => 'Australia'],
                ['number' => '(+1) 347 801 8715', 'label' => 'USA', 'icon' => 'contry-icon/us-icon.png', 'alt' => 'USA'],
                ['number' => '(+91) 796 826 0121', 'label' => 'IND', 'icon' => 'contry-icon/india-icon.svg', 'alt' => 'India'],
                ['number' => '(+44) 113 4034334', 'label' => 'UK', 'icon' => 'contry-icon/uk-icon.png', 'alt' => 'UK'],
            ],
        ],
    ],

    'australia' => [
        'header' => 'country',   // resources/views/partials/header/country.blade.php
        'css' => $countryCss,
        'phone' => ['tel' => '+61399980494', 'label' => '(+613) 9998 0494'],
        'services' => [
            ['Accounting & Bookkeeping', 'pcs.global.aus'],
            ['Taxation Services', 'taxation-services-australian'],
            ['Strata Property Management', 'australia.strata'],
        ],
        'nav' => [
            'home' => 'australia.home',
            'about' => 'australia.about',
            'contact' => 'australia.contact',
            'country' => ['name' => 'Australia', 'flag' => 'australia-icon.png'],
        ],
        'footer' => [
            'home' => 'australia.home',
            'quick_links' => [
                ['Home', 'australia.home'],
                ['About Us', 'australia.about'],
                ['Data Security', 'datasecurity', true],   // naye tab me
                ['Contact Us', 'australia.contact'],
                ['Blogs', 'blog', true],                   // naye tab me
            ],
            'address' => '22A Mort Street Blacktown<br>NSW 2148 Australia.',
            'phones' => [['number' => '(+613) 9998 0494']],
        ],
        'home' => [
            'meta_title' => 'Accounting Outsourcing Company for Australian Businesses & Firms | PCS Global',
            'meta_description' => 'PCS Global is a trusted Australian accounting outsourcing company supporting businesses and accounting firms with bookkeeping, tax, payroll and financial support.',
            // team slider me admin panel ke kaun se experts aayen (designation LIKE)
            'experts' => ['%Australia%'],
        ],
    ],

    'us' => [
        'header' => 'country',
        'css' => $countryCss,
        'phone' => ['tel' => '+13478018715', 'label' => '(+1) 347 801 8715'],
        'services' => [
            ['Accounting & Bookkeeping', 'pcs.global.usa'],
            ['Taxation Services', 'taxation-services-usa'],
        ],
        'nav' => [
            'home' => 'us.home',
            'about' => 'us.about',
            'contact' => 'us.contact',
            'country' => ['name' => 'US', 'flag' => 'us-icon.png'],
        ],
        'footer' => [
            'home' => 'us.home',
            'quick_links' => [
                ['Home', 'us.home'],
                ['About Us', 'us.about'],
                ['Data Security', 'datasecurity', true],
                ['Contact Us', 'us.contact'],
                ['Blogs', 'blog', true],
            ],
            'address' => '225 Cherry Street, 52K<br>New York, NY, 10002',
            'phones' => [['number' => '(+1) 347 801 8715']],
            'badges' => $isoBadges,
        ],
        'home' => [
            'meta_title' => 'Accounting Outsourcing Company for US Businesses & CPA Firms | PCS Global',
            'meta_description' => 'PCS Global is a trusted accounting outsourcing company for US businesses and CPA firms, with dedicated teams for accounting, bookkeeping, tax, payroll and audit support.',
            'experts' => ['%USA%', '% US'],
        ],
    ],

    'uk' => [
        'header' => 'country',
        'css' => $countryCss,
        'phone' => ['tel' => '+441134034334', 'label' => '(+44) 113 4034334'],
        'services' => [
            ['Accounting Outsourcing', 'accounting.outsourcing.services'],
            ['Small Business Accounting', 'small.business.accounting.services'],
            ['Tax Preparation Outsourcing', 'outsource.tax.preparation.services'],
        ],
        'nav' => [
            'home' => 'uk',
            'about' => 'uk.about',
            'contact' => 'uk.contact',
            'country' => ['name' => 'UK', 'flag' => 'uk-icon.png'],
        ],
        'footer' => [
            'home' => 'uk',
            'quick_links' => [
                ['Home', 'uk'],
                ['About Us', 'uk.about'],
                ['Data Security', 'datasecurity', true],
                ['Contact Us', 'uk.contact'],
                ['Blogs', 'blog', true],
            ],
            'address' => '16 Field Maple Gardens, High Wycombe,<br>Buckinghamshire, HP10 9FN, United Kingdom',
            'phones' => [['number' => '(+44) 113 4034334']],
            'badges' => $isoBadges,
        ],
        'home' => [
            'meta_title' => 'Accounting Outsourcing Company for UK Businesses & Accountancy Firms | PCS Global',
            'meta_description' => 'PCS Global is a trusted accounting outsourcing company for UK businesses and accountancy firms, covering accounting, bookkeeping, payroll, tax and VAT.',
            'experts' => ['%UK%'],
        ],
    ],
];

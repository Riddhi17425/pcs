{{-- UK header: common shared/site-header + UK ka data --}}
@php
    $nav = [
        'home' => url('uk'),
        'about' => url('uk/about'),
        'contact' => url('uk/contact-us'),
        'services' => [
            ['Accounting Outsourcing', url('uk/accounting-outsourcing-services')],
            ['Small Business Accounting', url('uk/small-business-accounting-services')],
            ['Tax Preparation Outsourcing', url('uk/outsource-tax-preparation-services')],
        ],
        'country' => ['name' => 'UK', 'flag' => 'uk-icon.png'],
        'phone' => ['tel' => '+441134034334', 'label' => '(+44) 113 4034334'],
    ];
@endphp
@include('shared.site-header')

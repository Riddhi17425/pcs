{{-- UK header: common components/layout/header + UK ka data --}}
@php
    $nav = [
        'home' => route('uk'),
        'about' => route('uk.about'),
        'contact' => route('uk.contact'),
        'services' => [
            ['Accounting Outsourcing', route('accounting.outsourcing.services')],
            ['Small Business Accounting', route('small.business.accounting.services')],
            ['Tax Preparation Outsourcing', route('outsource.tax.preparation.services')],
        ],
        'country' => ['name' => 'UK', 'flag' => 'uk-icon.png'],
        'phone' => ['tel' => '+441134034334', 'label' => '(+44) 113 4034334'],
    ];
@endphp
@include('components.layout.header')

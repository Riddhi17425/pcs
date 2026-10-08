{{-- Australia header: common components/layout/header + Australia ka data --}}
@php
    $nav = [
        'home' => url('australia'),
        'about' => url('australia/about'),
        'contact' => url('australia/contact-us'),
        'services' => [
            ['Accounting & Bookkeeping', url('australia/bookkeeping-accounting-services')],
            ['Taxation Services', url('australia/taxation-services')],
            ['Strata Property Management', url('australia/strata-management')],
        ],
        'country' => ['name' => 'Australia', 'flag' => 'australia-icon.png'],
        'phone' => ['tel' => '+61399980494', 'label' => '(+613) 9998 0494'],
    ];
@endphp
@include('components.layout.header')

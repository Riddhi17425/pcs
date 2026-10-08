{{-- Australia header: common components/layout/header + Australia ka data --}}
@php
    $nav = [
        'home' => url('aus'),
        'about' => url('aus/about'),
        'contact' => url('aus/contact-us'),
        'services' => [
            ['Accounting & Bookkeeping', url('aus/bookkeeping-accounting-services')],
            ['Taxation Services', url('aus/taxation-services')],
            ['Strata Property Management', url('aus/strata-management')],
        ],
        'country' => ['name' => 'Australia', 'flag' => 'australia-icon.png'],
        'phone' => ['tel' => '+61399980494', 'label' => '(+613) 9998 0494'],
    ];
@endphp
@include('components.layout.header')

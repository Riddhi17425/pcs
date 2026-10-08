{{-- US header: common components/layout/header + US ka data --}}
@php
    $nav = [
        'home' => url('us'),
        'about' => url('us/about'),
        'contact' => url('us/contact-us'),
        'services' => [
            ['Accounting & Bookkeeping', url('us/bookkeeping-and-accounting-services')],
            ['Taxation Services', url('us/taxation-services')],
        ],
        'country' => ['name' => 'US', 'flag' => 'us-icon.png'],
        'phone' => ['tel' => '+13478018715', 'label' => '(+1) 347 801 8715'],
    ];
@endphp
@include('components.layout.header')

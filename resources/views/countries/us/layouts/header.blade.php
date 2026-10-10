{{-- US header: common components/layout/header + US ka data --}}
@php
    $nav = [
        'home' => route('us.home'),
        'about' => route('us.about'),
        'contact' => route('us.contact'),
        'services' => [
            ['Accounting & Bookkeeping', route('pcs.global.usa')],
            ['Taxation Services', route('taxation-services-usa')],
        ],
        'country' => ['name' => 'US', 'flag' => 'us-icon.png'],
        'phone' => ['tel' => '+13478018715', 'label' => '(+1) 347 801 8715'],
    ];
@endphp
@include('components.layout.header')

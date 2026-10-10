{{-- Australia header: common components/layout/header + Australia ka data --}}
@php
    $nav = [
        'home' => route('australia.home'),
        'about' => route('australia.about'),
        'contact' => route('australia.contact'),
        'services' => [
            ['Accounting & Bookkeeping', route('pcs.global.aus')],
            ['Taxation Services', route('taxation-services-australian')],
            ['Strata Property Management', route('australia.strata')],
        ],
        'country' => ['name' => 'AU', 'flag' => 'australia-icon.png'],
        'phone' => ['tel' => '+61399980494', 'label' => '(+613) 9998 0494'],
    ];
@endphp
@include('components.layout.header')

{{-- UK footer: common <x-layout.footer> + UK ka data (Figma) --}}
@php
    $ukUrl = fn ($path) => url('uk/' . $path);
    $badgeDir = asset('public/front/images/figma-footer-badges');
@endphp
<x-layout.footer
    :home-url="$ukUrl('')"
    :quick-links="[
        ['Home', route('uk')],
        ['About Us', route('uk.about')],
        ['Data Security', route('datasecurity'), true],   // sab countries ka ek hi page, naye tab me
        ['Contact Us', route('uk.contact')],
        ['Blogs', route('blog'), true],                   // sab countries ka ek hi page, naye tab me
    ]"
    :services="[
        ['Accounting Outsourcing', route('accounting.outsourcing.services')],
        ['Small Business Accounting', route('small.business.accounting.services')],
        ['Tax Preparation Outsourcing', route('outsource.tax.preparation.services')],
    ]"
    address="16 Field Maple Gardens, High Wycombe,<br>Buckinghamshire, HP10 9FN, United Kingdom"
    :phones="[['number' => '(+44) 113 4034334']]"
    :badges="[
        [$badgeDir . '/iso-9001.png', 'ISO 9001', 'circle'],
        [$badgeDir . '/iso-27001.png', 'ISO 27001', 'circle'],
        [$badgeDir . '/gdpr.png', 'GDPR', 'circle'],
    ]" />

@include('components.layout.footer-scripts')

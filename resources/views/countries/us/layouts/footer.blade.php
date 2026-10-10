{{-- US footer: common <x-layout.footer> + US ka data (Figma) --}}
@php
    $usUrl = fn ($path) => url('us/' . $path);
    $badgeDir = asset('public/front/images/figma-footer-badges');
@endphp
<x-layout.footer
    :home-url="$usUrl('')"
    :quick-links="[
        ['Home',  route('us.home')],
        ['About Us', route('us.about')],
        ['Data Security', route('datasecurity'), true],   // sab countries ka ek hi page, naye tab me
        ['Contact Us', route('us.contact')],
        ['Blogs', route('blog'), true],                   // sab countries ka ek hi page, naye tab me
    ]"
    :services="[
        ['Accounting & Bookkeeping', route('pcs.global.usa')],
        ['Taxation Services', route('taxation-services-usa')],
    ]"
    address="225 Cherry Street, 52K<br>New York, NY, 10002"
    :phones="[['number' => '(+1) 347 801 8715']]"
    :badges="[
        [$badgeDir . '/iso-9001.png', 'ISO 9001', 'circle'],
        [$badgeDir . '/iso-27001.png', 'ISO 27001', 'circle'],
        [$badgeDir . '/gdpr.png', 'GDPR', 'circle'],
    ]" />

@include('components.layout.footer-scripts')

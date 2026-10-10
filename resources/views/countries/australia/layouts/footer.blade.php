{{-- Australia footer: common <x-layout.footer> + Australia ka data (Figma) --}}
@php
    $auUrl = fn ($path) => url('aus/' . $path);
@endphp
<x-layout.footer
    :home-url="$auUrl('')"
    :quick-links="[
        ['Home', route('australia.home')],
        ['About Us', route('australia.about')],
        ['Data Security', route('datasecurity'), true],   
        ['Contact Us', route('australia.contact')],
        ['Blogs', route('blog'), true],                   
    ]"
    :services="[
        ['Accounting & Bookkeeping', route('pcs.global.aus')],
        ['Taxation Services', route('taxation-services-australian')],
        ['Strata Property Management', route('australia.strata')],
    ]"
    address="22A Mort Street Blacktown<br>NSW 2148 Australia."
    :phones="[['number' => '(+613) 9998 0494']]" />

@include('components.layout.footer-scripts')

{{-- Australia footer: common <x-layout.footer> + Australia ka data (Figma) --}}
@php
    $auUrl = fn ($path) => url('australia/' . $path);
@endphp
<x-layout.footer
    :home-url="$auUrl('')"
    :quick-links="[
        ['Home', $auUrl('')],
        ['About Us', $auUrl('about')],
        ['Data Security', route('datasecurity'), true],   // sab countries ka ek hi page, naye tab me
        ['Contact Us', $auUrl('contact-us')],
        ['Blogs', route('blog'), true],                   // sab countries ka ek hi page, naye tab me
    ]"
    :services="[
        ['Accounting Outsourcing', $auUrl('bookkeeping-accounting-services')],
        ['Bookkeeping Outsourcing', $auUrl('bookkeeping-accounting-services')],
        ['Tax Preparation Outsourcing', $auUrl('taxation-services')],
        ['BAS/IAS Return Services', $auUrl('taxation-services')],
        ['Payroll Outsourcing', url('australia') . '#consultation'],      // page abhi nahi hai, form par
        ['Strata Management Services', $auUrl('strata-management')],
    ]"
    address="22A Mort Street Blacktown<br>NSW 2148 Australia."
    :phones="[['number' => '(+613) 9998 0494']]" />

@include('components.layout.footer-scripts')

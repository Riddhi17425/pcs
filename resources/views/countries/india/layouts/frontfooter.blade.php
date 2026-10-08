{{-- India footer: common <x-site-footer> + India ka data --}}
@php
    $flag = fn ($file) => asset('public/front/images/contry-icon/' . $file);
@endphp
<x-site-footer
    :quick-links="[
        ['Home', url('/')],
        ['About Us', route('about')],
        ['Data Security', route('datasecurity')],
        ['Contact Us', route('contact')],
        ['Blogs', route('blog')],
    ]"
    :services="[
        ['Accounting & Bookkeeping', route('pcs.global.bookkeeping')],
        ['Strata Property Management', route('strata.management')],
        ['Payroll Outsourcing Services', route('payroll.services')],
        ['Taxation Services', route('taxation.services')],
        ['Recruitment Outsourcing Services', route('recruitment.services')],
        ['IT Automation Services', route('it.automation')],
    ]"
    address="22A Mort Street Blacktown<br>NSW 2148 Australia."
    :phones="[
        ['number' => '(+613) 9998 0494', 'label' => 'AUS', 'icon' => $flag('australia-icon.png'), 'alt' => 'Australia'],
        ['number' => '(+1) 347 801 8715', 'label' => 'USA', 'icon' => $flag('us-icon.png'), 'alt' => 'USA'],
        ['number' => '(+91) 796 826 0121', 'label' => 'IND', 'icon' => $flag('india-icon.svg'), 'alt' => 'India'],
        ['number' => '(+44) 113 4034334', 'label' => 'UK', 'icon' => $flag('uk-icon.png'), 'alt' => 'UK'],
    ]" />

@include('components.footer-scripts')

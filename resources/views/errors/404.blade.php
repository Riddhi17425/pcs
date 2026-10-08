{{-- 404 page (sab countries). URL /australia/... ho to Australia ka header/footer, warna India ka. --}}
@php
    $isAu = request()->is('australia', 'australia/*');
    $home = $isAu ? url('australia') : url('/');
    $contact = $isAu ? url('australia/contact-us') : route('contact');
    $links = $isAu
        ? [
            ['About Us', url('australia/about')],
            ['Accounting & Bookkeeping', url('australia/bookkeeping-accounting-services')],
            ['Taxation Services', url('australia/taxation-services')],
            ['Strata Management', url('australia/strata-management')],
        ]
        : [
            ['About Us', route('about')],
            ['Accounting & Bookkeeping', route('pcs.global.bookkeeping')],
            ['Taxation Services', route('taxation.services')],
            ['Strata Management', route('strata.management')],
            ['Blogs', route('blog')],
        ];
    $meta = ['meta_title' => 'Page Not Found | PCS Global', 'meta_description' => 'The page you are looking for could not be found.'];
@endphp

@push('styles')
    <link rel="stylesheet" href="{{ asset('public/front/css/common/buttons.css') }}?v={{ filemtime(public_path('front/css/common/buttons.css')) }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/common/error-page.css') }}?v={{ filemtime(public_path('front/css/common/error-page.css')) }}">
    <meta name="robots" content="noindex, follow">
@endpush

@include($isAu ? 'countries.australia.layouts.header' : 'countries.india.layouts.header', $meta)

<section class="error_page">
    <div class="container">
        <div class="error_page_in">
            <span class="error_code">404</span>
            <span class="error_tag">Page not found</span>
            <h1>Oops! This page took a different route</h1>
            <p>The page you are looking for doesn't exist, has been moved, or is temporarily unavailable. Let's get you back on track.</p>

            <div class="error_btns">
                <a class="com_btn2" href="{{ $home }}">Back to Home</a>
                <a class="com_btn_outline com_btn_outline_light" href="{{ $contact }}">Contact Us</a>
            </div>

            <div class="error_links">
                <span>Or try one of these pages</span>
                <ul>
                    @foreach ($links as [$label, $url])
                        <li><a href="{{ $url }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@include($isAu ? 'countries.australia.layouts.footer' : 'countries.india.layouts.footer')

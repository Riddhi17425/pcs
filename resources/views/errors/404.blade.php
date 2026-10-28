{{-- 404 page (sab countries). URL /au/... ho to Australia ka header/footer, warna India ka. Layout: layouts/app --}}
@php
    $isAu = request()->is('au', 'au/*');
    $home = $isAu ? url('au') : url('/');
    $contact = $isAu ? url('au/contact-us') : route('contact');
    $links = $isAu
        ? [
            ['About Us', url('au/about')],
            ['Accounting & Bookkeeping', url('au/bookkeeping-accounting-services')],
            ['Taxation Services', url('au/taxation-services')],
            ['Strata Management', url('au/strata-management')],
        ]
        : [
            ['About Us', route('about')],
            ['Accounting Outsourcing Services', route('pcs.global.bookkeeping')],
            ['Tax Outsourcing Services', route('taxation.services')],
            ['Strata Management', route('strata.management')],
            ['Blogs', route('blog')],
        ];
    $meta_title = 'Page Not Found | PCS Global';
    $meta_description = 'The page you are looking for could not be found.';
    // 404 par route middleware nahi chalta, isliye site yahin chuni jaati hai
    $site = \App\Support\Site::get($isAu ? 'australia' : 'india');
@endphp

@push('styles')
    <link rel="stylesheet" href="{{ asset('public/front/css/common/buttons.css') }}?v={{ filemtime(public_path('front/css/common/buttons.css')) }}">
    <link rel="stylesheet" href="{{ asset('public/front/css/common/error-page.css') }}?v={{ filemtime(public_path('front/css/common/error-page.css')) }}">
    <meta name="robots" content="noindex, follow">
@endpush

@extends('layouts.app')

@section('content')

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

            <!-- <div class="error_links">
                <span>Or try one of these pages</span>
                <ul>
                    @foreach ($links as [$label, $url])
                        <li><a href="{{ $url }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            </div> -->
        </div>
    </div>
</section>

@endsection

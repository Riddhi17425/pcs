{{-- US service page (accounting / bookkeeping / tax / payroll). One template for all four (same structure as pages/uk/service-page.blade.php).
     Controller: ServiceController (usServicePage helper) passes $page from resources/content/us/services/<key>.php.
     Sections are @case blocks of one loop, in the order of $page['order'] (default order below); a page only lists the sections it has.
     CSS: style.css + common/hero-dark.css + common/home-sections.css (site CSS) + pages/accounting-outsourcing.css + common/service-split.css + pages/uk-service.css --}}
@extends('layouts.app', [
    'og_image' => asset('public/front/images/' . $page['og'])
])

@push('styles')
    @foreach (['pages/accounting-outsourcing.css', 'common/service-split.css', 'pages/uk-service.css'] as $css)
        <link rel="stylesheet" href="{{ asset('public/front/css/' . $css) }}?v={{ filemtime(public_path('front/css/' . $css)) }}">
    @endforeach
@endpush

@section('content')
@php
    $img = fn ($file) => asset('public/front/images/' . $file);
    $bubbleColors = '["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0"]';

    // Escapes the text, then turns [[link:route.name|text]] markers into links
    $t = fn ($s) => preg_replace_callback('/\[\[link:([\w.-]+)\|([^\]]+)\]\]/', fn ($m) => '<a href="' . route($m[1]) . '">' . $m[2] . '</a>', e($s));
    $plain = fn ($s) => preg_replace('/\[\[link:[\w.-]+\|([^\]]+)\]\]/', '$1', $s);

    $icon = [
        'search'   => '<circle cx="11" cy="11" r="7"/><path d="m20.5 20.5-4.5-4.5"/>',
        'scope'    => '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1"/><path d="M9 10h6M9 14h6M9 18h3"/>',
        'lock'     => '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>',
        'team'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'ledger'   => '<rect x="5" y="3" width="14" height="18" rx="2"/><path d="M8 7h8"/><path d="M8 11h.01M12 11h.01M16 11h.01M8 15h.01M12 15h.01M16 15h.01M8 18h.01M12 18h.01M16 18h.01"/>',
        'growth'   => '<path d="M3 20h18"/><path d="m5 16 4-4 3 3 7-7"/><path d="M15 8h4v4"/>',
        'accuracy' => '<circle cx="12" cy="12" r="9"/><path d="m8.5 12.5 2.7 2.7L16.5 9"/>',
        'file'     => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8l-5-5Z"/><path d="M14 3v5h5"/><path d="M9 13h6M9 17h4"/>',
        'tag'      => '<path d="M3 12.2V4a1 1 0 0 1 1-1h8.2a1 1 0 0 1 .7.3l7.8 7.8a1 1 0 0 1 0 1.4l-7.4 7.4a1 1 0 0 1-1.4 0L3.3 12.9a1 1 0 0 1-.3-.7Z"/><circle cx="8" cy="8" r="1.3"/>',
        'folder'   => '<path d="M3 7a2 2 0 0 1 2-2h4l2 2.5h8a2 2 0 0 1 2 2V18a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Z"/><path d="M8 14h8"/>',
    ];
    $processIcons = ['search', 'team', 'scope', 'ledger', 'growth'];
    $firmIcons = ['team', 'growth', 'file', 'accuracy', 'folder', 'tag', 'ledger'];
    $heroIcons = [
        '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        '<circle cx="12" cy="9" r="5.5"/><path d="m8.5 13.3-1.5 7.2 5-2.7 5 2.7-1.5-7.2"/>',
        '<rect x="3" y="4" width="18" height="13" rx="2"/><path d="M8 21h8M12 17v4"/>',
        '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>',
    ];

    // Buttons that ask for a consultation open the modal; a page can set 'ctaTarget' => 'form' to jump to the form on the page instead
    $ctaAttr = ($page['ctaTarget'] ?? 'modal') === 'form' ? 'href="#consultation"' : 'href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"';

    // Section order: a page can list its sections in its own order in $page['order']
    $order = $page['order'] ?? ['hero', 'software', 'what', 'why', 'services', 'firms', 'solutions', 'extra', 'industries', 'process', 'cta1', 'security', 'whyChoose', 'cta2', 'faq', 'contact'];

    // Industries marquee: two rows
    $indSplit = (int) ceil(count($page['industries'] ?? []) / 2);
    $industryRows = [array_slice($page['industries'] ?? [], 0, $indSplit), array_slice($page['industries'] ?? [], $indSplit)];

    // Texts of the form fields (a page can give its own in $page['contact']['labels']: name, email, company, phone, message)
    $cl = $page['contact']['labels'] ?? ['Full Name*:', 'Email Address*:', 'Company Name*:', 'Phone Number*:', 'Message:'];

    $contactFormServices = ['Accounting Outsourcing', 'Bookkeeping Outsourcing', 'Taxation Outsourcing', 'Payroll Outsourcing'];
@endphp

@foreach ($order as $sectionName)
@switch($sectionName)
@case('hero')
<section class="acc_hero_light">
    <div class="container">
        <div class="acc_hero_inner">
            <div class="acc_hero_text">
                <h1>{{ $page['title'] }}@if ($page['titleSpan']) <span>{{ $page['titleSpan'] }}</span>@endif</h1>
                <p>{{ $page['heroText'] }}</p>
                <div class="acc_hero_btns">
                    <a class="com_btn1" {!! $ctaAttr !!}>{{ $page['heroCtas'][0] }}</a>
                    <a class="com_btn_outline" href="tel:{{ $site['phone']['tel'] }}">{{ $page['heroCtas'][1] }}
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none" aria-hidden="true"><path d="M2.3134 0.76742L6.03706 0.902169C6.82137 0.930543 7.5174 1.42583 7.81799 2.16945L8.91901 4.8932C9.17527 5.52705 9.10631 6.25025 8.73521 6.82118L7.32457 8.99161C8.15976 10.1909 10.4315 13.0009 12.8369 14.6458L14.6305 13.5419C15.0864 13.2613 15.6321 13.178 16.1479 13.3102L19.7136 14.2246C20.6619 14.4678 21.3009 15.3773 21.226 16.3769L20.9971 19.4295C20.9167 20.5008 20.04 21.3413 18.9993 21.2204C5.26189 19.623 -2.79399 0.767389 2.3134 0.76742Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
            <div class="acc_hero_benefits">
                @foreach ($page['heroBullets'] as $i => $benefit)
                    <div class="acc_hero_benefit">
                        <span class="acc_hero_benefit_icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $heroIcons[$i % count($heroIcons)] !!}</svg>
                        </span>
                        <span>{{ $benefit }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@break

@case('software')
{{-- Software scroller --}}
<section class="clients acc_software mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $page['softwareTitle'] }}</h2>
        </div>
    </div>
    <div class="client_slider_full">
        <div class="client_slider">
            @foreach (range(1, max(2, (int) ceil(8 / count($page['software'])))) as $pass)
                @foreach ($page['software'] as [$logo, $name])
                    <div>
                        <img class="img-fluid" src="{{ $img($logo) }}" loading="lazy" alt="{{ $name }}">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>
@break

@case('what')
{{-- What is (image left) --}}
<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img($page['what']['img']) }}" loading="lazy" alt="{{ $page['what']['title'] }}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter_lt acc_split_text">
                    @if ($page['what']['title'])
                        <h2 class="mb-3 mb-xxl-4">{{ $page['what']['title'] }}</h2>
                    @endif
                    @foreach ($page['what']['paras'] as $para)
                        <p>{!! $t($para) !!}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@break

@case('why')
{{-- Why choose outsourcing (text left, image right) --}}
<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">{{ $page['why']['title'] }}</h2>
                    @foreach ($page['why']['paras'] as $para)
                        <p>{!! $t($para) !!}</p>
                    @endforeach
                    <a class="com_btn1" {!! $ctaAttr !!}>{{ $page['why']['cta'] }}</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img($page['why']['img']) }}" loading="lazy" alt="{{ $page['why']['title'] }}">
                </div>
            </div>
        </div>
    </div>
</section>
@break

@case('services')
{{-- Services (cards with image) --}}
<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $page['services']['title'] }}</h2>
            @if ($page['services']['intro'])
                <p>{!! $t($page['services']['intro']) !!}</p>
            @endif
        </div>

        <div class="precision_grid acc_services_grid {{ count($page['services']['items']) % 3 ? 'precision_grid_center' : '' }}">
            @foreach ($page['services']['items'] as $card)
                <div class="precision_card">
                    <div class="precision_card_img">
                        <img src="{{ $img($card['img']) }}" loading="lazy" alt="{{ $card['title'] }}">
                    </div>
                    <div class="precision_card_body">
                        <h3>{{ $card['title'] }}</h3>
                        <p>{!! $t($card['text']) !!}</p>
                        @if (!empty($card['bullets']))
                            <ul class="uk_check_list">
                                @foreach ($card['bullets'] as $bullet)
                                    <li>{{ $bullet }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@break

@case('firms')
@case('challenges')
{{-- For accounting firms / challenges (editorial split: sticky intro left, icon rows right). $block is the content block of the section --}}
@php $block = $page[$sectionName]; @endphp
<section class="svc_split mt-100">
    <div class="container">
        <div class="svc_split_inner">
            <div @class(['svc_split_intro', 'svc_reveal', 'uk_split_multi' => count($block['introParas'] ?? []) > 1])>
                <h2>{{ $block['title'] }}</h2>
                @foreach ($block['introParas'] ?? [$block['intro']] as $introPara)
                    <p>{!! $t($introPara) !!}</p>
                @endforeach
                @if (!empty($block['cta']))
                    <a class="com_btn1" {!! $ctaAttr !!}>{{ $block['cta'] }}</a>
                @endif
                @if (!empty($block['img']))
                    <div class="svc_split_img">
                        <img src="{{ $img($block['img']) }}" loading="lazy" alt="{{ $block['title'] }}">
                    </div>
                @endif
            </div>

            <ol class="svc_split_list">
                @foreach ($block['items'] as $i => $card)
                    <li class="svc_split_row svc_reveal">
                        <span class="svc_split_icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icon[$firmIcons[$i % count($firmIcons)]] !!}</svg>
                        </span>
                        <div>
                            <h3>{{ $card['title'] }}</h3>
                            <p>{!! $t($card['text']) !!}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>

@once
@push('scripts')
<script>
(function () {
    const items = document.querySelectorAll('.svc_reveal');
    if (!items.length || !('IntersectionObserver' in window) ||
        window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    document.documentElement.classList.add('svc_js');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is_visible');
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    items.forEach((el) => observer.observe(el));
})();
</script>
@endpush
@endonce
@break

@case('solutions')
{{-- Solutions for businesses (trust slider: left heading + arrows, right image cards). Only when the content file has it --}}
@if (!empty($page['solutions']))
<section class="trust_slider_sec">
    <div class="trust_slider_wrap">
        <div class="trust_slider_lt">
            <div class="trust_slider_head">
                <h2>{{ $page['solutions']['title'] }}</h2>
                @foreach ($page['solutions']['introParas'] ?? [$page['solutions']['intro']] as $introPara)
                    <p>{!! $t($introPara) !!}</p>
                @endforeach
                @if (!empty($page['solutions']['cta']))
                <div>
                    <a class="com_btn2" {!! $ctaAttr !!}>{{ $page['solutions']['cta'] }}</a>
                </div>
                @endif
            </div>
            <div class="trust_slider_arrows">
                <button type="button" class="trust_slider_arrow trust_slider_prev" aria-label="Previous">
                    <img src="{{ $img('figma-trust-slider/arrow-left.svg') }}" alt="">
                </button>
                <button type="button" class="trust_slider_arrow trust_slider_next" aria-label="Next">
                    <img src="{{ $img('figma-trust-slider/arrow-left.svg') }}" alt="">
                </button>
            </div>
        </div>

        <div class="trust_slider_rt">
            <div class="trust_slider_track" id="trustSliderTrack">
                @foreach ($page['solutions']['items'] as $item)
                    <div class="trust_slide">
                        <div class="trust_slide_img">
                            <img src="{{ $img($item['img']) }}" loading="lazy" alt="{{ $item['title'] }}">
                        </div>
                        <div class="trust_slide_body">
                            <h3>{{ $item['title'] }}</h3>
                            <p>{!! $t($item['text']) !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="trust_slider_progress" id="trustSliderProgress">
                @foreach ($page['solutions']['items'] as $item)
                    <span class="trust_slider_seg"></span>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('public/front/js/trust-slider.js') }}?v={{ filemtime(public_path('front/js/trust-slider.js')) }}" defer></script>
@endpush
@endif
@break

@case('extra')
{{-- Extra sections that only some pages have (for example corporate tax, regulations and compliance) --}}
@foreach ($page['extra'] ?? [] as $block)
    @if ($block['type'] === 'panel')
        {{-- Dark panel + numbered points in one rounded card (personal / corporate tax). The dark panel content stays in view (sticky)
             while the points scroll with the page; $block['side'] is the side of the dark panel, so two sections in a row make a zig-zag. --}}
        <section class="uk_panel mt-100">
            <div class="container">
                <div class="uk_panel_inner {{ $block['side'] === 'right' ? 'uk_panel_rev' : '' }}">
                    <div class="uk_panel_dark">
                      <div class="uk_panel_body">
                        <h2>{{ $block['title'] }}</h2>
                        <p>{!! $t($block['intro']) !!}</p>
                        <a class="com_btn2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $block['cta'] }}</a>

                        {{-- Animated illustration (CSS animations in uk-service.css, classes uk_a_*; --d is the start delay in the 8s loop) --}}
                        <svg class="uk_panel_art" viewBox="0 0 320 210" fill="none" aria-hidden="true">
                            <rect class="uk_a_back" x="78" y="16" width="190" height="162" rx="14" transform="rotate(7 173 97)"/>
                            <g class="uk_a_card">
                                <rect class="uk_a_front" x="36" y="22" width="196" height="166" rx="14"/>
                                <rect class="uk_a_title" x="58" y="42" width="78" height="8" rx="4"/>
                                <rect class="uk_a_sub" x="58" y="58" width="118" height="5" rx="2.500"/>

                                @if ($block['art'] === 'chart')
                                    {{-- Bars grow one after another, then the trend line is drawn over them --}}
                                    <rect class="uk_a_bar" style="--d:0.6s" x="62" y="124" width="22" height="34" rx="4"/>
                                    <rect class="uk_a_bar" style="--d:1.1s" x="94" y="108" width="22" height="50" rx="4"/>
                                    <rect class="uk_a_bar" style="--d:1.6s" x="126" y="116" width="22" height="42" rx="4"/>
                                    <rect class="uk_a_bar uk_a_bar_hot" style="--d:2.1s" x="158" y="88" width="22" height="70" rx="4"/>
                                    <path class="uk_a_line" style="--d:2.7s" pathLength="1" d="M66 112l40-20 32 8 36-30"/>
                                    <rect class="uk_a_row" style="--d:2.7s" x="58" y="166" width="70" height="5" rx="2.500"/>
                                @else
                                    {{-- Checklist: each box gets ticked in turn and its line brightens --}}
                                    @foreach ([[84, 100, '0.8s'], [112, 120, '1.7s'], [140, 84, '2.6s']] as [$y, $w, $d])
                                        <rect class="uk_a_box" x="58" y="{{ $y }}" width="18" height="18" rx="5"/>
                                        <path class="uk_a_tick" style="--d:{{ $d }}" pathLength="1" d="M62 {{ $y + 9 }}l4.500 4.500 8-9"/>
                                        <rect class="uk_a_row" style="--d:{{ $d }}" x="88" y="{{ $y + 6 }}" width="{{ $w }}" height="6" rx="3"/>
                                    @endforeach
                                @endif
                            </g>

                            <g class="uk_a_badge" style="--d:3.4s">
                                <circle cx="232" cy="30" r="17"/>
                                <path d="M224 30.500l5.500 5.500 10-11.500"/>
                            </g>

                            <g class="uk_a_coin">
                                <circle class="uk_a_ring" cx="258" cy="150" r="27"/>
                                <circle class="uk_a_coin_face" cx="258" cy="150" r="27"/>
                                <circle class="uk_a_coin_edge" cx="258" cy="150" r="21"/>
                                <text x="258" y="160" text-anchor="middle">£</text>
                            </g>
                        </svg>
                      </div>
                    </div>

                    <ol class="svc_split_list uk_panel_list">
                        @foreach ($block['items'] as $card)
                            <li class="svc_split_row svc_reveal">
                                <span class="svc_split_icon uk_panel_num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                <div>
                                    <h3>{{ $card['title'] }}</h3>
                                    <p>{!! $t($card['text']) !!}</p>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </section>
    @else
        {{-- Tabbed section ("Regulations & Compliance Support"): tabs on the left, the selected point on the right. The panels sit on top of
             each other in one grid cell, so the section keeps the height of the longest panel and does not jump when the tab changes. --}}
        @php
            // Different line widths per tab, so the little document illustration is not identical on every tab
            $lineSets = [[104, 84, 96, 60], [96, 104, 70, 88], [84, 96, 104, 66], [104, 70, 88, 96], [90, 104, 76, 100]];
            $count = count($block['items']);
            $uid = 'ukt' . substr(md5($block['title']), 0, 6);
        @endphp
        <section class="uk_tabs_sec mt-100">
            <div class="container">
                <div class="com_sec_head_top">
                    <h2 class="mb-2 mb-xxl-4">{{ $block['title'] }}</h2>
                    @if ($block['intro'])
                        <p>{!! $t($block['intro']) !!}</p>
                    @endif
                </div>

                <div class="uk_tabs" data-uk-tabs>
                    <div class="uk_tabs_nav" role="tablist" aria-orientation="vertical" aria-label="{{ $block['title'] }}">
                        @foreach ($block['items'] as $i => $card)
                            <button type="button" class="uk_tab {{ $i === 0 ? 'is_active' : '' }}" role="tab" id="{{ $uid }}-tab-{{ $i }}"
                                aria-selected="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="{{ $uid }}-panel-{{ $i }}" tabindex="{{ $i === 0 ? '0' : '-1' }}">
                                <span class="uk_tab_num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="uk_tab_title">{{ $card['title'] }}</span>
                            </button>
                        @endforeach
                    </div>

                    <div class="uk_tabs_panels">
                        @foreach ($block['items'] as $i => $card)
                            @php $w = $lineSets[$i % count($lineSets)]; @endphp
                            <div class="uk_tabs_panel {{ $i === 0 ? 'is_active' : '' }}" role="tabpanel" id="{{ $uid }}-panel-{{ $i }}"
                                aria-labelledby="{{ $uid }}-tab-{{ $i }}" @if ($i !== 0) aria-hidden="true" @endif>
                                <div class="uk_tabs_text">
                                    <span class="uk_tabs_count">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }} / {{ str_pad($count, 2, '0', STR_PAD_LEFT) }}</span>
                                    <h3>{{ $card['title'] }}</h3>
                                    <p>{!! $t($card['text']) !!}</p>
                                </div>

                                {{-- Small document illustration: it draws itself again every time its tab is shown (CSS in uk-service.css, uk_t_*) --}}
                                <svg class="uk_tabs_art" viewBox="0 0 140 170" fill="none" aria-hidden="true">
                                    <rect class="uk_t_card" x="1" y="1" width="138" height="168" rx="14"/>
                                    <rect class="uk_t_bar" x="18" y="20" width="44" height="8" rx="4"/>
                                    @foreach ($w as $k => $lineW)
                                        <rect class="uk_t_line" style="--d:{{ 0.25 + $k * 0.12 }}s" x="18" y="{{ 44 + $k * 16 }}" width="{{ $lineW }}" height="6" rx="3"/>
                                    @endforeach
                                    <circle class="uk_t_ring" pathLength="1" cx="104" cy="132" r="22"/>
                                    <path class="uk_t_tick" pathLength="1" d="M93 132.500l8 8 14-16"/>
                                </svg>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        @once
        @push('scripts')
        <script>
        (function () {
            // Tabs: click or keyboard (arrows, Home, End) to switch; only the active tab is in the tab order
            document.querySelectorAll('[data-uk-tabs]').forEach(function (root) {
                var tabs = Array.prototype.slice.call(root.querySelectorAll('[role="tab"]'));
                var panels = Array.prototype.slice.call(root.querySelectorAll('[role="tabpanel"]'));

                function activate(index, focus) {
                    tabs.forEach(function (tab, i) {
                        var on = i === index;
                        tab.classList.toggle('is_active', on);
                        tab.setAttribute('aria-selected', on ? 'true' : 'false');
                        tab.setAttribute('tabindex', on ? '0' : '-1');
                        panels[i].classList.toggle('is_active', on);
                        if (on) panels[i].removeAttribute('aria-hidden'); else panels[i].setAttribute('aria-hidden', 'true');
                    });
                    if (focus) tabs[index].focus();
                }

                tabs.forEach(function (tab, i) {
                    tab.addEventListener('click', function () { activate(i, false); });
                    tab.addEventListener('keydown', function (e) {
                        var next = null;
                        if (e.key === 'ArrowDown' || e.key === 'ArrowRight') next = (i + 1) % tabs.length;
                        else if (e.key === 'ArrowUp' || e.key === 'ArrowLeft') next = (i - 1 + tabs.length) % tabs.length;
                        else if (e.key === 'Home') next = 0;
                        else if (e.key === 'End') next = tabs.length - 1;
                        if (next === null) return;
                        e.preventDefault();
                        activate(next, true);
                    });
                });
            });
        })();
        </script>
        @endpush
        @endonce
    @endif
@endforeach
@break

@case('industries')
{{-- Industries marquee --}}
<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $page['industriesTitle'] }}</h2>
        </div>
    </div>

    <div class="industries_bot">
        <div class="ind_marquee">
            @foreach ($industryRows as $row)
                <div class="ind_row {{ $loop->odd ? 'ind_row_up' : 'ind_row_down' }}">
                    <div class="ind_track" style="animation-duration: {{ count($row) * 7.5 }}s">
                        {{-- Rendered four times so the track loops seamlessly even with few cards (-50% translate) --}}
                        @foreach ([1, 2, 3, 4] as $copy)
                            @foreach ($row as [$iconImg, $label])
                                <div class="industries_card" @if ($copy > 1) aria-hidden="true" @endif>
                                    <div class="industries_icon"><img src="{{ $img($iconImg) }}" loading="lazy" alt="{{ $copy > 1 ? '' : $label }}"></div>
                                    <p>{{ $label }}</p>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@break

@case('process')
{{-- Process steps --}}
<section class="process_sec mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $page['process']['title'] }}</h2>
            @if ($page['process']['intro'])
                <p>{!! $t($page['process']['intro']) !!}</p>
            @endif
        </div>

        <div class="process_steps" data-slider data-slider-controls="slider4" data-slider-show="3" data-slider-controls-visible="{{ count($page['process']['steps']) > 3 ? 'true' : 'false' }}">
            @foreach ($page['process']['steps'] as $step)
                <div class="process_card">
                    <div class="process_head">
                        <span class="process_icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icon[$processIcons[$loop->index % count($processIcons)]] !!}</svg>
                        </span>
                        @if (!empty($step['num']))
                            <span class="process_step_label">{{ $step['num'] }}</span>
                        @endif
                    </div>
                    <div class="process_body">
                        <h3>{{ $step['title'] }}</h3>
                        <p>{!! $t($step['text']) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="our_experts_bot slider4-controls">
            <div class="experts_info">
                <div class="circular-progress slider4-progress">
                    <div class="inner-circle"></div>
                </div>
                <p class="experts_counter slider4-counter"></p>
            </div>
            <hr>
            <div class="slick_arrow">
                <span class="arrow-prev slider4-prev" aria-label="Previous">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M1 6.32861L6 11.3286M1 6.32861L6 1.3286M1 6.32861H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="arrow-next slider4-next" aria-label="Next">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M19 6.32861L14 11.3286M19 6.32861L14 1.3286M19 6.32861H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>
@break

@case('cta1')
{{-- CTA banner 1 --}}
<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>{{ $page['cta1']['title'] }}</h2>

                        <p>{{ $page['cta1']['text'] }}</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <span class="color-button__label relative z-10 me-2">{{ $page['cta1']['cta'] }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@break

@case('security')
{{-- Data security (overlay cards: image with heading, paragraph opens on hover) --}}
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $page['security']['title'] }}</h2>
            @if ($page['security']['intro'])
                <p>{!! $t($page['security']['intro']) !!}</p>
            @endif
        </div>

        <div class="our_experts_cen">
            <div class="ov_slider" data-slider data-slider-controls="slider5" data-slider-show="3">
                @foreach ($page['security']['items'] as $card)
                    <div>
                        <div class="ov_card">
                            <img src="{{ $img($card['img']) }}" loading="lazy" alt="{{ $card['title'] }}">
                            <div class="ov_card_body">
                                <div class="ov_card_head">
                                    <h3>{{ $card['title'] }}</h3>
                                    <img src="{{ $img('common/security-icon.svg') }}" width="33" height="30" alt="">
                                </div>
                                <p>{!! $t($card['text']) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="our_experts_bot slider5-controls">
            <div class="experts_info">
                <div class="circular-progress slider5-progress">
                    <div class="inner-circle"></div>
                </div>
                <p class="experts_counter slider5-counter"></p>
            </div>
            <hr>
            <div class="slick_arrow">
                <span class="arrow-prev slider5-prev" aria-label="Previous">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M1 6.32861L6 11.3286M1 6.32861L6 1.32861M1 6.32861H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="arrow-next slider5-next" aria-label="Next">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M19 6.32861L14 11.3286M19 6.32861L14 1.32861M19 6.32861H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>
@break

@case('whyChoose')
{{-- Why choose PCS Global (split accordion: image left, items right) --}}
<section class="acc_why mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $page['whyChoose']['title'] }}</h2>
            @if ($page['whyChoose']['intro'])
                <p>{!! $t($page['whyChoose']['intro']) !!}</p>
            @endif
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img($page['whyChoose']['img']) }}" loading="lazy" alt="{{ $page['whyChoose']['title'] }}">
            </div>
            <div class="split_acc_list accordion" id="whyAcc">
                @foreach ($page['whyChoose']['items'] as $i => $item)
                    <div class="split_acc_item">
                        <button type="button" class="split_acc_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse"
                            data-bs-target="#whyAcc{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="whyAcc{{ $i }}">
                            <span>{{ $item['title'] }}</span>
                            <img src="{{ $img('common/icon-plus.svg') }}" width="32" height="32" alt="">
                        </button>
                        <div id="whyAcc{{ $i }}" class="split_acc_body collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#whyAcc"@if (!empty($item['img'])) data-img="{{ $img($item['img']) }}"@endif>
                            <p>{!! $t($item['text']) !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('public/front/js/split-accordion.js') }}?v={{ filemtime(public_path('front/js/split-accordion.js')) }}" defer></script>
@endpush

@if (collect($page['whyChoose']['items'])->contains(fn ($item) => !empty($item['img'])))
@push('scripts')
<script>
(function () {
    // The image on the left follows the open item (items with a data-img): fade out, swap, fade in
    var list = document.getElementById('whyAcc');
    var photo = document.querySelector('.acc_why .split_acc_img img');
    if (!list || !photo) return;
    list.addEventListener('show.bs.collapse', function (e) {
        var src = e.target.getAttribute('data-img');
        if (!src || photo.getAttribute('src') === src) return;
        photo.style.transition = 'opacity 0.2s ease';
        photo.style.opacity = '0';
        window.setTimeout(function () {
            photo.onload = function () { photo.style.opacity = '1'; };
            photo.setAttribute('src', src);
            if (photo.complete) photo.style.opacity = '1';
        }, 200);
    });
})();
</script>
@endpush
@endif
@break

@case('cta2')
{{-- CTA banner 2 --}}
<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>{{ $page['cta2']['title'] }}</h2>

                        <p>{{ $page['cta2']['text'] }}</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <span class="color-button__label relative z-10 me-2">{{ $page['cta2']['cta'] }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@break

@case('faq')
{{-- FAQ --}}
<section class="mt-80">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="faq-head mb-2 mb-xxl-4">{{ $page['faq']['title'] }}</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="fre_ques accordion" id="accFaq">
                    @foreach ($page['faq']['items'] as $i => $item)
                        <div class="fre_que">
                            <h3 class="sub_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#accFaq{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="accFaq{{ $i }}">
                                {{ $item['q'] }}
                            </h3>
                            <div id="accFaq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#accFaq">
                                <p>{!! $t($item['a']) !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(fn ($f) => [
        '@type' => 'Question',
        'name' => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $plain($f['a'])],
    ], $page['faq']['items']),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_PRETTY_PRINT) !!}
</script>
@break

@case('contact')
{{-- Contact form --}}
<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>@if (!empty($page['contact']['titleParts'])){{ $page['contact']['titleParts'][0] }} <img src="{{ $img($page['contact']['titleGif']) }}" alt="icon" class="inner-gif"> {{ $page['contact']['titleParts'][1] }}@else{{ $page['contact']['title'] }}@endif</h2>
            <p>{{ $page['contact']['text'] }}</p>
        </div>

        <form id="contactBandForm" class="validated-form contact_band_form" action="{{ route('request.store') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="form_type" value="US Footer Form">
            <input type="hidden" name="country" id="cfCountry" value="{{ $site['country_name'] ?? 'United States' }}">
            <input type="hidden" name="full_phone" id="cfFullPhone">
            <div style="display:none;">
                <label>Leave this field empty</label>
                <input type="text" name="fax_number" autocomplete="off">
            </div>

            <div class="row g-4">
                <div class="col-lg-6 col-12 cf_field">
                    <input type="text" name="fullname" maxlength="70" placeholder="{{ $cl[0] }}" aria-label="Full Name"
                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'').replace(/\s+/g,' ').trimStart();">
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <input type="email" name="email" maxlength="70" placeholder="{{ $cl[1] }}" aria-label="Email Address">
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <input type="text" name="company" maxlength="100" placeholder="{{ $cl[2] }}" aria-label="Company Name" @if ($page['contact']['companyRequired'] ?? true) required @endif>
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <input type="tel" name="phone" id="cfPhone" maxlength="15" minlength="10" placeholder="{{ $cl[3] }}" aria-label="Phone Number"
                        oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,15);">
                    @if (!empty($page['contact']['phoneError']))
                        <span id="mobile-error" style="color:red; display:none;">{{ $page['contact']['phoneError'] }}</span>
                    @endif
                </div>
                @if (!empty($page['contact']['service']))
                <div class="col-12 cf_field">
                    <select name="service" aria-label="Choose Service" required>
                        <option value="" hidden>Choose Service*:</option>
                        @foreach ($contactFormServices as $service)
                            <option value="{{ $service }}" @selected($service === $page['contact']['service'])>{{ $service }}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="col-12 cf_field">
                    <textarea name="message" rows="3" placeholder="{{ $cl[4] }}" aria-label="Message"></textarea>
                </div>
                <div class="col-12 cf_field">
                    <div class="g-recaptcha" data-sitekey="6LfxJ7crAAAAAGJsj1iMJSQXpZLJE47H1h6StuUT"></div>
                    <span class="captcha-error text-danger" style="display:none;">Please verify you are not a robot.</span>
                </div>
            </div>

            <div class="contact_band_btn">
                <button type="submit" class="com_btn2 color-animated-button bubble-btn" data-hover-colors='{{ $bubbleColors }}'>
                    <span class="color-button__background"></span>
                    <span class="color-button__bubble-container">
                        <span class="color-button__bubble"></span>
                    </span>
                    <span class="color-button__label relative z-10">{{ $page['contact']['cta'] }}</span>
                </button>
            </div>
        </form>
    </div>
</section>
@break
@endswitch
@endforeach
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactBandForm');
    const phone = document.getElementById('cfPhone');
    const fullPhone = document.getElementById('cfFullPhone');
    const countryInput = document.getElementById('cfCountry');
    if (!form || !phone || !window.intlTelInput) return;

    const iti = window.intlTelInput(phone, {
        initialCountry: @json($site['phone_country'] ?? 'gb'),
        separateDialCode: true,
        utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js'
    });

    function syncCountry() {
        const d = iti.getSelectedCountryData();
        if (d && d.name && countryInput) {
            countryInput.value = d.name.replace(/\s*\(.*\)\s*$/, '');
        }
    }
    syncCountry();
    phone.addEventListener('countrychange', syncCountry);

    form.addEventListener('submit', function (e) {
        if (!form.checkValidity()) {
            e.preventDefault();
            e.stopImmediatePropagation();
            form.reportValidity();
            return;
        }
        syncCountry();
        fullPhone.value = '+' + iti.getSelectedCountryData().dialCode + phone.value.replace(/\s+/g, '');
    }, true);
});
</script>
@endpush

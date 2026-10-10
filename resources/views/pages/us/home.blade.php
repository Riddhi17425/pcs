{{-- US home page (/us). Controller: CountryHomeController@home (team / logos / blogs DB se: $ourexpert, $images, $blogs).
     Har section seedha Blade/HTML me likha hai (upar data ka PHP block, neeche markup); CSS: STRUCTURE.md ka section-table dekho.
     Text / images badalne ho to isi file me badlo. --}}
@extends('layouts.app', ['header_overlay' => true])

@section('content')
@php
    $img = fn ($file) => asset('public/front/images/' . $file);
    $us = fn ($path) => url('us/' . $path);
    $consult = url('us') . '#consultation';   // jin services ka page abhi nahi hai, wo form par jaati hain

    $serviceCards = [
        ['title' => 'Accounting Outsourcing Services', 'img' => $img('figma-precision/accounting-outsourcing.png'), 'url' => $us('bookkeeping-and-accounting-services'),
         'text' => 'Keeping your accounts accurate and current is demanding, and for many US companies it draws focus away from running the business. We take on the full accounting cycle, from reconciliations and the general ledger to closing your books each month and at year-end, all to US GAAP. You get a clear, current picture of your finances whenever you need it. And because you are not carrying a full in-house team, the cost is considerably lower.'],
        ['title' => 'Bookkeeping Outsourcing Services', 'img' => $img('common/services/bookkeeping-team.jpg'), 'url' => $us('bookkeeping-and-accounting-services'),
         'text' => 'Accurate books are the foundation everything else is built on, from tax filings to financial reporting. We log and match every transaction as it comes through, keeping your records current and your numbers something you can trust. We work inside the software your business already runs on, so nothing about your setup has to change. The result is clean, reliable books maintained month after month.'],
        ['title' => 'Outsourced Tax Preparation Services', 'img' => $img('common/services/tax-team.jpg'), 'url' => $us('taxation-services'),
         'text' => 'Tax season places real strain on US businesses and CPA firms alike. We provide tax preparation support that gets returns organized, reviewed, and ready to file on schedule, easing the pressure when it peaks. Our team stays current on the federal and state rules that affect your filings, which reduces errors and last-minute surprises. You receive accurate, well-prepared returns and a far smoother season.'],
        ['title' => 'Payroll Outsourcing Services', 'img' => $img('us/service-4.jpg'), 'url' => $consult,
         'text' => 'Payroll is one area where employees notice mistakes immediately, so accuracy matters in every cycle. We manage the full process, including pay runs, withholdings, and the associated payroll tax filings, all processed correctly and on time. Your people are paid accurately, and your compliance obligations are met without adding to your team\'s workload. It removes a recurring, high-stakes responsibility from your team.'],
        ['title' => 'Outsourced Audit Support Services', 'img' => $img('us/service-5.jpg'), 'url' => $consult,
         'text' => 'Audits seem a lot less painful when your papers are in order, and the work is done. We get your schedules, reconciliations, and backup documentation ready so that when it comes time for your audit, your auditor does not have to look far to find the information needed. We help facilitate an easier, smoother audit with less interruption to your employees\' work.'],
    ];

    $clientCards = [
        ['title' => 'Accounting Outsourcing for US Businesses', 'img' => $img('us/client-2.jpg'),
         'text' => 'We work with small and mid-sized companies, to fast-growing companies and those with slender finance teams, providing the extra support your business needs. For businesses with seasonal accounting cycles, we ramp up during the accounting high seasons, and ease down as those high seasons wrap up. It is a smart, scalable way to manage a larger in-house team. '],
        ['title' => 'Accounting Outsourcing for US Accounting & CPA Firms', 'img' => $img('us/client-1-182ac9.jpg'),
         'text' => 'We handle bookkeeping, accounting back-office work, tax preparation support, and audit support, along with overflow and seasonal workloads when demand spikes. For firms that prefer it, we also provide white-label accounting and dedicated offshore accounting teams that operate under your brand. A growing number of US accounting firms outsourcing to India do so to grow steadily while keeping quality and client relationships firmly in their own hands.'],
    ];

    $standards = [
        ['title' => 'US GAAP Accounting Support',
         'text' => 'Accurate accounts depend on applying US GAAP correctly and consistently. We handle your accounting to US GAAP, so your financial statements are correctly formatted and hold up under reporting, review, or audit. As guidance and standards are updated, our team stays updated. The result is dependable, standards-based accounting you can build decisions on.'],
        ['title' => 'Financial Reporting',
         'text' => 'Numbers only help when they are presented clearly enough. We produce financial reports that turn your raw data into a clear view of performance, cash position, and trends. Reports are accurate, consistent, and delivered on a schedule that suits your business. This gives owners, leadership, and stakeholders the insight they need, exactly when they need it.'],
        ['title' => 'General Ledger & Reconciliation',
         'text' => 'A reliable general ledger is what keeps your financial picture accurate. We maintain your ledger and reconcile your accounts on a regular basis by identifying and rectifying discrepancies early. Bank, credit card, and account reconciliations are handled thoroughly, so nothing goes unnoticed. The outcome is an accurate ledger which forms the basis for every subsequent report.'],
        ['title' => 'Month-End & Year-End Closing',
         'text' => 'Closing the books can take days your team would much rather spend in other places. We handle your monthly and year-end close, reconcile your accounts, post adjustments, and prepare your books for review. You start each new period with a clean slate and fresh numbers. '],
        ['title' => 'Audit Preparation & Documentation',
         'text' => 'Most of the hassle of an audit has to do with the preparation involved. We compile the documentation, schedules, and reconciliations auditors will be looking for in an organized fashion before the audit even starts. This lessens the back-and-forth, shortens the process, and gives your business a good impression.'],
        ['title' => 'Accounting Process & Internal Controls',
         'text' => 'Strong processes and controls protect the accuracy of everything your finance function produces. We follow clear, documented procedures and build sensible checks into the work, reducing the risk of error and oversight. Consistent processes also make your accounting easier to review and to scale as you grow. '],
    ];

    $ind = fn ($name) => $img("common/industries/$name.svg");
    $industries = [
        [[$ind('accounting'), 'Accounting & CPA Firms'], [$ind('real-estate'), 'Real Estate'], [$ind('construction'), 'Construction'], [$ind('manufacturing'), 'Manufacturing'], [$ind('healthcare'), 'Healthcare']],
        [[$ind('legal'), 'Law Firms'], [$ind('professional-services'), 'Professional Services'], [$ind('ecommerce'), 'E-commerce & Retail'], [$ind('strata'), 'Technology'], [$ind('accounting'), 'Financial Services']],
    ];

    $processSteps = [
        ['title' => 'Discovery',
         'text' => 'We start by learning about your business, what you are doing now, and which tasks you want to delegate to us. We use this initial consultation to demonstrate how we can provide value and the best way to complement your current workflow. We then customise the support based on your business needs.'],
        ['title' => 'Tailored Team',
         'text' => 'Next, we put together a team with the skills to carry out the work you require. The same team members stay involved with your account, so they understand your business, your financial and administrative systems, and your expectations - resulting in a reduced learning curve and consistent results. '],
        ['title' => 'Workflow Integration',
         'text' => 'We then set up to work the way you already do. Our team uses your accounting software, your file-sharing, and your reporting formats, so there is nothing new for your staff to learn. We establish protected access and settle on the channels we will use to talk and share files. The switch is handled carefully, and we quickly become part of your day-to-day tasks.'],
         ['title' => 'Support',
         'text' => 'Once you are good to go, the work begins. We maintain your bookkeeping, payroll, tax, and financial reports in line and on track, providing you with progress updates and future plans along the way. You retain complete awareness and control over every piece of work, while we take care of the work as you handle the business.'],
         ['title' => 'Review & Scale',
         'text' => 'Support is flexible as your business evolves. We carry out quality reviews periodically and, as your requirements fluctuate, you can increase capacity when the demand is high and reduce it when it falls off. That is what makes us so flexible and, therefore, so valuable to you.'],
    ];

    $certs = [
        [$img('figma-footer-badges/iso-9001.png'), 'ISO 9001'],
        [$img('figma-footer-badges/iso-27001.png'), 'ISO 27001'],
        [$img('figma-footer-badges/gdpr.png'), 'GDPR'],
    ];

    $securityCards = [
        ['title' => 'Secure Data Handling', 'img' => $img('us/security-1.jpg'),
         'text' => 'Your financial data is protected at every stage of the work. We keep it in secure systems and limit access to specialists assigned to your account. Clear procedures govern how information is stored, used, and removed throughout the engagement.'],
        ['title' => 'Confidentiality & Privacy', 'img' => $img('us/security-2.jpg'),
         'text' => 'Everything we handle for you stays confidential. Every engagement is covered by signed non-disclosure agreements (NDA) and strict confidentiality rules. Your records and those of your clients remain protected, while your reputation and client relationships stay entirely confidential.'],
        ['title' => 'Quality & Process Controls', 'img' => $img('us/security-3.jpg'),
         'text' => 'QA forms the backbone of our processes, helping us prevent errors rather than relying on luck. Every job passes through a stringent QA review before it comes back to you. This established quality standard remains consistent even when volumes rise. Our quality process is ISO 9001 certified.'],
        ['title' => 'Certified Security Standards', 'img' => $img('us/security-1.jpg'),
         'text' => 'Our security standards are ISO 27001 certified, with firm rules for how data must be protected and managed. This provides third-party evidence that your data receives professional-grade handling. We understand our US clients\' expectations and requirements for data security and adhere to them.'],
        ['title' => 'Secure Technology & Communication', 'img' => $img('us/security-2.jpg'),
         'text' => 'We protect data exchanged through everyday tools such as email using secure, monitored systems and encryption. Confidential details are never sent through unsafe channels, and access to our tools remains tightly controlled. From quick questions to complete financial records, every exchange stays protected.'],
        ['title' => 'Business Continuity & Data Protection', 'img' => $img('us/security-3.jpg'),
         'text' => 'We maintain data protection measures and business continuity plans so your work continues without interruption. Backups, redundancy, and defined recovery procedures help keep your information safe and services running. You can depend on consistent delivery, whatever the circumstances.'],
    ];

    // core team (Malay, Prithvi, Umesh) config/home.php se aati hai; yahan sirf US ka member
    $team = [
        ['name' => 'Parth Parekh', 'role' => 'Advisor Partner US', 'image' => $img('common/team/parth-parekh.png')],
    ];

    $faqs = [
        ['q' => 'What accounting services can US businesses outsource?',
         'a' => 'Most finance functions, including bookkeeping, payroll, tax preparation support, financial reporting, general ledger and reconciliation, and audit support. You might hand over just one task, or your whole accounting function, whichever fits.'],
        ['q' => 'Why should a US business outsource accounting?',
         'a' => 'Maximize your return on investment as you reduce costs, tap into professional expertise, and buy back internal time without hiring. Outsourcing provides you with additional capacity and expert resources on-demand.'],
        ['q' => 'Can PCS Global provide a dedicated accounting team?',
         'a' => 'Yes. You get a dedicated team assigned to your account, so the same professionals learn your business and deliver consistent work over time.'],
        ['q' => 'Does PCS Global support US GAAP accounting?',
         'a' => 'Yes. We will set up your accounting on US GAAP standards so that your statements are compliant and formatted for reporting, review, and auditing.'],
        ['q' => 'What accounting software does PCS Global support?',
         'a' => 'We work with major platforms, including QuickBooks, Xero, Sage, and NetSuite, so we integrate with the tools your business already uses.'],
        ['q' => 'How does PCS Global protect financial data?',
         'a' => 'Through secure systems, restricted access, signed non-disclosure agreements, and recognized security standards, so your information stays private and protected throughout.'],
        ['q' => 'How does the accounting outsourcing process work?',
         'a' => 'In five steps: we learn your requirements, assemble a dedicated team, connect with your systems, take on the daily work, and scale the support as you grow.'],
        ['q' => 'How can I get started with PCS Global?',
         'a' => 'Book a free consultation. We will talk through your requirements and show you how outsourcing could work for your business.'],
    ];

    
@endphp

{{-- Hero Dark --}}
@php
    $heroDarkFeatures = ['US Accounting Expertise', 'Dedicated Accounting Teams', 'Scalable Outsourcing Solutions', 'US GAAP Support'];
@endphp
<section class="hero_dark">
    <img class="hero_dark_bg" src="{{ $img('common/hero-bg.png') }}" alt="" aria-hidden="true">
    <img class="hero_dark_person" src="{{ $img('us/hero-person.png') }}" alt="">
    <div class="container">
        <div class="hero_dark_content">
            <div class="hero_dark_text">
                <div>
                    <h1>Accounting Outsourcing Company for <span class="hero_dark_mark">US Businesses &amp; CPA Firms</span></h1>
                    <p class="hero_dark_para">US businesses and CPA firms trust PCS Global for dedicated, scalable teams across accounting, bookkeeping, tax, payroll, and audit support. We work as a seamless extension of your team, not a distant vendor. Our accounting outsourcing services help US firms reduce costs, improve efficiency, and drive sustainable growth.</p>
                </div>
                @if (count($heroDarkFeatures))
                    <ul class="hero_dark_features">
                        @foreach ($heroDarkFeatures as $feature)
                            <li><img src="{{ asset('public/front/images/common/icon-check.svg') }}" width="16" height="16" alt="">{{ $feature }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="hero_dark_btns">
                <a class="com_btn2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Book a Free Consultation</a>
                <a class="com_btn_outline com_btn_outline_light" href="tel:+13478018715">Talk to Our Expert
                    <img src="{{ asset('public/front/images/common/icon-phone.svg') }}" width="20" height="20" alt=""></a>
            </div>
        </div>
    </div>
</section>

{{-- Partner Stats --}}
@php
    $partnerStatsParagraphs = [
        'Choosing an outsourcing provider comes down to trust: you want work done well and a team you do not have to supervise closely. With every US business and CPA firm we serve, our aim is the same: to be a genuine accounting outsourcing partner you can trust to get on with the work, not a vendor you have to keep in check.',
        'Our model depends on talented people and efficient procedures; quality comes before quantity. Most US businesses outsource accounting to India for obvious reasons: skills combined with considerable savings; we help you to make that transition seamless, safe, and well worth it. Putting it into perspective, we offer additional capacity, a reduced cost base, and a big room for your people to focus on growth.',
    ];
    $partnerStatsStats = [[60, 'Clients'], [800, 'Projects Completed'], [100, 'Combined Years of Team Experience']];
@endphp
<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('us/partner.jpg') }}" loading="lazy" alt="Why Partner With PCS Global">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="counter_lt">
                    <h2 class="mb-3 mb-xxl-4">Why Partner with PCS Global?</h2>
                    @foreach ($partnerStatsParagraphs as $paragraph)
                        <p>{!! $paragraph !!}</p>
                    @endforeach
                </div>

                <div class="counter partner_stats">
                    @foreach ($partnerStatsStats as [$count, $label])
                        <div class="counter_line partner_stats_line">
                            <h3 data-count="{{ $count }}">{{ $count }}+</h3>
                            <h5>{{ $label }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Service Cards --}}
@php
    $serviceCardsCards = $serviceCards;
@endphp
<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Outsourcing Financial Services We Provide in the United States</h2>
            <p>Day-to-day finance work can take hours that your people could use elsewhere-and the right accounting partner puts those hours to better use. From the basics to the sophisticated, PCS Global handles the accounting work your US business or firm counts on, whether you want one service or an end-to-end solution. </p>
        </div>

        {{-- cards 3 ke multiple na hon to aakhri row center me --}}
        <div class="precision_grid {{ count($serviceCardsCards) % 3 ? 'precision_grid_center' : '' }}">
            @foreach ($serviceCardsCards as $card)
                <div class="precision_card">
                    <div class="precision_card_img">
                        <img src="{{ $card['img'] }}" loading="lazy" alt="{{ $card['title'] }}">
                    </div>
                    <div class="precision_card_body">
                        <h3>{!! $card['title'] !!}</h3>
                        <p>{!! $card['text'] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Trust Slider --}}
@php
    $trustSliderSlides = $clientCards;
@endphp
@php
    $card = function ($slide) {
        $cert = !empty($slide['certificate']) ? 'trust_slide_img_certificate' : '';
        $para = !empty($slide['text']) ? '<p>' . $slide['text'] . '</p>' : '';
        $btn = !empty($slide['button']) ? '<div class="trust_slide_btn"><a class="com_btn_outline com_btn_outline_light" href="' . e($slide['button'][1]) . '">' . e($slide['button'][0]) . '</a></div>' : '';
        return '<div class="trust_slide"><div class="trust_slide_img ' . $cert . '"><img src="' . e($slide['img']) . '" loading="lazy" alt="' . e(strip_tags($slide['title'])) . '"></div>'
            . '<div class="trust_slide_body"><h3>' . $slide['title'] . '</h3>' . $para . '</div>' . $btn . '</div>';
    };
@endphp
<section class="trust_slider_sec trust_grid_sec mt-100">
    <div class="container">
        <div class="trust_grid_head">
            <h2>Outsourcing Accounting Solutions for USA Businesses &amp; CPA Firms</h2>
            <p>No two businesses manage their finances the same way, so an off-the-shelf package rarely fits. We tailor the support to suit your situation, whether you're a rapidly expanding business or an established accountancy firm.</p>
        </div>
        <div class="trust_grid">
            @foreach ($trustSliderSlides as $slide)
                {!! $card($slide) !!}
            @endforeach
        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById('trustSliderTrack');
    const prevBtn = document.querySelector('.trust_slider_prev');
    const nextBtn = document.querySelector('.trust_slider_next');
    const segs = document.querySelectorAll('#trustSliderProgress .trust_slider_seg');
    if (!track || !segs.length) return;

    const cards = () => Array.from(track.querySelectorAll('.trust_slide'));
    const cardLeft = (card) => card.offsetLeft - track.firstElementChild.offsetLeft;

    // jo card track ke left edge ke sabse paas hai wahi active; end tak scroll ho gaya ho to aakhri card
    function updateProgress() {
        const list = cards();
        const maxScroll = track.scrollWidth - track.clientWidth;
        let active = 0;
        if (maxScroll > 0 && track.scrollLeft >= maxScroll - 2) {
            active = list.length - 1;
        } else {
            let best = Infinity;
            list.forEach((card, i) => {
                const d = Math.abs(cardLeft(card) - track.scrollLeft);
                if (d < best) { best = d; active = i; }
            });
        }
        segs.forEach((seg, i) => seg.classList.toggle('active', i === active));
    }

    function scrollByCard(direction) {
        const card = track.querySelector('.trust_slide');
        if (!card) return;
        const gap = parseFloat(getComputedStyle(track).gap) || 0;
        track.scrollBy({ left: direction * (card.offsetWidth + gap), behavior: 'smooth' });
    }

    segs.forEach((seg, i) => seg.addEventListener('click', () => {
        const card = cards()[i];
        if (card) track.scrollTo({ left: cardLeft(card), behavior: 'smooth' });
    }));

    prevBtn && prevBtn.addEventListener('click', () => scrollByCard(-1));
    nextBtn && nextBtn.addEventListener('click', () => scrollByCard(1));
    track.addEventListener('scroll', updateProgress);
    updateProgress();
});
</script>

{{-- Split Accordion --}}
@php
    $splitAccordionItems = $standards;
@endphp
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">US Accounting Standards &amp; Compliance Expertise</h2>
            <p>US compliance leaves little room for error, and mistakes can quickly become expensive, so accuracy here is essential. Our team & processes are tailored to meet US requirements thoroughly and complete every task to the standards that apply, which removes a major worry for you.</p>
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img('us/standards-6f1a69.jpg') }}" loading="lazy" alt="US Accounting Standards &amp;amp; Compliance Expertise">
            </div>
            <div class="split_acc_list accordion" id="standardsAcc">
                @foreach ($splitAccordionItems as $i => $item)
                    <div class="split_acc_item">
                        <button type="button" class="split_acc_head {{ $i === 0 ? '' : 'collapsed' }}" @if (!empty($item['text'])) data-bs-toggle="collapse" @endif
                            data-bs-target="#standardsAcc{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                            aria-controls="standardsAcc{{ $i }}">
                            <span>{!! $item['title'] !!}</span>
                            <img src="{{ asset('public/front/images/common/icon-plus.svg') }}" width="32" height="32" alt="">
                        </button>
                        @if (!empty($item['text']))
                            <div id="standardsAcc{{ $i }}" class="split_acc_body collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#standardsAcc">
                                <p>{!! $item['text'] !!}</p>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Industry Pills --}}
@php
    $industryPillsRows = $industries;
@endphp
<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Industries We Support Across the United States</h2>
        </div>
    </div>

    <div class="industries_bot">
        <div class="ind_marquee">
            @foreach ($industryPillsRows as $row)
                <div class="ind_row {{ $loop->odd ? 'ind_row_up' : 'ind_row_down' }}">
                    <div class="ind_track">
                        {{-- 2 baar: track seamless loop ho (-50% translate) --}}
                        @foreach ([1, 2] as $copy)
                            @foreach ($row as [$icon, $label])
                                <div class="industries_card">
                                    <div class="industries_icon"><img src="{{ $icon }}" loading="lazy" alt="{{ $label }}"></div>
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

{{-- Process Steps --}}
@php
    $processStepsSteps = $processSteps;
@endphp
@php
    $icons = [
        // discovery (search)
        '<circle cx="11" cy="11" r="7"/><path d="m20.5 20.5-4.5-4.5"/>',
        // tailored team (people)
        '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        // workflow integration (arrows)
        '<path d="M4 7h14m0 0-3.5-3.5M18 7l-3.5 3.5"/><path d="M20 17H6m0 0 3.5-3.5M6 17l3.5 3.5"/>',
        // support (headset)
        '<path d="M4 14v-2a8 8 0 0 1 16 0v2"/><rect x="3" y="13" width="4" height="6" rx="1.5"/><rect x="17" y="13" width="4" height="6" rx="1.5"/><path d="M20 19c0 1.7-1.8 3-4 3h-2"/>',
        // review & scale (growth chart)
        '<path d="M3 20h18"/><path d="m5 16 4-4 3 3 7-7"/><path d="M15 8h4v4"/>',
    ];
@endphp
<section class="process_sec mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">How Does PCS Global Work With US Clients?</h2>
            <p>Getting started with PCS Global is simple, and the process is built to keep risk and disruption to a minimum. In these five stages, you go from an opening conversation to a team that functions as part of your own.</p>
        </div>

        <div class="process_steps">
            @foreach ($processStepsSteps as $step)
                <div class="process_card">
                    <div class="process_head">
                        <span class="process_icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icons[$loop->index % count($icons)] !!}</svg>
                        </span>
                        <!-- <span class="process_step_label">Step {{ sprintf('%02d', $loop->iteration) }}</span> -->
                    </div>
                    <div class="process_body">
                        <h3>{!! $step['title'] !!}</h3>
                        <p>{!! $step['text'] !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Cert Tools --}}
@php
    $certToolsCerts = $certs;
@endphp
<section class="clients cert_tools_sec mt-100">
    <div class="container">
        <div class="cert_tools_tabs">
            <button type="button" class="cert_tools_tab active" data-tab="certifications">Certifications</button>
            <button type="button" class="cert_tools_tab" data-tab="tools">Tools & Technology</button>
        </div>
    </div>

    <div class="cert_tools_panel active" data-panel="certifications">
        <div class="container">
            <div class="cert_badges_row">
                @foreach ($certToolsCerts as [$imgCertTools, $alt])
                    <span class="cert_badge"><img src="{{ $imgCertTools }}" alt="{{ $alt }}" loading="lazy"></span>
                @endforeach
            </div>
        </div>
    </div>

    <div class="cert_tools_panel" data-panel="tools">
        <div class="client_slider_full">
            <div class="client_slider">
                @for ($i = 1; $i <= 29; $i++)
                    @php $tool = sprintf('Homepage_%02d', $i); @endphp
                    <div>
                        <img class="img-fluid" src="{{ asset('public/front/images/' . $tool . '.png') }}" loading="lazy" alt="{{ $tool }}">
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll('.cert_tools_tab');
    const panels = document.querySelectorAll('.cert_tools_panel');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tab');

            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            panels.forEach(p => p.classList.toggle('active', p.getAttribute('data-panel') === target));
        });
    });
});
</script>

{{-- Overlay Cards --}}
@php
    $overlayCardsCards = $securityCards;
@endphp
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Your Data Security. Our Responsibility.</h2>
            <p>Trusting an outside team with your finances is not a step to take lightly. Security and confidentiality are core to how we operate, not features added afterward. This is why US businesses and firms trust us with sensitive financial information.</p>
        </div>

        <div class="our_experts_cen">
            <div class="ov_slider" data-slider data-slider-controls="slider5" data-slider-show="3">
                @foreach ($overlayCardsCards as $card)
                    <div>
                        <div class="ov_card">
                            <img src="{{ $card['img'] }}" loading="lazy" alt="{{ $card['title'] }}">
                            <div class="ov_card_body">
                                <div class="ov_card_head">
                                    <h3>{!! $card['title'] !!}</h3>
                                    <img src="{{ $img('common/security-icon.svg') }}" width="33" height="30" alt="">
                                </div>
                                <p>{!! $card['text'] !!}</p>
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
                <span class="arrow-prev slider5-prev">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 6.32861L6 11.3286M1 6.32861L6 1.32861M1 6.32861H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="arrow-next slider5-next">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 6.32861L14 11.3286M19 6.32861L14 1.32861M19 6.32861H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>

{{-- Region Map --}}
@php
    $regionMapSize = [1241, 726];
    $regionMapMap = ['src' => $img('us/map-us.svg'), 'x' => 0, 'y' => 0, 'w' => 1241];
    $regionMapLogo = ['src' => $img('common/map-logo.svg'), 'x' => 390, 'y' => 134, 'w' => 248.21];
    $regionMapPhotos = [
        [$img('us/city-california.png'), 23, 311, 242],
        [$img('us/city-texas-e7cd96.png'), 422, 365, 190],
        [$img('us/city-florida.png'), 860, 461, 272],
        [$img('us/city-greatlakes-7ab03f.png'), 677, 134, 283],
        [$img('us/city-newyork-5be5d2.png'), 917, -19, 211],
    ];
    $regionMapPins = [[130.29, 444.57, 43.17], [562.29, 583.57, 43.17], [906, 611.57, 43.17], [815, 323.57, 43.17], [987, 220.57, 43.17]];
    $regionMapLabels = [['California', 134, 384], ['Texas', 583, 523], ['Florida', 921.21, 551], ['Illinois', 830.21, 263], ['New York', 987, 160]];
    $regionMapLabel = ['font' => 18, 'py' => 15.4, 'px' => 20];
@endphp
@php
    [$W, $H] = $regionMapSize;
    $x = fn ($v) => round($v / $W * 100, 3) . '%';
    $y = fn ($v) => round($v / $H * 100, 3) . '%';
    $regionMapLabel += ['font' => 18, 'py' => 9.5, 'px' => 26.8];
    // map bahut bada na lage: height ~540px aur width ~860px se zyada nahi
    $maxW = (int) round(min($W, 540 * $W / $H, 860));
    $pin = asset('public/front/images/common/pin.png');
@endphp
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>PCS Global Serves Clients Across United States</h2>
        </div>

        <div class="region_map" id="usMap"
            style="max-width:{{ $maxW }}px;aspect-ratio:{{ $W }} / {{ $H }};--rm-w:{{ $W }};--rm-font:{{ $regionMapLabel['font'] }};--rm-py:{{ $regionMapLabel['py'] }};--rm-px:{{ $regionMapLabel['px'] }};--rm-land:{{ $regionMapMap['opacity'] ?? 1 }}">
            <img class="region_map_land" src="{{ $regionMapMap['src'] }}" style="left:{{ $x($regionMapMap['x']) }};top:{{ $y($regionMapMap['y']) }};width:{{ $x($regionMapMap['w']) }}" loading="lazy" alt="PCS Global Serves Clients Across United States">
            @if ($regionMapLogo)
                <img class="region_map_logo" src="{{ $regionMapLogo['src'] }}" style="left:{{ $x($regionMapLogo['x']) }};top:{{ $y($regionMapLogo['y']) }};width:{{ $x($regionMapLogo['w']) }}" loading="lazy" alt="PCS Global">
            @endif
            @foreach ($regionMapPhotos as $i => [$src, $px, $py, $pw])
                <div class="region_map_photo" style="left:{{ $x($px) }};top:{{ $y($py) }};width:{{ $x($pw) }};--d:{{ $i }}">
                    <img src="{{ $src }}" loading="lazy" alt="">
                </div>
            @endforeach
            @foreach ($regionMapPins as $i => [$px, $py, $pw])
                <span class="region_map_pin" style="left:{{ $x($px) }};top:{{ $y($py) }};width:{{ $x($pw) }};--d:{{ $i }}">
                    <img src="{{ $pin }}" loading="lazy" alt="">
                </span>
            @endforeach
            @foreach ($regionMapLabels as $i => [$name, $px, $py])
                <span class="region_map_label" style="left:{{ $x($px) }};top:{{ $y($py) }};--d:{{ $i }}">{{ $name }}</span>
            @endforeach
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.region_map').forEach(function (map) {
        // JS na chale to map normal dikhega; JS hone par hi entry animation lagti hai
        map.classList.add('region_map_anim');
        if (!('IntersectionObserver' in window)) { map.classList.add('is-in'); return; }
        const io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { map.classList.add('is-in'); io.disconnect(); }
            });
        }, { threshold: 0.25 });
        io.observe(map);
    });
});
</script>

{{-- Cta Dark --}}
<section class="mt-100">
    <div class="container">
        <div class="cta_dark">
            <img class="cta_dark_bg" src="{{ $img('common/cta-bg.png') }}" alt="" aria-hidden="true">
            <div class="cta_dark_in">
                <h2>Need More Capacity Without Increasing Headcount?</h2>
                <a class="com_btn_outline com_btn_outline_light"  href="tel:+13478018715" >
                    Book a Free Consultation
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Team Slider --}}
@php
    $teamSliderMembers = $team;
    $teamSliderExperts = $ourexpert;
@endphp
@php
    $teamTeamSlider = array_map(fn ($m) => ['name' => $m['name'], 'role' => $m['role'], 'image' => asset('public/front/images/common/team/' . $m['image'])], config('home.core_team'));
    $teamTeamSlider = array_merge($teamTeamSlider, $teamSliderMembers);
    $names = array_column($teamTeamSlider, 'name');
    foreach ($teamSliderExperts as $expert) {
        if (!in_array($expert->name, $names)) {
            $teamTeamSlider[] = ['name' => $expert->name, 'role' => $expert->designation, 'image' => asset('/' . $expert->image)];
        }
    }
@endphp
<section class="our_experts mt-100 ">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Meet the PCS Global US Team</h2>
        </div>

        <div class="our_experts_cen">
            <div class="experts_slider team-slider" data-slider data-slider-controls="slider1" data-slider-show="4">
                @foreach ($teamTeamSlider as $member)
                    <div class="experts_card team-card">
                        <img class="img-fluid" src="{{ $member['image'] }}" loading="lazy" alt="{{ $member['name'] ?? 'expert' }}">
                        <div class="experts_card_bt">
                            <h4 class="sub_head">{{ $member['name'] }}</h4>
                            <p class="mb-0">{{ $member['role'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="our_experts_bot slider1-controls">
            <div class="experts_info">
                <div class="circular-progress slider1-progress">
                    <div class="inner-circle"></div>
                </div>
                <p class="experts_counter slider1-counter"></p>
            </div>
            <hr>
            <div class="slick_arrow">
                <span class="arrow-prev slider1-prev">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 6.32861L6 11.3286M1 6.32861L6 1.32861M1 6.32861H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="arrow-next slider1-next">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 6.32861L14 11.3286M19 6.32861L14 1.32861M19 6.32861H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>

{{-- Clients Slider --}}
@php
    $clientsSliderImages = $images;
@endphp
<section class="clients mt-100">
    <div class="container">
        <h2 class="text-center">Trusted by US Businesses &amp; CPA Firms</h2>
    </div>
    <div class="client_slider_full">
        <div class="client_slider">
            @foreach ($clientsSliderImages as $image)
                <div>
                    <img class="img-fluid" src="{{ asset('/' . $image->image) }}" loading="lazy" alt="{{ $image->name ?? 'client' }}">
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Testimonials --}}
@php
    $testimonialsItems = config('home.testimonials');
@endphp
<section class="mt-80">
    <div class="container">
        <div class="mb-5 text-center">
            <h2>What Our US-Based Clients Say</h2>
        </div>
        <div class="our_experts_cen row align-items-center">
            <div class="col-md-12">
                <div class="testimonial_slider" data-slider data-slider-controls="slider3" data-slider-show="2">
                    @foreach ($testimonialsItems as $item)
                        <div class="testimonial_card">
                            <img class="quote_icon" src="{{ asset('public/front/images/quotation-icon.svg') }}" loading="lazy" alt="quotation-icon">
                            <p>{!! $item['text'] !!}</p>
                            <hr>
                            <div class="testimonial_author">
                                <h4>{{ $item['name'] }}</h4>
                                <p>{{ $item['role'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="our_experts_bot slider3-controls">
            <div class="experts_info">
                <div class="circular-progress slider3-progress">
                    <div class="inner-circle"></div>
                </div>
                <p class="experts_counter slider3-counter"></p>
            </div>
            <hr>
            <div class="slick_arrow">
                <span class="arrow-prev slider3-prev">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 6.32861L6 11.3286M1 6.32861L6 1.32861M1 6.32861H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="arrow-next slider3-next">
                    <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 6.32861L14 11.3286M19 6.32861L14 1.32861M19 6.32861H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>

{{-- Blog Cards --}}
@php
    $blogCardsBlogs = $blogs;
    $blogCardsDetailRoute = 'blogs.detail';
@endphp
<section class="card_main mt-100 ">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Insights for US Accounting &amp; Businesses</h2>
        </div>
        <div class="row g-4 g-xl-5">
            @foreach ($blogCardsBlogs->take(3) as $blog)
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-img-home">
                        <img class="img-fluid" src="{{ asset('/' . $blog->front_image) }}" alt="image" loading="lazy">
                    </div>
                    <div class="ins_card">
                        <p>{{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}</p>
                        <a href="{{ route($blogCardsDetailRoute, $blog->url) }}" target="_blank" rel="noopener"><h4 class="sub_head">{{ $blog->title }}</h4></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Faq List --}}
@php
    $faqListItems = $faqs;
@endphp
<section class="mt-80">
    <div class="container">
        <div class="com_sec_head_top">
            <h4 class="faq-head mb-2 mb-xxl-4">Frequently Asked Questions</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="fre_ques accordion" id="usFaq">
                    @foreach ($faqListItems as $i => $item)
                        <div class="fre_que">
                            <h5 class="sub_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#usFaq{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="usFaq{{ $i }}">
                                {{ $item['q'] }}
                            </h5>
                            <div id="usFaq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#usFaq">
                                <p>{!! $item['a'] !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form --}}
@php
    $contactFormCities = ['New York', 'California', 'Texas', 'Florida', 'Illinois', 'Other'];
    $contactFormServices = array_column($serviceCards, 'title');
@endphp
<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>Ready to Build a Smarter Outsourcing Team?</h2>
            <p>Whether you need accounting, bookkeeping, tax, payroll or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.</p>
        </div>

        <form id="contactBandForm" class="validated-form contact_band_form" action="{{ route('request.store') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="country" value="United States">
            <input type="hidden" name="full_phone" id="cfFullPhone">
            {{-- Honeypot (bots ke liye) --}}
            <div style="display:none;">
                <label>Leave this field empty</label>
                <input type="text" name="fax_number" autocomplete="off">
            </div>

            <div class="row g-4">
                <div class="col-lg-6 col-12 cf_field">
                    <input type="text" name="fullname" maxlength="70" placeholder="Full Name*:" aria-label="Full Name"
                        oninput="this.value=this.value.replace(/[^a-zA-Z\s]/g,'').replace(/\s+/g,' ').trimStart();">
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <input type="email" name="email" maxlength="70" placeholder="Email Address*:" aria-label="Email Address">
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <input type="text" name="company" maxlength="100" placeholder="Company Name*:" aria-label="Company Name" required>
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <input type="tel" name="phone" id="cfPhone" maxlength="15" minlength="10" placeholder="Phone Number*:" aria-label="Phone Number"
                        oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,15);">
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <select name="city" aria-label="Select City" required>
                        <option value="" hidden>Select City*:</option>
                        @foreach ($contactFormCities as $city)
                            <option value="{{ $city }}">{{ $city }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-12 cf_field">
                    <select name="service" aria-label="Choose Service" required>
                        <option value="" hidden>Choose Service*:</option>
                        @foreach ($contactFormServices as $service)
                            <option value="{{ $service }}">{{ $service }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 cf_field">
                    <textarea name="message" rows="3" placeholder="Message:" aria-label="Message"></textarea>
                </div>
                <div class="col-12 cf_field">
                    <div class="g-recaptcha" data-sitekey="6LfxJ7crAAAAAGJsj1iMJSQXpZLJE47H1h6StuUT"></div>
                    <span class="captcha-error text-danger" style="display:none;">Please verify you are not a robot.</span>
                </div>
            </div>

            <div class="contact_band_btn">
                <button type="submit" class="com_btn2 color-animated-button bubble-btn">
                    <span class="color-button__background"></span>
                    <span class="color-button__bubble-container">
                        <span class="color-button__bubble"></span>
                    </span>
                    <span class="color-button__label relative z-10">Request a Consultation</span>
                </button>
            </div>
        </form>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactBandForm');
    const phone = document.getElementById('cfPhone');
    const fullPhone = document.getElementById('cfFullPhone');
    if (!form || !phone || !window.intlTelInput) return;

    const iti = window.intlTelInput(phone, {
        initialCountry: @json('us'),
        separateDialCode: true,
        utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js'
    });

    // native required (company / city / service) ko common validator se pehle check karo
    form.addEventListener('submit', function (e) {
        if (!form.checkValidity()) {
            e.preventDefault();
            e.stopImmediatePropagation();
            form.reportValidity();
            return;
        }
        fullPhone.value = '+' + iti.getSelectedCountryData().dialCode + phone.value.replace(/\s+/g, '');
    }, true);
});
</script>
@endsection

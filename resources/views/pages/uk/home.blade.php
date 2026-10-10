{{-- UK home page (/uk). Controller: CountryHomeController@home (team / logos / blogs DB se: $ourexpert, $images, $blogs).
     Har section seedha Blade/HTML me likha hai (upar data ka PHP block, neeche markup); CSS: STRUCTURE.md ka section-table dekho.
     Text / images badalne ho to isi file me badlo. --}}
@extends('layouts.app', ['header_overlay' => true])

@section('content')
@php
    $img = fn ($file) => asset('public/front/images/' . $file);
    $uk = fn ($path) => url('uk/' . $path);
    $consult = url('uk') . '#consultation';   // jin services ka page abhi nahi hai, wo form par jaati hain

    $serviceCards = [
        ['title' => 'Accounting Outsourcing', 'img' => $img('figma-precision/accounting-outsourcing.png'), 'url' => $uk('accounting-outsourcing-services'),
         'text' => 'Producing accurate, up-to-date accounts requires ongoing time and attention that in-house teams often cannot spare. We manage the complete cycle for you, including reconciliations, ledgers and both the month-end and year-end close, prepared to UK standards. This gives you a clear and current view of your financial position at any time. Because there is no permanent team on your payroll, this expertise comes at a lower cost.'],
        ['title' => 'Small Business Accounting', 'img' => $img('common/services/bookkeeping-team.jpg'), 'url' => $uk('small-business-accounting-services'),
         'text' => 'Startup UK businesses require a full finance function but rarely can justify a permanent team to run it. PCS Global provides that function on an outsourced basis, managing your day-to-day accounts, reporting and compliance so nothing is overlooked. You receive accurate records, clear figures and consistent support, all aligned with how your business operates.'],
        ['title' => 'Bookkeeping Outsourcing', 'img' => $img('common/services/tax-team.jpg'), 'url' => $uk('accounting-outsourcing-services'),
         'text' => 'Reliable financial information begins with well-maintained bookkeeping, as every report and return depends on it. Our team records and reconciles transactions on an ongoing basis, so your records remain current and your figures reliable. We work within your existing software, leaving your systems unchanged. The outcome is a complete and accurate set of books maintained throughout the year.'],
        ['title' => 'Tax Preparation Outsourcing', 'img' => $img('uk/service-tax.jpg'), 'url' => $uk('outsource-tax-preparation-services'),
         'text' => 'For UK businesses, tax is one of the most demanding areas of compliance, particularly as filing deadlines approach. We prepare and review your returns to HMRC requirements and submit them before the deadline. Our specialists remain updated with the rules that apply to your circumstances, which minimises errors and prevents late submissions.'],
        ['title' => 'Payroll Outsourcing', 'img' => $img('figma-precision/payroll-outsourcing.png'), 'url' => $consult,
         'text' => 'Payroll allows no margin for error, as employees rightly expect to be paid correctly and on time. We manage the entire process, including pay runs, PAYE, Real Time Information submissions to HMRC and workplace pension contributions. Each cycle is verified and completed on schedule. This ensures your staff are paid accurately and on time.'],
        ['title' => 'VAT Outsourcing', 'img' => $img('uk/service-vat-b3d697.jpg'), 'url' => $consult,
         'text' => 'VAT is one of the more error-prone areas of UK tax, and mistakes can prove costly. We manage the process from calculation to submission, determining what is due, reconciling it against your records, and filing under Making Tax Digital ahead of the deadline. Every return is reviewed before it is submitted to HMRC. This removes a demanding recurring task and reduces the risk of penalties.'],
    ];

    // Figma me in cards ka text Australia wala tha (AASB / GST / ATO); UK ke hisab se likha gaya hai
    $clientCards = [
        ['title' => 'Outsourcing for UK Accounting Firms', 'img' => $img('uk/client-1-2a4bc9.jpg'),
         'button' => ['Explore Accounting Outsourcing', $uk('accounting-outsourcing-services')],
         'text' => 'For accounting practices, we operate as a discreet extension of your team, completing client work under your own brand. Our support covers client bookkeeping, accounts preparation, management accounts, tax preparation support, VAT, payroll, audit support and wider back-office accounting. All work is completed to your standards and returned ready for review, so your clients deal only with your firm.'],
        ['title' => 'Outsourcing for UK Businesses & SMEs', 'img' => $img('uk/client-2-372b2d.jpg'),
         'button' => ['Explore Small Business Accounting', $uk('small-business-accounting-services')],
         'text' => 'When finance administration draws your team away from running the business, outsourcing restores that focus. We manage bookkeeping, financial reporting, payroll, VAT, tax preparation, accounts payable and receivable, and management accounting, in whatever combination you require. The work is accurate, compliant and aligned with your operations. As an effective route to accounting outsourcing for UK SMEs, it provides the financial capability of a far larger organisation without the cost of building one in-house.'],
    ];

    $standards = [
        ['title' => 'UK GAAP & IFRS',
         'text' => 'Accurate reporting depends on applying the correct accounting framework. We prepare your accounts under UK GAAP and IFRS where applicable, ensuring each set is properly structured and ready for review, filing or audit. As these standards are updated, our team keeps pace, so your reporting remains up to date. You receive accurate, consistent financial statements that you and your stakeholders can depend on.'],
        ['title' => 'HMRC Requirements',
         'text' => 'Your obligations to HMRC are detailed and subject to frequent change, which makes them easy to fall behind on. We ensure every filing is accurate and submitted on time, across tax, payroll and VAT, so you remain compliant throughout the year. Our experts monitor the requirements relevant to your business, so nothing is missed. This removes a considerable source of risk from your operations.'],
        ['title' => 'VAT Compliance',
         'text' => 'VAT is governed by strict rules, and errors can carry real cost. We calculate your VAT accurately, reconcile it against your records, and ensure each return is prepared and submitted in line with current requirements. Every return is reviewed before it reaches HMRC. This maintains your compliance, reduces the risk of penalties, and removes a demanding recurring task from your team.'],
        ['title' => 'Making Tax Digital',
         'text' => 'Making Tax Digital has changed how UK businesses maintain records and submit returns. We ensure your processes meet MTD requirements, keeping digital records and filing through compatible software. This keeps you compliant with current rules and prepared for future changes. You benefit from a clear, digital-first approach to compliance without managing the detail yourself.'],
        ['title' => 'PAYE & Payroll',
         'text' => 'UK payroll obligations are strict and carry real consequences for errors. We manage PAYE, Real Time Information submissions to HMRC, workplace pensions and the associated reporting, processing each cycle accurately and on time. Your employees are paid correctly, and your business remains fully compliant. Managed properly in the background, payroll ceases to be a source of risk.'],
        ['title' => 'Companies House',
         'text' => 'UK companies hold ongoing obligations to Companies House, and missed deadlines result in penalties. We help you meet them, maintaining accurate records and preparing and filing the required accounts and returns on time. Nothing is left to the last minute, and nothing is overlooked. It is consistent support that keeps your company compliant and in good standing.'],
    ];

    $ind = fn ($name) => $img("common/industries/$name.svg");
    $industries = [
        [[$ind('accounting'), 'Accounting & Auditing Firms'], [$ind('professional-services'), 'Professional Services'], [$ind('construction'), 'Construction'], [$ind('real-estate'), 'Property & Real Estate']],
        [[$ind('ecommerce'), 'E-commerce'], [$ind('manufacturing'), 'Manufacturing'], [$ind('healthcare'), 'Healthcare'], [$ind('strata'), 'Technology']],
    ];

    $certs = [
        [$img('figma-footer-badges/iso-9001.png'), 'ISO 9001'],
        [$img('figma-footer-badges/iso-27001.png'), 'ISO 27001'],
        [$img('figma-footer-badges/gdpr.png'), 'GDPR'],
    ];

    $securityCards = [
        ['title' => 'Secure Data Handling', 'img' => $img('uk/security-1-5e658a.jpg'),
         'text' => 'Your financial information is stored and processed securely, with access limited to specialists working on your account. Strict procedures control how data is managed, retained and removed throughout the engagement. '],
        ['title' => 'Confidentiality & Privacy', 'img' => $img('uk/security-2-188afb.jpg'),
         'text' => 'Confidentiality underpins every engagement. Signed non-disclosure agreements and firm confidentiality practices protect your data and your clients\' information. Your information is never used beyond the engagement.'],
        ['title' => 'Quality & Process Controls', 'img' => $img('uk/security-3-7ba02f.jpg'),
         'text' => 'Every piece of work follows a defined process and review stage before reaching you. This helps identify and address errors early, maintaining accuracy even during periods of high volume. '],
        ['title' => 'Certified Security Standards', 'img' => $img('uk/security-1-5e658a.jpg'),
         'text' => 'Our practices align with recognised security standards and certifications for protecting, accessing and managing data. This provides independent assurance that your information is handled to a professional benchmark. '],
        ['title' => 'Secure Technology & Communication', 'img' => $img('uk/security-2-188afb.jpg'),
         'text' => 'We use secure, monitored systems and encrypted channels for files and communications. Access is tightly restricted, and confidential information is never sent through unsecured routes. '],
    ];

    // core team (Malay, Prithvi, Umesh) config/home.php se aati hai; yahan sirf UK ka member
    $team = [
        ['name' => 'Alisha Manchanda', 'role' => 'Operations - UK', 'image' => $img('common/team/alisha-manchanda.png')],
    ];

    // Figma me sirf pehle sawal ka answer tha (wo bhi Australia wala); answers page ke content se likhe gaye hain
    $faqs = [
        ['q' => 'Why do UK accounting firms outsource accounting work?',
         'a' => 'To increase capacity, manage busy periods such as year-end and self-assessment season, and take on additional clients without recruiting. Outsourcing provides skilled support under the firm\'s own brand, at a lower cost than hiring in-house.'],
        ['q' => 'What accounting functions can UK businesses outsource?',
         'a' => 'Most functions, including bookkeeping, payroll, VAT, tax preparation, financial reporting, and accounts payable and receivable. You can hand over one function alone or your whole finance operation.'],
        ['q' => 'Can PCS Global support UK accounting firms?',
         'a' => 'Yes. We act as an extension of your practice, managing client bookkeeping, accounts, tax, VAT, payroll and back-office work under your brand and to your standards.'],
        ['q' => 'Can I outsource bookkeeping for my UK business?',
         'a' => 'Yes. We keep your books accurate and up to date, recording and reconciling every transaction within the software you already use.'],
        ['q' => 'Can PCS Global work with our existing accounting software?',
         'a' => 'Yes. We operate from within the platforms you already use, such as Xero, QuickBooks and Sage, meaning there is no need to change your current systems.'],
        ['q' => 'How does PCS Global protect financial data?',
         'a' => 'We get to work on your data in our secure environment, with access levels controlled, confidentiality agreements in place and complying with recognised security standards.'],
        ['q' => 'Can I scale my outsourced accounting team?',
         'a' => 'Yes. Your team can expand as workloads increase and reduce as they ease, so your support consistently matches your requirements.'],
        ['q' => 'How does PCS Global work with UK clients?',
         'a' => 'The process is straightforward: we assess what you need, assign a dedicated team, work within your existing systems, manage the day-to-day, and adjust the level of support as your requirements change.'],
    ];

    
@endphp

{{-- Hero Dark --}}
@php
    $heroDarkFeatures = ['UK-focused accounting support', 'Experienced accounting professionals', 'UK GAAP & IFRS expertise', 'HMRC-compliant processes'];
@endphp
<section class="hero_dark">
    <img class="hero_dark_bg" src="{{ $img('common/hero-bg.png') }}" alt="" aria-hidden="true">
    <img class="hero_dark_person" src="{{ $img('uk/hero-person-5cb7ed.png') }}" alt="">
    <div class="container">
        <div class="hero_dark_content">
            <div class="hero_dark_text">
                <div>
                    <h1>Accounting Outsourcing Company for <span class="hero_dark_mark">UK Businesses &amp; Accounting Firms</span></h1>
                    <p class="hero_dark_para">PCS Global is a trusted accounting outsourcing company supporting businesses and accounting firms across the UK with accounting, bookkeeping, payroll, tax and VAT services. Our experienced professionals, efficient processes and scalable support help you reduce costs, maintain compliance and grow with confidence.</p>
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
                <a class="com_btn_outline com_btn_outline_light" href="tel:+441134034334">Talk to Our Expert
                    <img src="{{ asset('public/front/images/common/icon-phone.svg') }}" width="20" height="20" alt=""></a>
            </div>
        </div>
    </div>
</section>

{{-- Partner Stats --}}
@php
    $partnerStatsParagraphs = [
        'Selecting an outsourcing partner is not an easy decision, and the right choice becomes a team you can trust without close supervision. This is the standard PCS Global works for every UK business and firm it supports, acting as your UK accounting outsourcing partner rather than a supplier that requires managing.',
        'We provide outsourcing for UK accounting firms and prioritise skilled professionals and structured processes over sheer volume. For a growing number of UK firms, the decision to outsource accounting to India brings expert support and lowers overhead costs in a single step, and we make that move both simple and secure.',
        'What sets us apart from many accounting outsourcing firms in the UK is the depth of the working relationship, as we take the time to understand your business rather than simply process it. In practice, that means more capacity, reduced overheads and most importantly you get quality time to concentrate on growing your business.',
    ];
    $partnerStatsStats = [[60, 'Clients'], [800, 'Projects Completed'], [100, 'Combined Years of Team Experience']];
@endphp
<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('uk/partner-5a2efa.jpg') }}" loading="lazy" alt="Why Partner With PCS Global">
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
            <h2 class="mb-2 mb-xxl-4">Outsourcing Financial Services We Provide in the United Kingdom</h2>
            <p>When routine finance tasks take up more of your team's time than they should, outsourcing returns that time to higher-value work. PCS Global manages the full range of outsourced finance and accounting functions UK businesses and firms require, available as a single service or a complete solution.</p>
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
            <h2>Outsourcing Accounting Solutions for UK Businesses &amp; Firms</h2>
            <p>No two organisations manage their finances in precisely the same way, so a standardised package rarely suits. PCS Global structures its support around your specific circumstances, whether you operate an accounting practice or a growing business with distinct priorities.</p>
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
            <h2 class="mb-2 mb-xxl-4">UK Accounting Standards &amp; Compliance Expertise</h2>
            <p>UK compliance carries strict requirements, and errors can quickly become costly, so accuracy in this area is essential. Our teams understand UK regulations and prepare all work to the applicable standards, removing a significant concern from your operations.</p>
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img('uk/standards.jpg') }}" loading="lazy" alt="UK Accounting Standards &amp;amp; Compliance Expertise">
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
            <h2>Industries We Support Across the United Kingdom</h2>
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
    $processStepsSteps = config('home.process_steps');
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
            <h2 class="mb-2 mb-xxl-4">How Does PCS Global Work With UK Clients?</h2>
            <p>Beginning a partnership with PCS Global is a clear and structured process, designed to be simple and low-risk for you. Outsourcing accounting work to India is often assumed to be complex, yet our structured onboarding makes it straightforward and secure. In five stages, you move from a first conversation to a fully embedded team working alongside your own.</p>
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
            <p>PCS Global treats the security and confidentiality of your financial information as a fundamental part of our UK accounting outsourcing services. Your data is protected through secure systems, controlled access, strict processes and confidential communication. </p>
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
    $regionMapSize = [1189.58, 955.61];
    $regionMapMap = ['src' => $img('uk/map-uk.svg'), 'x' => 0, 'y' => 0, 'w' => 1189.58];
    $regionMapLogo = ['src' => $img('common/map-logo.svg'), 'x' => 470.79, 'y' => 126, 'w' => 248.21];
    $regionMapPhotos = [
        [$img('uk/city-leeds-15685b.png'), 563.79, 316, 182],
        [$img('uk/city-manchester-40651d.png'), 805.79, 342, 98],
        [$img('uk/city-liverpool-2001c9.png'), 495.79, 499, 175],
        [$img('uk/city-birmingham-2cb757.png'), 655.79, 640, 203],
        [$img('uk/city-london.png'), 772.79, 747, 248],
    ];
    $regionMapPins = [[720.31, 436.42, 25.96], [759.78, 529.42, 25.96], [644.81, 598.42, 25.96], [846.78, 664.42, 25.96], [882.5, 756.3, 25.96]];
    $regionMapLabels = [['Leeds', 713.79, 400], ['Manchester', 742.79, 493], ['Liverpool', 624.79, 562], ['Birmingham', 829.79, 628], ['London', 864.79, 719]];
    $regionMapLabel = ['font' => 18, 'py' => 7.13, 'px' => 20.2];
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
            <h2>PCS Global Serves Clients Across the United Kingdom</h2>
        </div>

        <div class="region_map" id="ukMap"
            style="max-width:{{ $maxW }}px;aspect-ratio:{{ $W }} / {{ $H }};--rm-w:{{ $W }};--rm-font:{{ $regionMapLabel['font'] }};--rm-py:{{ $regionMapLabel['py'] }};--rm-px:{{ $regionMapLabel['px'] }};--rm-land:{{ $regionMapMap['opacity'] ?? 1 }}">
            <img class="region_map_land" src="{{ $regionMapMap['src'] }}" style="left:{{ $x($regionMapMap['x']) }};top:{{ $y($regionMapMap['y']) }};width:{{ $x($regionMapMap['w']) }}" loading="lazy" alt="PCS Global Serves Clients Across the United Kingdom">
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
                <h2>Ready to Strengthen Your Accounting Support?</h2>
                <a class="com_btn_outline com_btn_outline_light"  href="tel:+441134034334" >
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
            <h2>Meet the PCS Global UK Team</h2>
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
        <h2 class="text-center">Trusted by UK Businesses &amp; Accountancy Firms</h2>
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
            <h2>What Our UK-Based Clients Say</h2>
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
            <h2>Insights for UK Accounting &amp; Businesses</h2>
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
            <h4 class="faq-head mb-2 mb-xxl-4">Frequently asked questions</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="fre_ques accordion" id="ukFaq">
                    @foreach ($faqListItems as $i => $item)
                        <div class="fre_que">
                            <h5 class="sub_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#ukFaq{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="ukFaq{{ $i }}">
                                {{ $item['q'] }}
                            </h5>
                            <div id="ukFaq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#ukFaq">
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
    $contactFormCities = ['London', 'Birmingham', 'Manchester', 'Leeds', 'Liverpool', 'Other'];
    $contactFormServices = array_column($serviceCards, 'title');
@endphp
<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>Ready to Build a Smarter Outsourcing Team?</h2>
            <p>Whether you need accounting, bookkeeping, tax, payroll, VAT or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.</p>
        </div>

        <form id="contactBandForm" class="validated-form contact_band_form" action="{{ route('request.store') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="country" value="United Kingdom">
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
        initialCountry: @json('gb'),
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

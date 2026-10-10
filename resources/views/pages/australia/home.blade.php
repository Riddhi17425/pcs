{{-- Australia home page (/aus). Controller: CountryHomeController@home (team / logos / blogs DB se: $ourexpert, $images, $blogs).
     Har section seedha Blade/HTML me likha hai (upar data ka PHP block, neeche markup); CSS: STRUCTURE.md ka section-table dekho.
     Text / images badalne ho to isi file me badlo. --}}
@extends('layouts.app', ['header_overlay' => true])

@section('content')
@php
    $img = fn ($file) => asset('public/front/images/' . $file);
    $au = fn ($path) => url('aus/' . $path);

    $serviceCards = [
        ['title' => 'Accounting Outsourcing', 'img' => $img('figma-precision/accounting-outsourcing.png'), 'url' => $au('bookkeeping-accounting-services'),
         'text' => 'Updating accurate accounts requires time and effort, which many teams cannot afford. We take care of reconciliations, ledgers, and month-end closing, ensuring you have the right visibility to your financial standing at a fraction of the cost. '],
        ['title' => 'Bookkeeping Outsourcing', 'img' => $img('figma-precision/bookkeeping-outsourcing-5d38e9.png'), 'url' => $au('bookkeeping-accounting-services'),
         'text' => 'Sound financial decisions require updated and accurate records. We record and reconcile every transaction, working within the software you already use. The result is precise, well-maintained books you can rely on throughout the year. '],
        ['title' => 'Tax Preparation Outsourcing', 'img' => $img('figma-precision/tax-preparation-outsourcing.png'), 'url' => $au('taxation-services'),
         'text' => 'Tax obligations place real demands on any business, particularly as deadlines approach. We prepare and review your returns in line with Australian Tax compliances, verify the details, and lodge them on time, reducing errors and missed deadlines. '],
        ['title' => 'BAS/IAS Return Services', 'img' => $img('figma-precision/bas-ias-return-services.png'), 'url' => $au('taxation-services'),
         'text' => 'Installment activity statements are a recurring obligation that leaves little room for error. We manage your Business and Instalment Activity Statements, calculating GST and PAYG, reconciling records, and lodging accurate statements on time without the recurring pressure. '],
        ['title' => 'Payroll Outsourcing', 'img' => $img('figma-precision/payroll-outsourcing.png'), 'url' => url('aus') . '#consultation',
         'text' => 'Payroll is among the most sensitive functions in any business, and accuracy is not optional. We manage pay runs, PAYG, superannuation, leave and Single Touch Payroll reporting to the ATO, ensuring employees are paid correctly and your business remains compliant.'],
        ['title' => 'Strata Management Services', 'img' => $img('figma-precision/strata-management-services-ae35ad.png'), 'url' => $au('strata-management'),
         'text' => 'Strata finances are detailed and heavily governed by deadlines. Our specialists manage the financial side of your schemes and portfolios, from budgets and levies through to invoicing and owner reporting, keeping records accurate and reporting clear. '],
    ];

    $clientSlides = [
        ['title' => 'Accounting & Finance Firms', 'img' => $img('figma-trust-slider/accounting-finance-firms.png'),
         'text' => 'We provide qualified accounting support under your own brand, helping you take on more clients and manage peak periods without immediate recruitment. Work is completed to your standards and returned ready for review, while your clients continue to see only your firm. '],
        ['title' => 'Small & Medium-Sized Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'We manage everyday accounting work, from bookkeeping and payroll to BAS and reporting, without the cost of a full-time in-house team. This gives your business the financial capability of a larger organisation while keeping overheads under control. '],
         ['title' => 'Growing Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'Rapid growth can quickly place pressure on your finance function as sales, staff and transaction volumes increase. We scale alongside your business, providing additional support when required so your finances never become a constraint on continued growth. '],
         ['title' => 'Professional Services Firms', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'We manage billing, payroll and compliance in the background, allowing your consultants and advisers to focus on client work. Your back office continues to operate accurately and reliably without taking valuable time away from the services that generate fees. '],
         ['title' => 'Strata & Property Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'Our specialists manage levy collection, scheme budgets and owner reporting with the accuracy required by strata and property businesses. You gain reliable strata accounting and clear financial records without diverting your team from managing properties. '],
         ['title' => 'Other Australian Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'Whatever your industry, we adapt to your existing processes, so there are no new systems to learn and no disruption to your operations. You may outsource a single function or your entire finance operation, according to your needs. It is flexible, scalable accounting support for Australian businesses of every size.'],
    ];

    $standards = [
        ['title' => 'Australian Accounting Standards',
         'text' => 'Financial statements must adhere to the correct standards to be both accurate and accepted. We prepare your accounts in accordance with AASB requirements, ensuring they are properly structured and ready for review, lodgement or audit. As the standards evolve, our team remains current, so your reporting never falls behind. '],
        ['title' => 'BAS & GST Support',
         'text' => 'Errors in GST and activity statements are easily made and can prove costly. We manage the process in full, calculating your GST on sales and purchases, reconciling it against your records, and lodging on time. Every statement is reviewed before it reaches the ATO. This removes a demanding recurring task and protects you from avoidable errors and penalties.'],
        ['title' => 'PAYG & Payroll Requirements',
         'text' => 'Australian payroll obligations are strict and allow little margin for error. We ensure every requirement is met, including PAYG withholding, superannuation, leave entitlements and Single Touch Payroll reporting to the ATO. Each pay cycle is processed accurately and on time. Your employees are paid correctly, and your business remains fully compliant.'],
        ['title' => 'ASIC Compliance Support',
         'text' => 'Meeting your ASIC obligations is essential to keeping your business in good standing, yet the deadlines are easily overlooked. We help you remain on top of them, from maintaining accurate records to lodging reports on time. Nothing is left to the last minute, and nothing is missed. It is consistent, year-round support that keeps your company compliant while you focus on running it.'],
        ['title' => 'Australian Tax Requirements',
         'text' => 'Accurate tax management protects your business on two fronts: it maintains compliance and ensures you pay no more than necessary. Our tax specialists prepare your returns in line with current Australian rules, apply the deductions to which you are entitled, and lodge on time. You remain fully compliant with the ATO while retaining more of what is yours. '],
        ['title' => 'Strata Accounting Requirements',
         'text' => 'Strata schemes are governed by their own financial rules, and discrepancies are quickly noticed by owners. We prepare strata accounts accurately, manage levy and fund records correctly, and produce reporting that satisfies every requirement. Owners, committees and managers receive a clear and reliable view of the finances. It is specialist support that keeps strata properties compliant and their records in order.'],
    ];

    $ind = fn ($name) => $img("common/industries/$name.svg");
    $industries = [
        [[$ind('accounting'), 'Accounting & Auditing'], [$ind('construction'), 'Construction'], [$ind('real-estate'), 'Real Estate & Property'], [$ind('strata'), 'Strata Management'], [$ind('manufacturing'), 'Manufacturing']],
        [[$ind('professional-services'), 'Professional Services'], [$ind('legal'), 'Legal Services'], [$ind('healthcare'), 'Healthcare'], [$ind('ecommerce'), 'E-commerce & Retail'], [$ind('professional-services'), 'Other relevant industries']],
    ];

    $processSteps = [
        ['title' => 'Discovery',
         'text' => 'We start by understanding your business, challenges, workload and the tasks you want us to handle. Based on your requirements, we identify where we can help and recommend the best way to work together.'],
        ['title' => 'Tailored Team',
         'text' => 'We assemble a qualified team with the skills required for your business and your specific needs. Your dedicated team gets to know your company, preferences and expectations, ensuring continuity, smoother delivery and less repeated instruction.'],
        ['title' => 'Workflow Integration',
         'text' => 'We fit into your existing ways of working, using the same software, file-sharing and reporting formats. Secure access, communication processes and work delivery are agreed upfront, making the transition smooth and straightforward.'],
        ['title' => 'Support',
         'text' => 'Once setup is complete, your team manages bookkeeping, payroll, tax and reporting accurately and on schedule. You retain full control while we handle the day-to-day workload and keep you informed of progress and upcoming requirements.'],
        ['title' => 'Review & Scale',
         'text' => 'As your requirements change, our support adapts with you. We regularly review the work to maintain quality and can scale support up during busy periods or reduce it when demand eases, keeping the partnership flexible as you grow.'],
    ];

    $certs = [
        [$img('figma-footer-badges/iso-9001.png'), 'ISO 9001'],
        [$img('figma-footer-badges/sca-vic-member.png'), 'Strata Community Association VIC'],
        [$img('figma-footer-badges/iso-27001.png'), 'ISO 27001'],
        [$img('figma-footer-badges/sca-wa-member.png'), 'Strata Community Association WA'],
        [$img('figma-footer-badges/gdpr.png'), 'GDPR'],
    ];

    $securityCards = [
        ['title' => 'Secure Data Handling', 'img' => $img('australia/security-1.jpg'),
         'text' => 'We protect your financial information at every stage using secure systems and controlled access. Only professionals assigned to your account can access your data. Clear procedures govern how information is handled, stored and disposed of, keeping it protected from beginning to end. '],
        ['title' => 'Confidentiality & Privacy', 'img' => $img('australia/security-2.jpg'),
         'text' => 'Discretion is central to how we work. Every engagement follows strict confidentiality practices and signed non-disclosure agreements to protect your information and that of your clients. Our involvement stays behind the scenes, safeguarding your reputation and client relationships. '],
        ['title' => 'Quality & Process Controls', 'img' => $img('australia/security-3.jpg'),
         'text' => 'Accuracy is built into every process. Tasks follow defined procedures and are reviewed before reaching you, allowing errors to be identified and corrected early. This maintains consistent quality even during high-volume periods, so you can use our work with confidence. '],
        ['title' => 'Certified Security Standards', 'img' => $img('australia/security-1.jpg'),
         'text' => 'We follow recognised security standards and certifications to ensure your data is protected, accessed and managed responsibly. This gives you confidence that your information is handled securely and professionally by a trusted outsourcing partner.'],
        ['title' => 'Secure Technology & Communication', 'img' => $img('australia/security-2.jpg'),
         'text' => 'We use secure, monitored systems and encrypted channels for files and communications. Sensitive information is never transmitted through unprotected means, while access to our systems is tightly controlled. This helps minimise everyday data risks and keeps your information secure.'],
    ];

    // core team (Malay, Prithvi, Umesh) config/home.php se aati hai; yahan sirf Australia ka member
    $team = [
        ['name' => 'Pratik Devmurari', 'role' => 'Operations - Australia', 'image' => $img('common/team/pratik-devmurari.png')],
    ];

    $testimonials = config('home.testimonials');

    $faqs = [
        ['q' => 'What services does PCS Global provide in Australia?',
         'a' => 'We provide accounting, bookkeeping, tax preparation, BAS and IAS returns, payroll and strata management, all delivered by a dedicated team that works as an extension of yours.'],
        ['q' => 'Does PCS Global provide accounting outsourcing in Australia?',
         'a' => 'Yes. We support Australian businesses and accounting firms with scalable outsourced accounting, tailored to your workload and prepared to Australian standards.'],
        ['q' => 'Does PCS Global work with Australian accounting firms?',
         'a' => 'Yes. Many of our clients are accounting and finance firms that rely on us to add capacity, manage busy periods, and take on more clients under their own brand.'],
        ['q' => 'Can PCS Global provide dedicated accounting professionals?',
         'a' => 'Yes. The same team will work on your business, developing an understanding and knowledge that grows as they get to know you.'],
        ['q' => 'Can I outsource only specific accounting processes?',
         'a' => 'Yes. You may outsource a single task, such as bookkeeping or payroll, or hand over your entire finance function, depending on your requirements.'],
        ['q' => 'Can outsourcing support scale as my business grows?',
         'a' => 'Yes. Our support adapts to your fluctuating workload, so you can increase your capacity when needed and scale down to meet quieter periods, all without trouble or delay.'],
         ['q' => 'How does PCS Global work with Australian businesses?',
         'a' => 'Our step-by-step process is: we get to know your needs, assemble a dedicated team, liaise with your systems, provide support, and adapt to your size.'],
         ['q' => 'How do I get started with PCS Global?',
         'a' => 'Simply book a free consultation. We will discuss your requirements and show you how the right outsourcing solution could work for your business.'],
    ];

    
@endphp

{{-- Hero Dark --}}
@php
    $heroDarkFeatures = ['Australian Accounting Expertise', 'Dedicated Professional Teams', 'Scalable Outsourcing Solutions', 'Secure & Confidential Delivery'];
@endphp
<section class="hero_dark">
    <img class="hero_dark_bg" src="{{ $img('common/hero-bg.png') }}" alt="" aria-hidden="true">
    <img class="hero_dark_person" src="{{ $img('australia/hero-person.png') }}" alt="">
    <div class="container">
        <div class="hero_dark_content">
            <div class="hero_dark_text">
                <div>
                    <h1>Accounting Outsourcing Company for <span class="hero_dark_mark">Australian Businesses &amp; Firms</span></h1>
                    <p class="hero_dark_para">PCS Global is an established services company supporting Australian businesses and accounting firms with reliable accounting, bookkeeping, tax, payroll, and financial support. Our dedicated team works as an extension of your team, helping you reduce costs, maintain compliance, and scale with confidence.</p>
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
                <a class="com_btn_outline com_btn_outline_light" href="tel:+61399980494">Talk to Our Expert
                    <img src="{{ asset('public/front/images/common/icon-phone.svg') }}" width="20" height="20" alt=""></a>
            </div>
        </div>
    </div>
</section>

{{-- Partner Stats --}}
@php
    $partnerStatsParagraphs = [
        'The right partner does more than just take care of your accounting. We work as an extension of your team, a partner you can count on without having to follow up consistently. We define our workflow to mirror yours which ensures consistency in project delivery. We provide seamless service delivery and strive to be a trusted accounting outsourcing partner.',
        'As an accounting and finance outsourcing company in Australia built on skilled professionals and disciplined processes, we deliver work you can rely on. For many Australian firms, accounting outsourcing to India has become an effective way to access talent pool and reduce overheads at once, and we make that transition skilled seamless and secured. The outcome is greater capacity, lower costs, and more time for your team to focus on growth.',
    ];
    $partnerStatsStats = [[60, 'Clients'], [800, 'Projects Completed'], [100, 'Combined Years of Team Experience']];
@endphp
<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('australia/partner.jpg') }}" loading="lazy" alt="Why Partner With PCS Global">
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
            <h2 class="mb-2 mb-xxl-4">Outsourcing Financial Services We Provide in Australia</h2>
            <p>When everyday accounting work takes up too much of your employees' time, support is what you need. PCS Global offers accounting services Australian businesses and practices depend on, from everyday accounting, bookkeeping to specialist compliance, available as individual services or a complete package. </p>
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
    $trustSliderSlides = $clientSlides;
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
<section class="trust_slider_sec mt-100">
    <div class="trust_slider_wrap">
        <div class="trust_slider_lt">
            <div class="trust_slider_head">
                <h2>Outsourcing Accounting Solutions for Australian Businesses & Firms</h2>
                <p>No two organisations operate the same way, so we tailor our accounting support to your structure, workload and objectives. We support australian businesses and firms with flexible, reliable accounting outsourcing solutions designed around their specific needs.</p>
            </div>
            <div class="trust_slider_arrows">
                <button type="button" class="trust_slider_arrow trust_slider_prev" aria-label="Previous">
                    <img src="{{ asset('public/front/images/figma-trust-slider/arrow-left.svg') }}" alt="">
                </button>
                <button type="button" class="trust_slider_arrow trust_slider_next" aria-label="Next">
                    <img src="{{ asset('public/front/images/figma-trust-slider/arrow-left.svg') }}" alt="">
                </button>
            </div>
        </div>

        <div class="trust_slider_rt">
            <div class="trust_slider_track" id="trustSliderTrack">
                @foreach ($trustSliderSlides as $slide)
                    {!! $card($slide) !!}
                @endforeach
            </div>

            <div class="trust_slider_progress" id="trustSliderProgress">
                @foreach ($trustSliderSlides as $i => $slide)
                    <button type="button" class="trust_slider_seg" aria-label="Go to card {{ $i + 1 }}"></button>
                @endforeach
            </div>
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
            <h2 class="mb-2 mb-xxl-4">Australian Accounting Standards &amp; Compliance Expertise</h2>
            <p>We understand Australian accounting is governed by strict regulations, and the consequences of non-compliance can be significant. Our teams are trained in Australian accounting rules and standards, ensuring your work is always prepared correctly. </p>
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img('australia/standards.jpg') }}" loading="lazy" alt="Australian Accounting Standards &amp;amp; Compliance Expertise">
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
            <h2>Industries We Support Across Australia</h2>
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
            <h2 class="mb-2 mb-xxl-4">How Does PCS Global Work With Australian Clients? </h2>
            <p>Working with PCS Global follows a clear, structured process designed to make accounting outsourcing simple and secure. These five steps take you from the initial discussion to a dedicated team working as an extension of your own. </p>
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
            <p>Entrusting your financial information to an external team is a significant decision. As an offshore accounting company trusted by Australian firms, we treat security and confidentiality as fundamental to how we operate. </p>
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
    $regionMapSize = [865.8, 661.17];
    $regionMapMap = ['src' => $img('australia/map-australia.svg'), 'x' => 0, 'y' => 0, 'w' => 786.63, 'opacity' => 0.7];
    $regionMapLogo = ['src' => $img('common/map-logo.svg'), 'x' => 282.84, 'y' => 159.78, 'w' => 248.21];
    $regionMapPhotos = [
        [$img('australia/city-5.png'), 601.96, 176.1, 216.13],
        [$img('australia/city-2.png'), -20.98, 247.8, 195.39],
        [$img('australia/city-3.png'), 359.57, 327.77, 178.31],
        [$img('australia/city-4.png'), 623.62, 342.36, 166],
        [$img('australia/city-1.png'), 479, 442.95, 151.54],
    ];
    $regionMapPins = [[475.76, 454.68, 25.96], [73.23, 397.8, 25.96], [730.24, 432.28, 25.96], [773.19, 312.05, 25.96], [541.45, 527.42, 25.96]];
    $regionMapLabels = [['Adelaide', 295.46, 434.04], ['Perth', 52.42, 427.39], ['Melbourne', 485.26, 560], ['Sydney', 710.02, 461.54], ['Brisbane', 756.2, 275.63]];
    $regionMapLabel = array (
    );
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
            <h2>PCS Global Serves Clients Across Australia</h2>
        </div>

        <div class="region_map" id="ausMap"
            style="max-width:{{ $maxW }}px;aspect-ratio:{{ $W }} / {{ $H }};--rm-w:{{ $W }};--rm-font:{{ $regionMapLabel['font'] }};--rm-py:{{ $regionMapLabel['py'] }};--rm-px:{{ $regionMapLabel['px'] }};--rm-land:{{ $regionMapMap['opacity'] ?? 1 }}">
            <img class="region_map_land" src="{{ $regionMapMap['src'] }}" style="left:{{ $x($regionMapMap['x']) }};top:{{ $y($regionMapMap['y']) }};width:{{ $x($regionMapMap['w']) }}" loading="lazy" alt="PCS Global Serves Clients Across Australia">
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
                <h2>Ready to Streamline Your Accounting work with PCS Global?</h2>
                <a class="com_btn_outline com_btn_outline_light"  href="tel:+61399980494" >
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
            <h2>Meet the PCS Global Australia Team</h2>
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
        <h2 class="text-center">Trusted by Australian Businesses &amp; Professional Firms</h2>
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
    $testimonialsItems = $testimonials;
@endphp
<section class="mt-80">
    <div class="container">
        <div class="mb-5 text-center">
            <h2>What Our Aussie Clients Say</h2>
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
            <h2>Insights for Australian Accounting &amp; Business</h2>
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
                <div class="fre_ques accordion" id="ausFaq">
                    @foreach ($faqListItems as $i => $item)
                        <div class="fre_que">
                            <h5 class="sub_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#ausFaq{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="ausFaq{{ $i }}">
                                {{ $item['q'] }}
                            </h5>
                            <div id="ausFaq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#ausFaq">
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
    $contactFormCities = ['Sydney', 'Melbourne', 'Brisbane', 'Perth', 'Adelaide', 'Other'];
    $contactFormServices = array_column($serviceCards, 'title');
@endphp
<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>Ready to Scale With the Right Outsourcing Support?</h2>
            <p>Whether you need accounting, bookkeeping, tax, payroll, strata management or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.</p>
        </div>

        <form id="contactBandForm" class="validated-form contact_band_form" action="{{ route('request.store') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="country" value="Australia">
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
        initialCountry: @json('au'),
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

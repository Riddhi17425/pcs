@extends('layouts.app', [
    'og_image' => asset('public/front/images/hero_img.png')
])

@section('content')

<section>
    <div class="container-fluid px-0 overflow-hidden">
        <div class="hero">
            <div class="hero_lt">
                <div class="hero_lt_top">
                  <h1 class="hero_head">Powered by <span><img class="hero_gif" src="{{asset('public/front/images/pcs_hero.gif')}}"
                                alt="" aria-hidden="true"></span>
                        Accuracy ! <br /> Backed by Expertise</h1>

                    <p class="hero_para">Your Overseas Partners  <br/> For Workforce Solutions</p>
                </div>

                <p class="hero_lt_Ser">Our Services</p>
                <div class="hero_lt_bot">
                    <p> <span><img src="{{asset('public/front/images/hero-dot.svg')}}" loading="lazy" alt="dot" height="16px" width="16px"></span> <span> Accounting And Finance</span></p>
                    <p> <span><img src="{{asset('public/front/images/hero-dot.svg')}}" loading="lazy" alt="dot" height="16px" width="16px"></span><span> Strata Management</span></p>
                    <p> <span><img src="{{asset('public/front/images/hero-dot.svg')}}" loading="lazy" alt="dot" height="16px" width="16px"></span> <span>Payroll and Taxation</span></p>
                    <p> <span><img src="{{asset('public/front/images/hero-dot.svg')}}" loading="lazy" alt="dot" height="16px" width="16px"></span> <span>IT Automation</span></p>
                </div>

                <div class="hero_btn">
                    {{-- AU / US / UK hero jaise do buttons (common/buttons.css) --}}
                    <a class="com_btn2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Book a Free Consultation</a>
                    <a class="com_btn_outline com_btn_outline_light" href="tel:+917968260121">Talk to Our Expert
                        <img src="{{ asset('public/front/images/common/icon-phone.svg') }}" width="20" height="20" alt=""></a>
                </div>

            </div>

            <div class="hero_rt">
                <video autoplay muted loop playsinline preload="metadata" poster="{{ asset('public/front/images/hero_img.png') }}">
                    <source src="{{asset('public/front/images/hero-video5.mp4')}}" type="video/mp4">
                </video>
            </div>
        </div>

    </div>
</section>


<!-- Clients -->

<section class="clients mt-100">
    <div class="container">
        <h2 class="text-center">Trusted By</h2>
    </div>
    <div class="client_slider_full">
        <div class="client_slider">
           @foreach($images as $image)
                <div>
                    <img class="img-fluid"
                         src="{{ asset('/'.$image->image) }}"
                          loading="lazy"
                         alt="{{ $client->name ?? 'client' }}">
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Comprehensive Business  -->

<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Comprehensive Business <br /> Management & Consulting Solutions</h2>
            <p>At PCS Global, we deliver expert consulting services that are strategically designed to help your organization navigate challenges,
                    enhance performance and build long-term resilience. Our team offers objective insights, customized strategies and practical solutions.
                    Taking a holistic approach, we help businesses address their day-to-day operational needs, as well as complex business issues, with precision, professionalism, and care. </p>
        </div>

        <div class="precision_grid">
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/accounting-outsourcing.png') }}" loading="lazy" alt="Accounting Outsourcing">
                </div>
                <div class="precision_card_body">
                    <h3>Accounting Outsourcing</h3>
                    <p>Running and maintaining real-time, accurate accounts requires time and effort, which many teams cannot afford. We take care of all of this for you: reconciliations, ledgers, month-end closing, all fast and accurate so you know exactly where you stand at all times, at a fraction of the cost of having your own team do it.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/bookkeeping-outsourcing-5d38e9.png') }}" loading="lazy" alt="Bookkeeping Outsourcing">
                </div>
                <div class="precision_card_body">
                    <h3>Bookkeeping Outsourcing</h3>
                    <p>Sound financial decisions require updated and accurate records. We record and reconcile every transaction the moment it occurs - you never get caught out or have doubts about the figures. We work within the software you already use, so your systems remain unchanged. The result is precise, well-maintained books you can rely on throughout the year.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/tax-preparation-outsourcing.png') }}" loading="lazy" alt="Tax Preparation Outsourcing">
                </div>
                <div class="precision_card_body">
                    <h3>Tax Preparation Outsourcing</h3>
                    <p>Tax obligations place real demands on any business, particularly as deadlines approach. We prepare and review your returns in line with Australian requirements, verify the details, and lodge them on time. Our specialists remain updated with the rules that apply to your business, reducing errors and preventing missed deadlines. You receive accurate, compliant returns without the pressure.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/bas-ias-return-services.png') }}" loading="lazy" alt="BAS/IAS Return Services">
                </div>
                <div class="precision_card_body">
                    <h3>BAS/IAS Return Services</h3>
                    <p>Activity statements are a recurring obligation that leaves little room for error. We manage your Business and Instalment Activity Statements in full, calculating your GST and PAYG, reconciling them against your records, and lodging ahead of the deadline. Every statement is reviewed before submission. The result is accurate statements, lodged on time, without the recurring pressure on your team.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/payroll-outsourcing.png') }}" loading="lazy" alt="Payroll Outsourcing">
                </div>
                <div class="precision_card_body">
                    <h3>Payroll Outsourcing</h3>
                    <p>Payroll is among the most sensitive functions in any business, and accuracy is not optional. We manage the entire process, including pay runs, PAYG, superannuation, leave and Single Touch Payroll reporting to the ATO. Each cycle is calculated carefully and processed on schedule. Your employees are paid correctly, and your business remains compliant, without the administrative burden falling on you.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/strata-management-services-ae35ad.png') }}" loading="lazy" alt="Strata Management Services">
                </div>
                <div class="precision_card_body">
                    <h3>Strata Management Services</h3>
                    <p>Strata finances are detailed and heavily governed by deadlines. Our specialists manage the financial side of your schemes and portfolios, from budgets and levies through to invoicing and owner reporting. Records are kept accurate, and reporting remains clear, so owners and committees always have a clear view of the finances.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who are we? -->
<section class="mt-100">
    <div class="container">
        <div class="row gy-5 gy-lg-0 justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{asset('public/front/images/who-are-we.png')}}" loading="lazy" alt="Why Partner With PCS Global">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="counter_lt">
                    <h2 class="mb-3 mb-xxl-4">Why Partner With PCS Global?</h2>
                    <p>The right partner does more than just take care of your accounting. They're an extension of your team, someone you can count on without having to follow up consistently. That's the quality PCS Global brings to every Australian business and accounting firm we serve - functioning as an authentic accounting outsourcing partner.</p>
                    <p>As a finance and outsourcing accounting company in Australia built on skilled professionals and disciplined processes, we deliver work you can rely on. For many Australian firms, accounting outsourcing to India has become an effective way to access expertise and reduce overheads at once, and we make that transition straightforward and secure. The outcome is greater capacity, lower costs, and more time for your team to focus on growth.</p>
                </div>

                <div class="counter partner_stats">
                    <div class="counter_line partner_stats_line">
                        <h3 data-count="60">60+</h3>
                        <h5>Happy Clients</h5>
                    </div>

                    <div class="counter_line partner_stats_line">
                        <h3 data-count="100">100+</h3>
                        <h5>Years of Team Experience</h5>
                    </div>

                    <div class="counter_line partner_stats_line">
                        <h3 data-count="800">800+</h3>
                        <h5>Projects Completed</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trust_slider_sec mt-100">
    <div class="trust_slider_wrap">
        <div class="trust_slider_lt">
            <div class="trust_slider_head">
                <h2>Outsourcing Accounting Solutions for Australian Businesses & Firms</h2>
                <p>No two organisations operate in exactly the same way, so we do not apply a standard template. As an experienced accounting outsourcing firm, PCS Global tailors its support to your structure, your workload and your objectives. The following are the clients we most commonly support.</p>
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
                <div class="trust_slide">
                    <div class="trust_slide_img">
                        <img src="{{ asset('public/front/images/figma-trust-slider/accounting-finance-firms.png') }}" loading="lazy" alt="Accounting & Finance Firms">
                    </div>
                    <div class="trust_slide_body">
                        <h3>Accounting & Finance Firms</h3>
                        <p>Declining work because your team has reached capacity is a costly constraint. We provide qualified support that operates discreetly under your own brand, enabling you to take on more clients and manage peak periods without immediate recruitment. All work is completed to your standards and returned ready for review. Your clients see only your firm, while you gain the capacity to grow.</p>
                    </div>
                </div>
                <div class="trust_slide">
                    <div class="trust_slide_img">
                        <img src="{{ asset('public/front/images/figma-trust-slider/small-medium-businesses.png') }}" loading="lazy" alt="Small & Medium-Sized Businesses">
                    </div>
                    <div class="trust_slide_body">
                        <h3>Small & Medium-Sized Businesses</h3>
                        <p>Many small and medium businesses require a complete finance function but cannot justify the cost of an in-house team. This is precisely where we add value. We manage the full scope of everyday work, from bookkeeping and payroll to BAS and reporting, at a fraction of the cost of employing staff. It provides your business with the financial capability of a far larger organisation, without the overheads.</p>
                    </div>
                </div>
                <div class="trust_slide">
                    <div class="trust_slide_img">
                        <img src="{{ asset('public/front/images/trust_bg.png') }}" loading="lazy" alt="Research & Analysis">
                    </div>
                    <div class="trust_slide_body">
                        <h3>Research & Analysis</h3>
                        <p>Our analysts deliver data-driven insights that help unlock new opportunities for your business to grow. From market trends to operational metrics, we help you stay ahead by gaining clarity and reducing risks.</p>
                    </div>
                </div>
                <div class="trust_slide">
                    <div class="trust_slide_img">
                        <img src="{{ asset('public/front/images/trust_bg2.png') }}" loading="lazy" alt="Tech-Powered Solutions">
                    </div>
                    <div class="trust_slide_body">
                        <h3>Tech-Powered Solutions</h3>
                        <p>Organize operations and boost productivity by integrating advanced technologies, such as automation, cloud tools, and custom development. Utilizing tech strategically to maximize ROI is what we strive for.</p>
                    </div>
                </div>
                <div class="trust_slide">
                    <div class="trust_slide_img">
                        <img src="{{ asset('public/front/images/trust_bg3.png') }}" loading="lazy" alt="Available 24×7">
                    </div>
                    <div class="trust_slide_body">
                        <h3>Available 24×7</h3>
                        <p>To ensure reliability and responsiveness, our global support team is available 24/7 to address any queries that may arise, regardless of the time or location.</p>
                    </div>
                </div>
            </div>

            <div class="trust_slider_progress" id="trustSliderProgress">
                <span class="trust_slider_seg"></span>
                <span class="trust_slider_seg"></span>
                <span class="trust_slider_seg"></span>
                <span class="trust_slider_seg"></span>
                <span class="trust_slider_seg"></span>
                <span class="trust_slider_seg"></span>
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

    function updateProgress() {
        const maxScroll = track.scrollWidth - track.clientWidth;
        const ratio = maxScroll > 0 ? track.scrollLeft / maxScroll : 0;
        const activeIndex = Math.min(segs.length - 1, Math.round(ratio * (segs.length - 1)));
        segs.forEach((seg, i) => seg.classList.toggle('active', i === activeIndex));
    }

    function scrollByCard(direction) {
        const card = track.querySelector('.trust_slide');
        if (!card) return;
        const gap = parseFloat(getComputedStyle(track).gap) || 0;
        track.scrollBy({ left: direction * (card.offsetWidth + gap), behavior: 'smooth' });
    }

    prevBtn && prevBtn.addEventListener('click', () => scrollByCard(-1));
    nextBtn && nextBtn.addEventListener('click', () => scrollByCard(1));
    track.addEventListener('scroll', updateProgress);
    updateProgress();
});
</script>


<!-- Industries -->

<!-- global_exp -->
@include('partials.india.industries-card')

{{--
<section class="mt-100" >
    <div class="container">
        <div class="">
             <div class="com_sec_head_top">
                <h4 class="faq-head mb-2 mb-xxl-4">Accounting & Finance Roles We Provide At PCS Global</h4>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class=" text-center">
                        <img class=" img-fluid" src="{{ asset('public/front/images/accounting-finance-global.png') }}" loading="lazy" alt="outsourcing-services">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 procure_pay_bor">
                     <ol class="decimal_style_item">
                        <li class="decimal_style">
                          <span class="role-title">CFO</span>
                          <ul>
                            <li>Shapes financial strategy to drive company growth.</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">Bookkeeper</span>
                          <ul>
                            <li>Records daily transactions and keeps accounts organized.</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">Accounts Payable Specialist</span>
                          <ul>
                            <li>Manages outgoing payments to suppliers.</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">Accounts Receivable Specialist</span>
                          <ul>
                            <li>Tracks and collects payments from customers.</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">Payroll Specialist</span>
                          <ul>
                            <li>Prepares salaries, benefits, and tax deductions</li>
                          </ul>
                        </li>
                   </ol>
                </div>

                <div class="col-lg-4 procure_pay_bor">
                     <ol class="decimal_style_item" start="6">
                        <li class="decimal_style">
                          <span class="role-title">Staff Accountant</span>
                          <ul>
                            <li>Handles the general ledger and month-end close tasks.</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">Cost Accountant</span>
                          <ul>
                            <li>Analyzes product costs for pricing and profitability.</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">Financial Analyst</span>
                          <ul>
                            <li>Prepares forecasts, budgets, and performance analysis.</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">FP&A Analyst</span>
                          <ul>
                            <li>Guides decision-making with forward-looking insights.</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">Audit Support</span>
                          <ul>
                            <li>Reviews financial statements for accuracy and compliance.</li>
                          </ul>
                        </li>
                   </ol>
                </div>

                <div class="col-lg-4 procure_pay_bor">

                     <ol class="decimal_style_item" start="11">
                        <li class="decimal_style">
                          <span class="role-title">Tax Accountant</span>
                          <ul>
                            <li>Assists in preparation of tax returns and ensures legal compliance</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">Management Accountant</span>
                          <ul>
                            <li>Supports business strategy with financial data.</li>
                          </ul>
                        </li>
                        <!--<li class="decimal_style">-->
                        <!--  <span class="role-title">Treasury Analyst</span>-->
                        <!--  <ul>-->
                        <!--    <li>Manages cash flow, liquidity, and investments.</li>-->
                        <!--  </ul>-->
                        <!--</li>-->
                        <li class="decimal_style">
                          <span class="role-title">Controller</span>
                          <ul>
                            <li>Oversees accounting operations and financial reporting.</li>
                          </ul>
                        </li>
                        <li class="decimal_style">
                          <span class="role-title">Finance Manager</span>
                          <ul>
                            <li>Leads planning, budgeting, and performance tracking.</li>
                          </ul>
                        </li>
                   </ol>

                </div>
            </div>
        </div>
    </div>

</section>
--}}

<!-- How Does PCS Global Work With Australia Clients -->
{{-- How does PCS Global work: section, CSS style.css .process_* --}}
@php
    $processSteps = [
        ['title' => 'Understand Your Requirements',
         'text' => 'Every engagement opens with a discussion. Our priority is to learn how your business runs, which areas are under most pressure, and the responsibilities you would prefer to pass on. With that understanding, we can pinpoint the work to take on and the best way to sit alongside your team.'],
        ['title' => 'Build Your Team',
         'text' => 'The initial interview is usually a video call with a People & Culture colleague. We take the time for us to get to know each other and get a first impression. We will naturally answer your questions about us and the position you are applying for so you have a clear picture of your role with us.'],
        ['title' => 'Integrate With Your Workflow',
         'text' => 'We then integrate with your established working methods. We work directly in the accounting software, file-sharing tools, and reporting formats already in place, so your team adopts nothing new. We arrange secure access and confirm how we will communicate and exchange work.'],
    ];
@endphp
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
            <h2 class="mb-2 mb-xxl-4">How Does PCS Global Work With Australia Clients?</h2>
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

<script>
document.addEventListener("DOMContentLoaded", () => {
    const slider = document.getElementById('processSteps');
    if (!slider) return;

    let isDown = false;
    let startX;
    let scrollLeft;
    let moved = false;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        moved = false;
        slider.classList.add('dragging');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('dragging');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('dragging');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = x - startX;
        if (Math.abs(walk) > 5) moved = true;
        slider.scrollLeft = scrollLeft - walk;
    });

    // Prevent link/card click firing right after a drag
    slider.addEventListener('click', (e) => {
        if (moved) {
            e.preventDefault();
            e.stopPropagation();
        }
    }, true);
});
</script>

<!-- Certifications / Tools & Technology tabs -->

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
                <span class="cert_badge"><img src="{{ asset('public/front/images/figma-footer-badges/iso-9001.png') }}" alt="ISO 9001" loading="lazy"></span>
                <span class="cert_badge"><img src="{{ asset('public/front/images/figma-footer-badges/sca-vic-member.png') }}" alt="Strata Community Association VIC" loading="lazy"></span>
                <span class="cert_badge"><img src="{{ asset('public/front/images/figma-footer-badges/iso-27001.png') }}" alt="ISO 27001" loading="lazy"></span>
                <span class="cert_badge"><img src="{{ asset('public/front/images/figma-footer-badges/sca-wa-member.png') }}" alt="Strata Community Association WA" loading="lazy"></span>
                <span class="cert_badge"><img src="{{ asset('public/front/images/figma-footer-badges/gdpr.png') }}" alt="GDPR" loading="lazy"></span>
            </div>
        </div>
    </div>

    <div class="cert_tools_panel" data-panel="tools">
    <div class="client_slider_full">
        <div class="client_slider">

                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_01.png') }}"
                                  loading="lazy"
                                 alt="Homepage_01">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_02.png') }}"
                                  loading="lazy"
                                 alt="Homepage_02">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_03.png') }}"
                                  loading="lazy"
                                 alt="Homepage_03">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_04.png') }}"
                                  loading="lazy"
                                 alt="Homepage_04">
                        </div>
                         <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_05.png') }}"
                                  loading="lazy"
                                 alt="Homepage_05">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_06.png') }}"
                                  loading="lazy"
                                 alt="Homepage_06">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_07.png') }}"
                                  loading="lazy"
                                 alt="Homepage_07">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_08.png') }}"
                                  loading="lazy"
                                 alt="Homepage_08">
                        </div>
                         <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_09.png') }}"
                                  loading="lazy"
                                 alt="Homepage_09">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_10.png') }}"
                                  loading="lazy"
                                 alt="Homepage_10">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_11.png') }}"
                                  loading="lazy"
                                 alt="Homepage_11">
                        </div>
                         <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_12.png') }}"
                                  loading="lazy"
                                 alt="Homepage_12">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_13.png') }}"
                                  loading="lazy"
                                 alt="Homepage_13">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_14.png') }}"
                                  loading="lazy"
                                 alt="Homepage_14">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_15.png') }}"
                                  loading="lazy"
                                 alt="Homepage_15">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_16.png') }}"
                                  loading="lazy"
                                 alt="Homepage_16">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_17.png') }}"
                                  loading="lazy"
                                 alt="Homepage_17">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_18.png') }}"
                                  loading="lazy"
                                 alt="Homepage_18">
                        </div>
                          <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_19.png') }}"
                                  loading="lazy"
                                 alt="Homepage_19">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_20.png') }}"
                                  loading="lazy"
                                 alt="Homepage_20">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_21.png') }}"
                                  loading="lazy"
                                 alt="Homepage_21">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_22.png') }}"
                                  loading="lazy"
                                 alt="Homepage_22">
                        </div>
                         <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_23.png') }}"
                                  loading="lazy"
                                 alt="Homepage_23">
                        </div>
                         <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_24.png') }}"
                                  loading="lazy"
                                 alt="Homepage_24">
                        </div>
                         <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_25.png') }}"
                                  loading="lazy"
                                 alt="Homepage_25">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_26.png') }}"
                                  loading="lazy"
                                 alt="Homepage_26">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_27.png') }}"
                                  loading="lazy"
                                 alt="Homepage_27">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_28.png') }}"
                                  loading="lazy"
                                 alt="Homepage_28">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/Homepage_29.png') }}"
                                  loading="lazy"
                                 alt="Homepage_29">
                        </div>
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

<!-- home - map -->
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Our Global Reach</h2>
        </div>
        <div class="maps_gif">
            <img class="img-fluid" src="{{asset('public/front/images/MAP.gif')}}" alt="maps" loading="lazy">
        </div>
    </div>
</section>


<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>Ready to streamline your business processes with global expertise?</h2>


                                 <a class="com_btn1 color-animated-button bubble-btn" href="{{ route('contact') }}"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                                <!-- Bubble effect layers -->
                                <span class="color-button__background"></span>
                                <span class="color-button__bubble-container">
                                    <span class="color-button__bubble"></span>
                                </span>

                                <!-- Label and Icon -->
                                <span class="color-button__label relative z-10 will-change-transform me-2">Book a Free Consultation</span>
                                
                            </a>
                    </div>
                </div>
                <div class="col-lg-5 mt-4">
                    <div>
                        <img class="img-fluid" src="{{asset('public/front/images/coman_tree1.png')}}"  loading="lazy" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Experts -->

<section class="our_experts mt-100 ">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Meet Our Experts</h2>
        </div>

        <div class="our_experts_cen">
            <div class="experts_slider team-slider">
               @foreach($ourexpert as $expert)
                    <div class="experts_card team-card">
                        <img class="img-fluid" src="{{ asset('/'.$expert->image) }}"  loading="lazy" alt="{{ $expert->name ?? 'expert'}}">
                        <div class="experts_card_bt">
                            <h4 class="sub_head">{{ $expert->name }}</h4>
                            <p class="mb-0">{{ $expert->designation }}</p>
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
             <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                        <path d="M1 6.32861L6 11.3286M1 6.32861L6 1.32861M1 6.32861H19" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
        </span>
        <span class="arrow-next slider1-next">
             <svg width="20" height="13" viewBox="0 0 20 13" fill="none"-->
                       xmlns="http://www.w3.org/2000/svg">-->
                    <path d="M19 6.32861L14 11.3286M19 6.32861L14 1.32861M19 6.32861H1" stroke="white"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
        </span>
    </div>
</div>

    </div>
</section>

<!-- Insights -->

<section class="card_main mt-100 ">
    <div class="container">

        <div class="com_sec_head_top">
            <h2>Insights That Drive Smarter Business Decisions</h2>
        </div>
        <div class="row g-4 g-xl-5">
        @foreach ($blogs->take(3) as $blog)
            <div class="col-sm-6 col-lg-4">
                <div class="blog-img-home">
                    <img class="img-fluid" src="{{asset('/'.$blog->front_image)}}" alt="image" loading="lazy">
                </div>
                <div class="ins_card">
                    <p>{{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}</p>
                    <a href="{{ route('blogs.detail', $blog->url) }}"><h4 class="sub_head">{{$blog->title}}</h4></a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
{{-- Testimonials: AU / US / UK jaisa common section, content config/home.php ('testimonials') se --}}
{{-- Testimonials --}}
@php
    $testimonialsItems = config('home.testimonials');
@endphp
<section class="mt-80">
    <div class="container">
        <div class="mb-5 text-center">
            <h2>Voices from Across the Globe</h2>
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

{{-- Contact form: AU / US / UK jaisa common form (css/common/contact-form.css) --}}
{{-- Contact Form --}}
@php
    $contactFormCities = ['Ahmedabad', 'Mumbai', 'Delhi', 'Bengaluru', 'Pune', 'Other'];
    $contactFormServices = ['Accounting & Bookkeeping', 'Strata Property Management', 'Payroll Outsourcing Services', 'Taxation Services', 'Recruitment Outsourcing Services', 'IT Automation Services'];
@endphp
<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>Ready to Build a Smarter Outsourcing Team?</h2>
            <p>Whether you need accounting, bookkeeping, tax, payroll, strata management or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.</p>
        </div>

        <form id="contactBandForm" class="validated-form contact_band_form" action="{{ route('request.store') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="country" value="India">
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
        initialCountry: @json('in'),
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

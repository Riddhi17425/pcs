@include('countries.india.layouts.frontheader', [
    'og_image' => asset('public/front/images/hero_img.png')
])

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
                    <a class="com_btn2 color-animated-button bubble-btn" href="{{ route('contact') }}"
                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                        <!-- Bubble effect layers -->
                        <span class="color-button__background"></span>
                        <span class="color-button__bubble-container">
                            <span class="color-button__bubble"></span>
                        </span>

                        <!-- Label and Icon -->
                        <span class="color-button__label relative z-10 will-change-transform me-2">Request A
                            Call</span>
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.51089 1L6.15002 1.13169C6.91653 1.15942 7.59676 1.64346 7.89053 2.3702L8.96656 5.03213C9.217 5.65159 9.1496 6.35837 8.78693 6.91634L7.40831 9.0375C8.22454 10.2096 10.4447 12.9558 12.7955 14.5633L14.5484 13.4845C14.9939 13.2103 15.5273 13.1289 16.0314 13.2581L19.5161 14.1517C20.4429 14.3894 21.0674 15.2782 20.9942 16.2552L20.7705 19.2385C20.6919 20.2854 19.8351 21.1069 18.818 20.9887C5.39245 19.4276 -2.48056 0.99997 2.51089 1Z" stroke="#182653" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </a>
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
            <a href="{{ route('pcs.global.bookkeeping') }}" class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/accounting-outsourcing.png') }}" loading="lazy" alt="Accounting Outsourcing">
                </div>
                <span class="precision_card_arrow">
                    <img src="{{ asset('public/front/images/figma-precision/precision-arrow.svg') }}" alt="">
                </span>
                <div class="precision_card_body">
                    <h3>Accounting Outsourcing</h3>
                    <p>Running and maintaining real-time, accurate accounts requires time and effort, which many teams cannot afford. We take care of all of this for you: reconciliations, ledgers, month-end closing, all fast and accurate so you know exactly where you stand at all times, at a fraction of the cost of having your own team do it.</p>
                </div>
            </a>
            <a href="{{ route('pcs.global.bookkeeping') }}" class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/bookkeeping-outsourcing-5d38e9.png') }}" loading="lazy" alt="Bookkeeping Outsourcing">
                </div>
                <span class="precision_card_arrow">
                    <img src="{{ asset('public/front/images/figma-precision/precision-arrow.svg') }}" alt="">
                </span>
                <div class="precision_card_body">
                    <h3>Bookkeeping Outsourcing</h3>
                    <p>Sound financial decisions require updated and accurate records. We record and reconcile every transaction the moment it occurs - you never get caught out or have doubts about the figures. We work within the software you already use, so your systems remain unchanged. The result is precise, well-maintained books you can rely on throughout the year.</p>
                </div>
            </a>
            <a href="{{ route('taxation.services') }}" class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/tax-preparation-outsourcing.png') }}" loading="lazy" alt="Tax Preparation Outsourcing">
                </div>
                <span class="precision_card_arrow">
                    <img src="{{ asset('public/front/images/figma-precision/precision-arrow.svg') }}" alt="">
                </span>
                <div class="precision_card_body">
                    <h3>Tax Preparation Outsourcing</h3>
                    <p>Tax obligations place real demands on any business, particularly as deadlines approach. We prepare and review your returns in line with Australian requirements, verify the details, and lodge them on time. Our specialists remain updated with the rules that apply to your business, reducing errors and preventing missed deadlines. You receive accurate, compliant returns without the pressure.</p>
                </div>
            </a>
            <a href="{{ route('taxation.services') }}" class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/bas-ias-return-services.png') }}" loading="lazy" alt="BAS/IAS Return Services">
                </div>
                <span class="precision_card_arrow">
                    <img src="{{ asset('public/front/images/figma-precision/precision-arrow.svg') }}" alt="">
                </span>
                <div class="precision_card_body">
                    <h3>BAS/IAS Return Services</h3>
                    <p>Activity statements are a recurring obligation that leaves little room for error. We manage your Business and Instalment Activity Statements in full, calculating your GST and PAYG, reconciling them against your records, and lodging ahead of the deadline. Every statement is reviewed before submission. The result is accurate statements, lodged on time, without the recurring pressure on your team.</p>
                </div>
            </a>
            <a href="{{ route('payroll-outsourcing-services') }}" class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/payroll-outsourcing.png') }}" loading="lazy" alt="Payroll Outsourcing">
                </div>
                <span class="precision_card_arrow">
                    <img src="{{ asset('public/front/images/figma-precision/precision-arrow.svg') }}" alt="">
                </span>
                <div class="precision_card_body">
                    <h3>Payroll Outsourcing</h3>
                    <p>Payroll is among the most sensitive functions in any business, and accuracy is not optional. We manage the entire process, including pay runs, PAYG, superannuation, leave and Single Touch Payroll reporting to the ATO. Each cycle is calculated carefully and processed on schedule. Your employees are paid correctly, and your business remains compliant, without the administrative burden falling on you.</p>
                </div>
            </a>
            <a href="{{ route('strata.management') }}" class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/figma-precision/strata-management-services-ae35ad.png') }}" loading="lazy" alt="Strata Management Services">
                </div>
                <span class="precision_card_arrow">
                    <img src="{{ asset('public/front/images/figma-precision/precision-arrow.svg') }}" alt="">
                </span>
                <div class="precision_card_body">
                    <h3>Strata Management Services</h3>
                    <p>Strata finances are detailed and heavily governed by deadlines. Our specialists manage the financial side of your schemes and portfolios, from budgets and levies through to invoicing and owner reporting. Records are kept accurate, and reporting remains clear, so owners and committees always have a clear view of the finances.</p>
                </div>
            </a>
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
                    <div class="trust_slide_img trust_slide_img_certificate">
                        <img src="{{ asset('public/front/images/certificate.png') }}" loading="lazy" alt="Our Certifications">
                    </div>
                    <div class="trust_slide_body">
                        <h3>Our Certifications</h3>
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
@include('components.Industries-card')

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
<section class="process_sec mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">How Does PCS Global Work With Australia Clients?</h2>
            <p>Beginning a partnership with PCS Global is a clear and structured process, designed to be simple and low-risk for you. Outsourcing accounting work to India is often assumed to be complex, yet our structured onboarding makes it straightforward and secure. In five stages, you move from a first conversation to a fully embedded team working alongside your own.</p>
        </div>

        <div class="process_steps" id="processSteps">
            <div class="process_card">
                <div class="process_num">1</div>
                <div class="process_body">
                    <h3>Understand Your Requirements</h3>
                    <p>Every engagement opens with a discussion. Our priority is to learn how your business runs, which areas are under most pressure, and the responsibilities you would prefer to pass on. With that understanding, we can pinpoint the work to take on and the best way to sit alongside your team.</p>
                </div>
            </div>
            <div class="process_card">
                <div class="process_num">2</div>
                <div class="process_body">
                    <h3>Build Your Team</h3>
                    <p>The initial interview is usually a video call with a People & Culture colleague. We take the time for us to get to know each other and get a first impression. We will naturally answer your questions about us and the position you are applying for so you have a clear picture of your role with us.</p>
                </div>
            </div>
            <div class="process_card">
                <div class="process_num">3</div>
                <div class="process_body">
                    <h3>Integrate With Your Workflow</h3>
                    <p>We then integrate with your established working methods. We work directly in the accounting software, file-sharing tools, and reporting formats already in place, so your team adopts nothing new. We arrange secure access and confirm how we will communicate and exchange work.</p>
                </div>
            </div>
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
                                <span class="color-button__label relative z-10 will-change-transform me-2">Request A
                                    Call</span>
                                <svg width="20" height="20" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.51089 1L6.15002 1.13169C6.91653 1.15942 7.59676 1.64346 7.89053 2.3702L8.96656 5.03213C9.217 5.65159 9.1496 6.35837 8.78693 6.91634L7.40831 9.0375C8.22454 10.2096 10.4447 12.9558 12.7955 14.5633L14.5484 13.4845C14.9939 13.2103 15.5273 13.1289 16.0314 13.2581L19.5161 14.1517C20.4429 14.3894 21.0674 15.2782 20.9942 16.2552L20.7705 19.2385C20.6919 20.2854 19.8351 21.1069 18.818 20.9887C5.39245 19.4276 -2.48056 0.99997 2.51089 1Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
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
<section class="mt-80">
    <div class="container">
        <div class="mb-5 text-center">
            <h2>Voices from Across the Globe</h2>
        </div>
        <div class="our_experts_cen row align-items-center">
            <div class="col-md-12">
                <div class="testimonial_slider">
                    <div class="testimonial_card">
                        <img class="quote_icon" src="{{ asset('public/front/images/quotation-icon.svg') }}"  loading="lazy" alt="quotation-icon">
                        <p>For some time, I have been working in conjunction with the Director of PCS Global Group, Mr Prithvi Dodla, getting to understand their business methods. Clearly, with their experience in end-to-end accounting, administration side. PCS Global Group will thrive in providing business solutions to clients globally. I have seen first hand the high productivity levels and commitment to clients being second to none. This is why I have joined their team to be on the ground in Australia to assist them in delivering Accounting & the Strata Industry services.</p>
                        <hr>
                        <div class="testimonial_author">
                            <h4>Matt Osborne</h4>
                            <p>Owner</p>
                        </div>
                    </div>
                    <div class="testimonial_card">
                        <img class="quote_icon" src="{{ asset('public/front/images/quotation-icon.svg') }}"  loading="lazy" alt="quotation-icon">
                        <p>The PCS Group experts took the time to know my business and me. I have a real sense of security, knowing there’s always quality advice on hand as my business grows and I have to make more decisions.</p>
                        <hr>
                        <div class="testimonial_author">
                            <h4>Darren Mason</h4>
                            <p>Financial Controller, Global Accounting Network</p>
                        </div>
                    </div>
                    <div class="testimonial_card">
                        <img class="quote_icon" src="{{ asset('public/front/images/quotation-icon.svg') }}"  loading="lazy" alt="quotation-icon">
                        <p>The PCS team is extremely proactive and professional. They look after all my accounting and tax requirements so that I can concentrate on building my business.</p>
                        <hr>
                        <div class="testimonial_author">
                            <h4>Barry Williams</h4>
                            <p>Owner, V-Care Clinics</p>
                        </div>
                    </div>
                    <div class="testimonial_card">
                        <img class="quote_icon" src="{{ asset('public/front/images/quotation-icon.svg') }}" loading="lazy" alt="quotation-icon">
                        <p>They provide prompt, accurate, and professional service, relieving us of the burden of keeping up with ever-changing Payroll legislation. I particularly value having an expert contact I can contact if I have any questions, and they are familiar enough with our business to provide much-appreciated, tailored advice as needed.</p>
                        <hr>
                        <div class="testimonial_author">
                            <h4>Jason Hoopai</h4>
                            <p>MD, Hoopai Financial Consultancy</p>
                        </div>
                    </div>
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
             <svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                        <path d="M1 6.32861L6 11.3286M1 6.32861L6 1.32861M1 6.32861H19" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
        </span>
        <span class="arrow-next slider3-next">
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


@include('countries.india.layouts.frontfooter')

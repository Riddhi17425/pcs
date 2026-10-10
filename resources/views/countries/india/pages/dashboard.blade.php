@include('countries.india.layouts.header', [
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
                    <h3>Accounting and Finance</h3>
                    <p>Our all-inclusive accounting & finance services team takes care of all your books, ensuring accuracy and regulatory compliance,
                            powering clients to take control of their financial future with scalable and tech-enabled solutions.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/Taxation.jpg') }}" loading="lazy" alt="Bookkeeping Outsourcing">
                </div>
                <div class="precision_card_body">
                    <h3>Taxation</h3>
                    <p>With efficiency at our core, we deliver accurate and timely tax preparation services tailored for individuals, sole traders,
                            and business entities through a streamlined, dependable process built for results.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/Payroll_outsourcing.jpg') }}" loading="lazy" alt="Tax Preparation Outsourcing">
                </div>
                <div class="precision_card_body">
                    <h3>Payroll
                        Outsourcing</h3>
                    <p>At PCS Global, we deliver a comprehensive payroll outsourcing service that relieves you and allows you to focus on growing your business.
                            Our dedicated team ensures greater accuracy while also keeping in mind the laws and regulations.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/Strata_Management.jpg') }}" loading="lazy" alt="BAS/IAS Return Services">
                </div>
                <div class="precision_card_body">
                    <h3>Strata Management</h3>
                    <p>From budgeting and levy collection to maintenance coordination, we do it all.
                           Our Strata Specialists streamline property maintenance services, acting as your virtual strata managers with a keen expert eye.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/IT_Automation.jpg') }}" loading="lazy" alt="Payroll Outsourcing">
                </div>
                <div class="precision_card_body">
                    <h3>IT Automation</h3>
                    <p>Our specialization in development, UI/UX, QA and enterprise solutions grows your business with a smarter system.
                            Custom tech solutions enhanced with digital integration enable a more efficient and scalable business.</p>
                </div>
            </div>
            <div class="precision_card">
                <div class="precision_card_img">
                    <img src="{{ asset('public/front/images/Staffing__Recruitment.jpg') }}" loading="lazy" alt="Strata Management Services">
                </div>
                <div class="precision_card_body">
                    <h3>Staffing & Recruitment</h3>
                    <p>  Tailored staffing solutions for your business with the blend of flexible recruitment, contract hiring and offshore resource models.
                            Our global talent network ensures you have the right people for the right roles, right when you need them.</p>
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
                    <img class="img-fluid" src="{{asset('public/front/images/who-are-we.webp')}}" loading="lazy" alt="Why Partner With PCS Global">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="counter_lt">
                    <h2 class="mb-3 mb-xxl-4">Who Are We?</h2>
                    <p>Decades of experience and expertise have led to PCS Global establishing a name for itself in overseas accounting and administrative solutions worldwide.
                        With a strong presence in Australia, New Zealand, the US, the UK, Ireland, Europe and India, our teams empower businesses with accurate,
                        timely and a combination of technology with human touch by delivering bespoke services.
                    </p>
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
                <h2>Global Accounting Expertise. Tailored Business Solutions.</h2>
                <p>At PCS Global, we deliver tailored accounting outsourcing solutions designed around your business structure, workload, and goals. From bookkeeping and payroll to tax preparation and financial reporting, our experienced team combines industry expertise, technology, and reliable support to help global businesses and accounting firms improve efficiency, maintain accuracy, and focus on growth.</p>
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
                <!-- <div class="trust_slide">
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
                </div> -->
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
                <!-- <span class="trust_slider_seg"></span>
                <span class="trust_slider_seg"></span>
                <span class="trust_slider_seg"></span> -->
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
@include('components.india.industries-card')

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
<x-sections.testimonials title="Voices from Across the Globe" :items="config('home.testimonials')" />

{{-- Contact form: AU / US / UK jaisa common form (css/common/contact-form.css) --}}
<x-sections.contact-form
    title="Ready to Build a Smarter Outsourcing Team?"
    text="Whether you need accounting, bookkeeping, tax, payroll, strata management or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements."
    :cities="['Ahmedabad', 'Mumbai', 'Delhi', 'Bengaluru', 'Pune', 'Other']"
    :services="['Accounting & Bookkeeping', 'Strata Property Management', 'Payroll Outsourcing Services', 'Taxation Services', 'Recruitment Outsourcing Services', 'IT Automation Services']"
    country="India"
    phone-country="in" />


@include('countries.india.layouts.footer')

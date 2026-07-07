@include('layouts.frontheader', [
    'og_image' => asset('public/front/images/hero_img.png')
])

<section>
    <div class="container-fluid px-0 overflow-hidden">
        <div class="hero">
            <div class="hero_lt">
                <div class="hero_lt_top">
                    <h1 class="hero_head">Powered by <span><img class="hero_gif" src="{{asset('public/front/images/pcs_hero.gif')}}"
                                alt="image" loading="lazy"></span>
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
                    <a class="com_btn2 color-animated-button bubble-btn" href="javascript:void(0)"
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

<!-- Comprehensive Business  -->

<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Comprehensive Business <br /> Management & Consulting Solutions</h2>
            <p>At PCS Global, we deliver expert consulting services that are strategically designed to help your organization navigate challenges, 
                    enhance performance and build long-term resilience. Our team offers objective insights, customized strategies and practical solutions. 
                    Taking a holistic approach, we help businesses address their day-to-day operational needs, as well as complex business issues, with precision, professionalism, and care. </p>
        </div>

         <div class="comp_bus_bot d-none d-lg-flex">
            
            <a href="{{ route('pcs.global.bookkeeping') }}" class="comp_bus_child">
                <!-- First section: Image + Number -->
                <div class="comp_bus_front">
                    <div class="comp_bus_fronts">
                        <span><img class="img-fluid mb-4" src="{{asset('public/front/images/Accounting_and_Finance.jpg')}}"  loading="lazy" alt="image"></span>
                    <h6 class="comp_bus_num">01</h6>
                    <h6 class="comp_bus_para">Accounting and Finance</h6>
                    </div>
                </div>
                <!-- Second section: Title + Description -->
                <div class="comp_bus_back">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Accounting_and_Finance.jpg')}}"  loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt">
                        <h6 class="comp_bus_num">01</h6>
                        <h6 class="comp_bus_para mb-4">Accounting and Finance</h6>
                        <p class="comp_bus_ext">
                            Our all-inclusive accounting & finance services team takes care of all your books, ensuring accuracy and regulatory compliance, 
                            powering clients to take control of their financial future with scalable and tech-enabled solutions.

                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('taxation.services') }}" class="comp_bus_child">
                <!-- First section: Image + Number -->
                <div class="comp_bus_front">
                     <div class="comp_bus_fronts">
                    <span><img class="img-fluid mb-4" src="{{asset('public/front/images/Taxation.jpg')}}"  loading="lazy" alt="image"></span>
                    <h6 class="comp_bus_num">02</h6>
                    <h6 class="comp_bus_para">Taxation</h6>
                    </div>
                </div>

                <!-- Second section: Title + Description -->
                <div class="comp_bus_back">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Taxation.jpg')}}"  loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt">
                        <h6 class="comp_bus_num">02</h6>
                        <h6 class="comp_bus_para mb-4">Taxation</h6>
                        <p class="comp_bus_ext">
                            With efficiency at our core, we deliver accurate and timely tax preparation services tailored for individuals, sole traders, 
                            and business entities through a streamlined, dependable process built for results.

                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('payroll-outsourcing-services') }}" class="comp_bus_child">
                <!-- First section: Image + Number -->
                <div class="comp_bus_front">
                     <div class="comp_bus_fronts">
                    <span><img class="img-fluid mb-4" src="{{asset('public/front/images/Payroll_outsourcing.jpg')}}"  loading="lazy" alt="image"></span>
                    <h6 class="comp_bus_num">03</h6>
                    <h6 class="comp_bus_para">Payroll
                        Outsourcing</h6>
                        </div>
                </div>

                <!-- Second section: Title + Description -->
                <div class="comp_bus_back">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Payroll_outsourcing.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt">
                        <h6 class="comp_bus_num">03</h6>
                        <h6 class="comp_bus_para mb-4">Payroll
                            outsourcing</h6>
                        <p class="comp_bus_ext">
                            At PCS Global, we deliver a comprehensive payroll outsourcing service that relieves you and allows you to focus on growing your business. 
                            Our dedicated team ensures greater accuracy while also keeping in mind the laws and regulations. 
                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('strata.management') }}" class="comp_bus_child">
                <!-- First section: Image + Number -->
                <div class="comp_bus_front">
                     <div class="comp_bus_fronts">
                    <span><img class="img-fluid mb-4" src="{{asset('public/front/images/Strata_Management.jpg')}}" loading="lazy" alt="image"></span>
                    <h6 class="comp_bus_num">04</h6>
                    <h6 class="comp_bus_para">Strata Management</h6>
                    </div>
                </div>

                <!-- Second section: Title + Description -->
                <div class="comp_bus_back">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Strata_Management.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt">
                        <h6 class="comp_bus_num">04</h6>
                        <h6 class="comp_bus_para mb-4">Strata Management</h6>
                        <p class="comp_bus_ext">
                           From budgeting and levy collection to maintenance coordination, we do it all. 
                           Our Strata Specialists streamline property maintenance services, acting as your virtual strata managers with a keen expert eye.
                        </p>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('it.automation') }}" class="comp_bus_child">
                <!-- First section: Image + Number -->
                <div class="comp_bus_front">
                     <div class="comp_bus_fronts">
                    <span><img class="img-fluid mb-4  " src="{{asset('public/front/images/IT_Automation.jpg')}}" loading="lazy" alt="image"></span>
                    <h6 class="comp_bus_num">05</h6>
                    <h6 class="comp_bus_para">IT Automation</h6>
                    </div>
                </div>

                <!-- Second section: Title + Description -->
                <div class="comp_bus_back">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/IT_Automation.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt">
                        <h6 class="comp_bus_num">05</h6>
                        <h6 class="comp_bus_para mb-4">IT Automation</h6>
                        <p class="comp_bus_ext">
                            Our specialization in development, UI/UX, QA and enterprise solutions grows your business with a smarter system. 
                            Custom tech solutions enhanced with digital integration enable a more efficient and scalable business.
                        </p>
                    </div>
                </div>
            </a>
            
            <a class="comp_bus_child" href="{{ route('recruitment.services') }}" >
                <!-- First section: Image + Number -->
                <div class="comp_bus_front">
                     <div class="comp_bus_fronts">
                    <span><img class="img-fluid mb-4" src="{{asset('public/front/images/Staffing__Recruitment.jpg')}}" loading="lazy" alt="image"></span>
                    <h6 class="comp_bus_num">06</h6>
                    <h6 class="comp_bus_para">Staffing & Recruitment</h6>
                    </div>
                </div>

                <!-- Second section: Title + Description -->
                <div class="comp_bus_back">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Staffing__Recruitment.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt">
                        <h6 class="comp_bus_num">06</h6>
                        <h6 class="comp_bus_para mb-4">Staffing & Recruitment</h6>
                        <p class="comp_bus_ext">
                            Tailored staffing solutions for your business with the blend of flexible recruitment, contract hiring and offshore resource models. 
                            Our global talent network ensures you have the right people for the right roles, right when you need them.

                        </p>
                    </div>
                </div>
            </a>
            
            </div>
            
        
        <!-- phone slider -->
        <div class="d-lg-none overflow-hidden">
            <div class="comp_bus_slider">
                <div class="comp_bus_back_p">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Accounting_and_Finance.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt_p">
                        <h6 class="comp_bus_num_p">01</h6>
                        <a href="{{ route('pcs.global.bookkeeping') }}"><h6 class="comp_bus_para_P mb-4">Accounting and Finance</h6></a>
                        <p class="comp_bus_ext_P">
                             Our all-inclusive accounting & finance services team takes care of all your books, ensuring accuracy and regulatory compliance, 
                             powering clients to take control of their financial future with scalable and tech-enabled solutions.
                        </p>
                    </div>
                </div>
                
                <div class="comp_bus_back_p">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Taxation.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt_p">
                        <h6 class="comp_bus_num_p">02</h6>
                        <a href="{{ route('taxation.services') }}"><h6 class="comp_bus_para_P mb-4">Taxation</h6></a>
                        <p class="comp_bus_ext_P">
                           With efficiency at our core, we deliver accurate and timely tax preparation services tailored for individuals, sole traders, 
                            and business entities through a streamlined, dependable process built for results.
                        </p>
                    </div>
                </div>
                
                <div class="comp_bus_back_p">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Payroll_outsourcing.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt_p">
                        <h6 class="comp_bus_num_p">03</h6>
                        <a href="{{ route('payroll-outsourcing-services') }}"><h6 class="comp_bus_para_P mb-4">Payroll
                            outsourcing</h6></a>
                        <p class="comp_bus_ext_P">
                             At PCS Global, we deliver a comprehensive payroll outsourcing service that relieves you and allows you to focus on growing your business. 
                            Our dedicated team ensures greater accuracy while also keeping in mind the laws and regulations. 
                        </p>
                    </div>
                </div>
                
                <div class="comp_bus_back_p">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Strata_Management.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt_p">
                        <h6 class="comp_bus_num_p">04</h6>
                       <a href="{{ route('strata.management') }}"> <h6 class="comp_bus_para_P mb-4">Strata Management</h6></a>
                        <p class="comp_bus_ext_P">
                            From budgeting and levy collection to maintenance coordination, we do it all. 
                           Our Strata Specialists streamline property maintenance services, acting as your virtual strata managers with a keen expert eye.
                        </p>
                    </div>
                </div>
                
                <div class="comp_bus_back_p">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/IT_Automation.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt_p">
                        <h6 class="comp_bus_num_p">05</h6>
                       <a href="#"> <h6 class="comp_bus_para_P mb-4">IT Automation</h6></a>
                        <p class="comp_bus_ext_P">
                           Our specialization in development, UI/UX, QA and enterprise solutions grows your business with a smarter system. 
                            Custom tech solutions enhanced with digital integration enable a more efficient and scalable business.
                        </p>
                    </div>
                </div>
                
                <div class="comp_bus_back_p">
                    <span><img class="img-fluid mb-3" src="{{asset('public/front/images/Staffing__Recruitment.jpg')}}" loading="lazy" alt="image"></span>
                    <div class="comp_bus_back_bt_p">
                        <h6 class="comp_bus_num_p">06</h6>
                      <a href="{{ route('recruitment.services') }}"> <h6 class="comp_bus_para_P mb-4">Staffing & Recruitment</h6></a>
                        <p class="comp_bus_ext_P">
                            Tailored staffing solutions for your business with the blend of flexible recruitment, contract hiring and offshore resource models. 
                            Our global talent network ensures you have the right people for the right roles, right when you need them.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who are we? -->
<section class="mt-100">
    <div class="container">
        <div class="row gy-5 gy-lg-0 justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="counter_lt">
                    <h2 class="mb-3 mb-xxl-4">Who Are We?</h2>
                    <p>Decades of experience and expertise have led to PCS Global establishing a name for itself in overseas accounting and administrative solutions worldwide.
                        With a strong presence in Australia, New Zealand, the US, the UK, Ireland, Europe and India, our teams empower businesses with accurate,
                        timely and a combination of technology with human touch by delivering bespoke services.
                    </p>
                </div>

                <div class="counter">
                    <div class="counter_line">
                        <h3 data-count="60">60+</h3>
                        <h5>Happy Clients</h5>
                    </div>

                    <div class="counter_line">
                        <h3 data-count="100">100+</h3>
                        <h5>Years of Cumulative Experience</h5>
                    </div>

                    <div class="counter_line">
                        <h3 data-count="800">800+</h3>
                        <h5>Projects Completed</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <img class=" img-fluid" src="{{asset('public/front/images/who-are-we.png')}}" loading="lazy" alt="image" cccc>
            </div>
        </div>
    </div>
</section>

<section class="trust mt-100 ">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Precision You Can Trust</h2>
            <p>Every task. Every detail. Done right, the first time.</p>
        </div>
        <div class="trust_scroll_wrapper">
            <div class="trust_banner trust_banner_home" style="background-image: url('{{asset('public/front/images/trust_bg.png')}}');">
                <div class="trust_card">
                    <div class="trust_card_head">
                        <h3>Research & Analysis</h3>
                        <span><img src="{{asset('public/front/images/trust_icon.png')}}" loading="lazy" alt="icon" /></span>
                    </div>
                    <p>Our analysts deliver data-driven insights that help unlock new opportunities for your business to grow. 
                        From market trends to operational metrics, we help you stay ahead by gaining clarity and reducing risks.
                    </p>
                </div>
            </div>
            <div class="trust_banner trust_banner_home" style="background-image: url('{{asset('public/front/images/trust_bg2.png')}}');">
                <div class="trust_card">
                    <div class="trust_card_head">
                        <h3>Tech-Powered Solutions</h3>
                        <span><img src="{{asset('public/front/images/trust_icon.png')}}" loading="lazy" alt="icon" /></span>
                    </div>
                    <p>Organize operations and boost productivity by integrating advanced technologies, such as automation, cloud tools, and custom development. 
                        Utilizing tech strategically to maximize ROI is what we strive for.
                    </p>
                </div>
            </div>
            <div class="trust_banner trust_banner_home" style="background-image: url('{{asset('public/front/images/our-certificate.png')}}');">
                <div class="trust_card">
                    <div class="trust_card_head">
                        <h3>Our Certifications</h3>
                        <span><img src="{{asset('public/front/images/trust_icon.png')}}" loading="lazy" alt="icon" /></span>
                    </div>
                    <div class="d-flex certificate-banner">
                        
                       
                        <img src="{{asset('public/front/images/certificate.png')}}" loading="lazy" alt="certifcate" class="img-fluid">
                       
                    </div>
                   
                </div>
            </div>
            <div class="trust_banner trust_banner_home" style="background-image: url('{{asset('public/front/images/trust_bg3.png')}}');">
                <div class="trust_card">
                    <div class="trust_card_head">
                        <h3>Available 24×7</h3>
                        <span><img src="{{asset('public/front/images/trust_icon.png')}}" loading="lazy" alt="icon" /></span>
                    </div>
                    <p>To ensure reliability and responsiveness, our global support team is available 24/7 to address any queries that may arise, 
                        regardless of the time or location.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Industries -->

<!-- global_exp -->
@include('layouts.Industries-card')

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
<!-- Clients -->

<section class="clients mt-100">
    <div class="container">
        <div class="client_slider_par row align-items-center">
            <div class="col-md-3">
                <h3 class="text-center">Tools & Technology We Use</h3>
            </div>
            <div class="col-md-9">
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
    </div>
</section>
<!-- home - map -->
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2>Our Global Reach</h2>
        </div>
        <div>
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


                                 <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
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

<!-- Clients -->

<section class="clients mt-100">
    <div class="container">
        <div class="client_slider_par row align-items-center">
            <div class="col">
                <h3 class="text-center">Trusted By</h3>
            </div>
            <div class="col-lg-10">
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
        </div>
    </div>
</section>

<!-- Insights -->

<section class="card_main mt-100 ">
    <div class="container">

        <div class="com_sec_head_top">
            <h2>Insights That Drive Smarter Business Decisions</h2>
        </div>
        <div class="row g-4 g-lg-5">
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
            <div class="col-md-8"> 
                <div class="testimonial_slider">
                    <div class="testimonial_card"> 
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-fluid mb-3" src="{{ asset('public/front/images/quotation-icon.svg') }}"  loading="lazy" alt="quotation-icon">
                                <p>For some time, I have been working in conjunction with the Director of PCS Global Group, Mr Prithvi Dodla, getting to understand their business methods. Clearly, with their experience in end-to-end accounting, administration side. PCS Global Group will thrive in providing business solutions to clients globally. I have seen first hand the high productivity levels and commitment to clients being second to none. This is why I have joined their team to be on the ground in Australia to assist them in delivering Accounting & the Strata Industry services.</p>
                                   <h3 class="sub_head mb-1">
                                        Matt Osborne
                                   </h3>
                                   <p>Owner</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_card"> 
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-fluid mb-3" src="{{ asset('public/front/images/quotation-icon.svg') }}"  loading="lazy" alt="quotation-icon">
                                <p>The PCS Group experts took the time to know my business and me. I have a real sense of security, knowing there’s always quality advice on hand as my business grows and I have to make more decisions.</p>
                                   <h3 class="sub_head mb-1">
                                       Darren Mason
                                   </h3>
                                   <p>Financial Controller, Global Accounting Network</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_card"> 
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-fluid mb-3" src="{{ asset('public/front/images/quotation-icon.svg') }}"  loading="lazy" alt="quotation-icon">
                                <p>The PCS team is extremely proactive and professional. They look after all my accounting and tax requirements so that I can concentrate on building my business.</p>
                                   <h3 class="sub_head mb-1">
                                       Barry Williams
                                   </h3>
                                   <p>Owner, V-Care Clinics</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_card"> 
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-fluid mb-3" src="{{ asset('public/front/images/quotation-icon.svg') }}" loading="lazy" alt="quotation-icon">
                                <p>They provide prompt, accurate, and professional service, relieving us of the burden of keeping up with ever-changing Payroll legislation. I particularly value having an expert contact I can contact if I have any questions, and they are familiar enough with our business to provide much-appreciated, tailored advice as needed.</p>
                                   <h3 class="sub_head mb-1">
                                       Jason Hoopai
                                   </h3>
                                   <p>MD, Hoopai Financial Consultancy</p>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
            
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset('public/front/images/testimonial.png') }}" alt="testimonial">
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


@include('layouts.frontfooter')



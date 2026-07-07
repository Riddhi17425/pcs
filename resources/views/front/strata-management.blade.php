@include('layouts.frontheader', [
    'og_image' => asset('public/front/images/governance-expertise.png')
])

<section class="com_hero" style="background-image: url(' {{ asset('public/front/images/data-security-hero-bg.jpg') }}');">
    <div class="container">
        <div class="com_hero_child">
            <h1>Strata & Property Management Specialists</h1>
            <p class="col-lg-7 m-auto">PCS Global is a trusted strata management company delivering end-to-end solutions in property management, compliance, and maintenance. Our expert team ensures properties are well-managed, cost-efficient, and fully compliant across Australia and New Zealand.</p>
                                 <a class="com_btn1 color-animated-button bubble-btn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                        <!-- Bubble effect layers -->
                        <span class="color-button__background"></span>
                        <span class="color-button__bubble-container">
                            <span class="color-button__bubble"></span>
                        </span>

                        <!-- Label and Icon -->

                        <span class="color-button__label relative z-10 will-change-transform me-2">Book your Consultation Today</span>
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.51089 1L6.15002 1.13169C6.91653 1.15942 7.59676 1.64346 7.89053 2.3702L8.96656 5.03213C9.217 5.65159 9.1496 6.35837 8.78693 6.91634L7.40831 9.0375C8.22454 10.2096 10.4447 12.9558 12.7955 14.5633L14.5484 13.4845C14.9939 13.2103 15.5273 13.1289 16.0314 13.2581L19.5161 14.1517C20.4429 14.3894 21.0674 15.2782 20.9942 16.2552L20.7705 19.2385C20.6919 20.2854 19.8351 21.1069 18.818 20.9887C5.39245 19.4276 -2.48056 0.99997 2.51089 1Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <div class=" text-center">
                        <img class="img-fluid" src="{{ asset('public/front/images/strata-management_1.png') }}" alt="image">
                    </div>
                </div>

            </div>
            <div class="com_sec_head_top">
                <p>Managing a strata property goes far beyond basic administration. It involves a complicated combination of financial management, legal compliance, governance, and proactive maintenance planning. At PCS Global, our qualified strata managers provide specific property strata management solutions for residential, commercial and mixed-use developments.</p>
                <p>
                    From organising meetings, looking after common areas, managing budgets, and ensuring legislative compliance, our strata management professionals are there to protect your investment and ensure residents enjoy a higher standard of community living.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ser_Out mt-100" id="jump-to-sec1">
    <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="ser_Out_lt">
                    <h2>Our Property & Strata Outsourcing Services Include</h2>

                       <img src="{{asset('public/front/images/enterprise.gif')}}" alt="icon" class="inner-gif">
                   
                </div>
                <p>
                    PCS Global delivers professional strata management to keep your property compliant, financially sound, and efficient. We offer residential, commercial, and Body Corporate management that is simple, proactive, affordable, and transparent. 
                </p>
                <p>Our services include:</p>

                <div class="row roll_update">
                    <ul>
                        <li>
                            <b>Financial Management:</b> Accurate budgets, levy collection, trust account compliance and clear financial reporting to protect your asset.
                        </li>
                        <li>  <b>Strata Property Maintenance:</b>  Preventive and reactive maintenance programs, contractor engagement and lifecycle planning of your asset.</li>
                        <li>  <b>Governance & Compliance:</b> Facilitation of AGMs and meetings of the committee of management, compliance with relevant strata legislation and by-law enforcement.</li>
                        <li> <b> Insurance Management:</b> Sourcing and renewing policies, managing claims, and reducing downtime during any disruptions.</li>
                        <li> <b> Owner & Tenant Communication:</b> Timely correspondence, mediation of disputes and continual engagement with all stakeholders.</li>
                    </ul>
                </div>
                <p>With PCS Global, you’re working with strata management specialists who are focused on delivering the best strata management services tailored to your property’s individual needs, including both operational day-to-day aspects of management through to long-term asset planning.
</p>
            </div>
            <div class="col-lg-6 text-end">
                <img class="img-fluid" src="{{ asset('public/front/images/strata-management_2.png') }}" alt="image">
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 order_cash">
                <h2>Why Choose PCS Global as Your Strata Management Experts?</h2>
                <p>With PCS Global, you partner with real strata management professionals with decades of combined experience and extensive industry knowledge.</p>
                <div class="row mt-4 mt-lg-5">
                    <div class="col-12">
                        <h5>We stand out from the pack through our:</h5>
                        <ul>
                            <li>
                                  Best strata management services underpinned by proven processes and technology.
                            </li>
                            <li>A professional strata team that has been trained in compliance, governance, and dispute resolution.</li>
                            <li>Experience in residential and commercial strata management both.</li>
                            <li>Scalable solutions for properties of any size.</li>
                            <li>Affordable third-party services without sacrificing service quality.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 pe-lg-5">
                <img class="img-fluid" src="{{ asset('public/front/images/strata-management_4.svg') }}" alt="image">
            </div>
        </div>
    </div>

</section>

<section class="trust mt-100 ">
    <div class="container">

        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Types of Properties We Manage</h2>
            <p>At PCS, we understand that no two strata are the same. That is why we offer the best strata management solutions that are tailored to meet the varying needs of each property type (high-rise residential, multi-unit commercial, mixed-use property, etc.). With our professional strata team and sophisticated management systems, we are confident that we can provide a strata management experience that ensures effective operations, financial transparency, and compliance standards across all categories.</p>
        </div>

        <div class="trust_scroll_wrapper">
                      <div class="trust_banner trust_banner_strata" style="background-image: url('{{asset('public/front/images/strata-management-banner1.jpg')}}');">
                <!--<img class="img-fluid" src="{{ asset('public/front/images/strata-management_7.png') }}" alt="bg1" />-->
                <div class="trust_card tax_preparation">
                    <div class="trust_card_head">
                        <h3>Residential Strata Property:</h3>
                        <span><img src="{{ asset('public/front/images/trust_icon.png') }}" alt="icon" /></span>
                    </div>
                    <p class="audit_comp_para" style="font-weight:400; margin-bottom:16px">We manage all types of residential strata, from boutique apartments to large complexes. Our services ensure efficient levy collection, proactive maintenance, and transparent reporting. We focus on protecting property value while promoting harmonious community living.</p>
                  
                      <a href="#" class="btn-trust-banner" data-bs-toggle="offcanvas" data-bs-target="#residential" aria-controls="residential" >
                               <i class="fa-solid fa-minus"></i> <span  class="text-padding">Read More</span>
                            </a>
                            
                </div>
            </div>
            <div class="trust_banner trust_banner_strata" style="background-image: url('{{asset('public/front/images/strata-management-banner2.jpg')}}');">
                <!--<img class="img-fluid" src="{{ asset('public/front/images/strata-management_7.png') }}" alt="bg1" />-->
                <div class="trust_card tax_preparation">
                    <div class="trust_card_head">
                        <h3>Commercial Strata Management:</h3>
                        <span><img src="{{ asset('public/front/images/trust_icon.png') }}" alt="icon" /></span>
                    </div>
                    <p class="audit_comp_para" style="font-weight:400; margin-bottom:16px"> We manage office towers, retail precincts, and industrial facilities with tailored expertise. Our services focus on maximizing revenue, controlling costs, and ensuring compliance. We help protect asset value while supporting efficient and sustainable operations.</p>
                     <!--read more button for offcanvas-->
                     <a href="#" class="btn-trust-banner" data-bs-toggle="offcanvas" data-bs-target="#commercial" aria-controls="commercial" >
                               <i class="fa-solid fa-minus"></i> <span class="text-padding">Read More</span>
                            </a>
                   
                </div>
            </div>
            <div class="trust_banner trust_banner_strata" style="background-image: url('{{asset('public/front/images/strata-management-banner3.jpg')}}');">
                <!--<img class="img-fluid" src="{{ asset('public/front/images/strata-management_7.png') }}" alt="bg1" />-->
                <div class="trust_card tax_preparation">
                    <div class="trust_card_head">
                        <h3>Mixed Use Development:</h3>
                        <span><img src="{{ asset('public/front/images/trust_icon.png') }}" alt="icon" /></span>
                    </div>
                    <p class="audit_comp_para" style="font-weight:400; margin-bottom:16px">We manage developments combining residential, retail, and commercial spaces under one framework. Our services coordinate shared budgets, utilities, and common areas for seamless operations. We balance the needs of diverse owner groups to ensure every part of the community thrives.</p>
                     <!--read more button for offcanvas-->
                     <a href="#" class="btn-trust-banner" data-bs-toggle="offcanvas" data-bs-target="#mixed" aria-controls="mixed" >
                               <i class="fa-solid fa-minus"></i> <span class="text-padding">Read More</span>
                            </a>
                   
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mt-100 mb-md-4">

    <div class="container">
        <div class="row gy-4 gy-lg-0 gx-lg-5 align-items-center">
           
            <div class="col-lg-7 ">
                <div>
                    <h2>Why Partner With PCS Global’s Strata Management Experts?</h2>
                    <div class="row">
                         <div class="col-md-5">
                             <ul>
                                <li>
                                    Expert Accounting & Administration
                                </li>
                                <li>
                                   Scalable & Cost-Effective

                                </li>
                                
                            </ul>
                         </div>
                         <div class="col-md-5">
                             <ul>
                                <li>
                                     Proven Strata Specialists

                                </li>
                                <li>
                                   Tailored Technology Solutions


                                </li>
                                
                            </ul>
                         </div>
                    </div>
                     <a class="com_btn1 color-animated-button bubble-btn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                        <!-- Bubble effect layers -->
                        <span class="color-button__background"></span>
                        <span class="color-button__bubble-container">
                            <span class="color-button__bubble"></span>
                        </span>

                        <!-- Label and Icon -->

                        <span class="color-button__label relative z-10 will-change-transform me-2">Request A Call</span>
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.51089 1L6.15002 1.13169C6.91653 1.15942 7.59676 1.64346 7.89053 2.3702L8.96656 5.03213C9.217 5.65159 9.1496 6.35837 8.78693 6.91634L7.40831 9.0375C8.22454 10.2096 10.4447 12.9558 12.7955 14.5633L14.5484 13.4845C14.9939 13.2103 15.5273 13.1289 16.0314 13.2581L19.5161 14.1517C20.4429 14.3894 21.0674 15.2782 20.9942 16.2552L20.7705 19.2385C20.6919 20.2854 19.8351 21.1069 18.818 20.9887C5.39245 19.4276 -2.48056 0.99997 2.51089 1Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </a>
                </div>

            </div>
             <div class="col-lg-5">
                <img class="img-fluid" src="{{ asset('public/front/images/management-experts.png') }}" alt="management">
            </div>

        </div>
    </div>

</section>

<section class="mt-100">
    <div class="container">

        <div class="com_sec_head_top mb-4">
            <h2 class="mb-2 mb-xxl-4">How Our Strata Management Process Works</h2>
            <div class="text-start mt-4">
                <div class="preparation">
                    <div class="feature-column">
                        <ul>
                            <li>Consultation & Needs Analysis - Getting to know your property's unique needs. 
                            </li>
                        </ul>
                    </div>

                    <div class="feature-column">
                        <ul>
                            
                            <li>Tailored Service Plan - Developing a management plan in line with your objectives.</li>
                        </ul>
                    </div>

                    <div class="feature-column">
                        <ul>
                            <li>Onboarding & Transition -  Ensuring a smooth takeover while minimizing disruption. </li>
                        </ul>
                    </div>

                    <div class="feature-column">
                        <ul>
                            <li>Ongoing Management & Reporting - Providing compliance, preventative management and reporting.</li>
                        </ul>
                    </div>
                    <div class="feature-column">
                        <ul>
                            <li>Compliance & Governance - Ensuring your property complies with all the strata legislation and by-laws.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="text-center">
            <img class="img-fluid" src="{{ asset('public/front/images/strata-management_5.svg') }}" alt="image">
        </div>

    </div>
</section>
<section class="ser_Out mt-100" id="jump-to-sec1">
    <div class="container">
        <div class="row gy-4 justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="ser_Out_lt">
                    <h2>Compliance & Governance Expertise</h2>
                </div>
                <p>
                    We've expertise in understanding the complexities of body corporate legislation, safety regulations and trusts. Our professional strata management, processes and procedures give you:
                </p>

                <div class="row roll_update">
                    <ul>
                        <li>
                            Accurate record keeping and meeting organization.
                        </li>
                        <li> Levy notices are sent out on time and debt recovery is managed.</li>
                        <li>Regular safety inspections, checklists and audits.</li>
                        <li>Financial bookkeeping of expenses, accounts and reporting that comply with regulations.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <img class="img-fluid" src="{{ asset('public/front/images/governance-expertise.png') }}" alt="governance expertise">
            </div>
        </div>
    </div>
</section>
<!-- Clients -->

<section class="clients mt-100">
    <div class="container">
        <div class="client_slider_par row align-items-center">
            <div class="col-md-12">
                <h3 class="text-center">Tools We Use:</h3>
                <p class="mb-0 text-center">We, at PCS Global Group, utilize cutting-edge technology to deliver efficient and accurate outsourced tax services in the UK, USA, Australia, New Zealand, and Ireland, harnessing popular software for superior outcomes. Here is the widely adopted software:</p>
            </div>
            <div class="col-md-12">
                <div class="client_slider">
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/stratamaster.png') }}"
                                 alt="stratamaster">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/urbanise.png') }}"
                                 alt="urbanise">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/stratamax.png') }}"
                                 alt="stratamax">
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/strtafy_zennexo.png') }}"
                                 alt="strtafy_zennexo">
                        </div>
                         <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/propertyiq.png') }}"
                                 alt="propertyiq">
                        </div>
                          <div>
                            <img class="img-fluid"
                                 src="{{ asset('public/front/images/stratamax.png') }}"
                                 alt="stratamax">
                        </div>
                      
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners my-4 my-lg-3">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-6">
                    <div class="com_inner_banner">
                        <h2>Join forces with PCS Global
                        Global Strata Management Experts
                        </h2>
                        <!--<p class="text-white">From strata property maintenance to total professionals strata management, PCS Global provides the expert services needed to protect your investment, minimise risk, and maximise your property value.</p>-->
                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                            <!-- Bubble effect layers -->
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <!-- Label and Icon -->
                            <span class="color-button__label relative z-10 will-change-transform me-2">Request a
                                call</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.50246 2.58583C7.19873 1.82652 6.46332 1.32861 5.64551 1.32861H2.89474C1.8483 1.32861 1 2.17671 1 3.22314C1 12.1178 8.21078 19.3286 17.1055 19.3286C18.1519 19.3286 19 18.4802 19 17.4338L19.0005 14.6826C19.0005 13.8648 18.5027 13.1295 17.7434 12.8257L15.1069 11.7716C14.4249 11.4987 13.6483 11.6215 13.0839 12.0918L12.4035 12.6593C11.6089 13.3215 10.4396 13.2688 9.7082 12.5374L7.79222 10.6197C7.06079 9.88823 7.00673 8.71995 7.66895 7.9253L8.23633 7.24491C8.70661 6.68057 8.83049 5.90377 8.55766 5.2217L7.50246 2.58583Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div>
                        <img class="img-fluid" src="{{ asset('public/front/images/strata-management_6.png') }}" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-80">
    <div class="container">
        <div class="com_sec_head_top">
            <h4 class="faq-head mb-2 mb-xxl-4">Frequently asked questions</h4>
            <!--<p>Lorem ipsum dolor sit amet consectetur. Massa elit ut proin vitae sed cras duis eget nullam. Nibh-->
            <!--    viverra.</p>-->
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="fre_ques accordion" id="faqAccordion">
                    @if($faq && isset($faq->title_description) && is_array($faq->title_description))
                            @foreach($faq->title_description as $index => $item)
                                <div class="fre_que hidden-faq">
                                    <h5 class="sub_head collapsed" data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faq{{ $index }}">
                                        {{ $item['title'] }}
                                    </h5>
                                    <div id="faq{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                                        <p>{!! $item['description'] !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No FAQ data available.</p>
                        @endif
                    
                    

                     <div class="fre_que text-center border-0">
                        <a class="com_btn1 color-animated-button bubble-btn load-more-faq" href="javascript:void(0)"
                            data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                            <!-- Bubble effect layers -->
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <!-- Label and Icon -->
                            <span class="color-button__label relative z-10 will-change-transform me-2">Load More</span>
                            <svg width="20" height="20" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5.67383V19.6738M12 19.6738L18 13.6738M12 19.6738L6 13.6738" stroke="white"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="offcanvas offcanvas-start" tabindex="-1" id="residential" aria-labelledby="residentialLabel">
                              <div class="offcanvas-header">
                               
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body p-4">
                                <div>
                                    <h3 class="offcanvas-head">Residential Strata Property:</h3>
                                    <p>From boutique apartment blocks to large residential complexes, our strata management services apply to:</p>
                                 <ul>
                                      <li>High-rise apartment buildings</li>
                                      <li>Townhouse communities</li>
                                      <li>Villas and gated communities</li>
                                      <li>Retirement living</li>
                                    </ul>
                                    <p>We put deliberate focus towards helping clients to effectively collect levies, establish effective communication with owners and tenants, proactively manage the maintenance of the strata property, and create easy-to-read, transparent reporting to protect the values of strata properties whilst promoting harmonious living in communities.</p>
                                </div>
                               
                              </div>
                            </div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="commercial" aria-labelledby="commercialLabel">
                              <div class="offcanvas-header">
                               
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body p-4">
                                <div>
                                     <h3 class="offcanvas-head">Commercial Strata Management:</h3>
                                    <p>To manage commercial strata properties effectively, you need specific operational and financial knowledge/experience. Our commercial strata management service applies to:

</p>
                                <ul>
                                      <li>Office towers and business parks</li>
                                      <li>Retail precincts and shopping centres</li>
                                      <li>Industrial warehouses and storage facilities</li>
                                    </ul>
                                    <p>We are able to help clients with tailored property strata management so their commercial strata, property yields, waste and impact of future events are managed to maximise revenue, control operating expenses, and ensure compliance with standards set in the commercial building codes and safety authorities.</p>
                                </div>
                               
                              </div>
                            </div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="mixed" aria-labelledby="mixedLabel">
                              <div class="offcanvas-header">
                               
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body p-4">
                                <div>
                                     <h3 class="offcanvas-head">Mixed Use Development:</h3>
                                    <p>The strata or management of mixed-use property combines residential with retail and commercial property, with complex shared facilities or governance. Our strata management specialists can help you achieve an integrated approach for strata projects that merge residential, retail, donations, amenities, precious feedback and utilities seamlessly by:
</p>
                                <ul>
                                      <li>Coordinating multiple budgets and cost sharing </li>
                                      <li>Management and oversight of shared utilities and common areas</li>
                                      <li>Accommodating the different kinds of owner groups to try and ensure that the needs of the community do not negatively affect the needs of others.</li>
                                    </ul>
                                    <p>Managing mixed-use developments involves balancing the needs of residential, commercial, and retail spaces within one umbrella. PCS Global coordinates shared facilities, budgets, and utilities to ensure seamless operations. Our strata specialists manage diverse owner groups, maintain common areas, and uphold bylaws so that all parts of the development thrive without conflict.</p>
                                </div>
                               
                              </div>
                            </div>
@verbatim
<script type="application/ld+json">
{	
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Why is strata management important for property owners?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Strata Management ensures your property is well-maintained, compliant, financially sound, and that its value is protected."
    }
  },{
    "@type": "Question",
    "name": "How does strata management handle safety compliance and inspections?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Strata management handles safety compliance and inspections. By conducting regular inspections, adhering to regulations, and promptly addressing safety risks."
    }
  },{
    "@type": "Question",
    "name": "What responsibilities does a strata manager have?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "A Strata manager oversees administration, finances, maintenance, compliance, and communication for the property."
    }
  },{
    "@type": "Question",
    "name": "Can owners request an extraordinary general meeting?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, owners can request one by meeting the requirements set out in strata legislation."
    }
  },{
    "@type": "Question",
    "name": "How do strata management services benefit property investors?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "These services help maximise rental returns, maintain asset value, and ensure compliance with legal obligations."
    }
  },{
    "@type": "Question",
    "name": "What is the difference between strata management and property management?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Strata management handles the building and common areas, while property management focuses on individual units."
    }
  },{
    "@type": "Question",
    "name": "How do I choose the right strata management company?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Look for proven experience, transparent fees, strong communication, and compliance expertise."
    }
  },{
    "@type": "Question",
    "name": "What strata management services does PCS Global offer?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We provide financial management, maintenance, compliance, insurance, and governance services."
    }
  },{
    "@type": "Question",
    "name": "Can I switch my current strata manager to PCS Global?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we offer a smooth transition process with minimal disruption."
    }
  },{
    "@type": "Question",
    "name": "Can PCS Global manage both residential and commercial strata properties?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We specialise in managing residential, commercial, and mixed-use developments."
    }
  }]
}
</script>
@endverbatim
@include('layouts.frontfooter')

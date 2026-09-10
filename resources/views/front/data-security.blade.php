@include('layouts.frontheader')

<section class="com_hero" style="background-image: url(' {{ asset('public/front/images/data-security-hero-bg.jpg') }}');">
    <div class="container">
        <div class="com_hero_child">
            <h1>Your Data, Our Priority.</h1>
            <p>At PCS Global, we protect what matters most: your data. As a leading Cyber Security Services Company, we offer 24/7 managed security services, multi-layered cyber security support, and expert-led data protection solutions. </p>
                             <a class="com_btn1 color-animated-button bubble-btn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                        <!-- Bubble effect layers -->
                        <span class="color-button__background"></span>
                        <span class="color-button__bubble-container">
                            <span class="color-button__bubble"></span>
                        </span>

                        <!-- Label and Icon -->

                        <span class="color-button__label relative z-10 will-change-transform me-2">Get a Quote</span>
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
    <div class=" container">
        <div class="text-center">
            <span><img class="img-fluid" src="{{asset('public/front/images/data-security1.webp')}}" alt="image"></span>
            <p class="my-lg-4">From cloud to endpoint, our cybersecurity experts ensure complete data security, business continuity, and compliance. With proven IT security solutions and reliable cybersecurity consultancy, we help businesses stay secure, resilient, and ready for tomorrow.
</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="secure_box_par">

                    <a href="#jump-to-sec1" class="secure_box">
                        <h3>O1</h3>
                        <p>How We Secure <br> Data</p>
                    </a>

                    <a href="#jump-to-sec2" class="secure_box">
                        <h3>O2</h3>
                        <p>Network <br> Architecture</p>
                    </a>

                    <a href="#jump-to-sec3" class="secure_box">
                        <h3>O3</h3>
                        <p>Perimeter & <br> Firewall</p>
                    </a>

                    <a href="#jump-to-sec4" class="secure_box">
                        <h3>O4</h3>
                        <p>Device & <br> Communication Security</p>
                    </a>

                    <a href="#jump-to-sec5" class="secure_box">
                        <h3>O5</h3>
                        <p>Data Storage & <br> Backup</p>
                    </a>

                    <a href="#jump-to-sec6" class="secure_box">
                        <h3>O6</h3>
                        <p>Compliance & <br> Certifications</p>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="ecosystem mt-80"  id="jump-to-sec1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="ecosystem_left">
                    <div class="ser_Out_lt">
                        <h2>How PCS Global Secures <br> Your Digital Ecosystem</h2>
                        <span>
                            <img src="{{asset('public/front/images/network.gif')}}" alt="icon" class="inner-gif">
                        </span>
                    </div>
                    <div class="ecosystem_center mt-1">
                        <!--<p class="sub_head">Enterprise-Ready, Internationally Compliant IT Infrastructure</p>-->
                        <p>PCS Global offers enterprise-grade, globally compliant IT infrastructure built for security, speed, and reliability. With ISO-certified data centers and GDPR compliant systems, we ensure complete data protection. Our cybersecurity experts deliver advanced cybersecurity solutions and 24/7 managed security services tailored for business continuity.</p>
                    </div>

                    <div>
                        <h4 class="mb-2">End-to-End Encryption</h4>
                        <p>End-to-end encryption secures data from origin to destination, ensuring only intended recipients can access it.
</p>
                    </div>
                    <div class=" mt-4">
                            <img src="https://pcsglobalgroup.com/public/front/images/Logo_footer.png" class="img-fluid w-100" loading="lazy">
                        </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mt-4 mt-lg-0">
                    <img class=" img-fluid" src="{{asset('public/front/images/data-security2.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="architecture mt-80" id="jump-to-sec2">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">PCS Network Architecture</h2>
            <p>The Network Architecture of PCS Global is designed for maximum security and spontaneous management. A firewall-reserved entry point with static IP whitelisting controls all incoming traffic. Inside the network, enterprise-grade switches and managed DHCP servers ensure only authorized equipment, increasing data security services and data security audits. Important servers and NAS units run on a stable IP for accurate monitoring and strict access control. With real-time DHCP state management, we prevent IP spoofing and unauthorized connections-provided multidimensional cybersecurity support and multi-level cybersecurity assistance for businesses around the world.
</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-8">
                <img class="img-fluid" src="{{asset('public/front/images/data-security3.png')}}" alt="image">
            </div>
        </div>
    </div>
</section>

<section class="fire_peri mt-100" id="jump-to-sec3">
    <div class="container">
        <div class="row gy-5 justify-content-between align-items-center">
            <div class="col-lg-4 order-1 order-lg-0">
                <div>
                    <img class=" img-fluid" src="{{asset('public/front/images/data-security4.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-7">
                <div>
                    <h2>Firewall and Perimeter Security</h2>
                    <p class="mb-4">PCS Global's firewall and circumference security structure provides uninterrupted, safe connectivity with redundant static IP uplinks through primary and backup ISPs, ensuring strong failure security. Our cybersecurity experts use advanced intrusion prevention systems and next-generation firewalls to detect zero-day dangers. Safe reverse proxy and web application firewalls provide multi-level cybersecurity assistance, defending public-support services from DDoS attacks and OWASP-listed weaknesses.
</p>

                    <p class="mt-4">
                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"
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
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trust mt-100 " >
    <div class="container">

        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">End-To-End Financial Management</h2>
        </div>

        <div class="trust_scroll_wrapper">
            <div class="trust_banner trust_banner_security" style="background-image: url(' {{ asset('public/front/images/data-security6.png') }}');">
                <!-- <img class="img-fluid" src="http://localhost/pcsgloballaravel/public/front/images/aus-img-7.png" alt="bg1" /> -->
                <div class="trust_card tax_preparation" id="jump-to-sec4">
                    <div class="trust_card_head">
                        <h3>Device & Data Flow Security</h3>
                        <span><img src="{{ asset('public/front/images/trust_icon.png') }}" alt="icon"></span>
                    </div>
                    <p>PCS enforces strict role-based access and authentication protocols, using multi-factor authentication (MFA) and at least using users to reach authorized resources only. All internal communication between equipment and server is safe with TLS 1.3 and AES-256 encryption, providing strong data security services. Wired infrastructure is reinforced with controlled switches, managed DHCP and safe server configurations, including locked physical ports and RLAN partitions that restrict access to sensitive subnets for only specified equipment.
</p>
                     <a href="#" class="btn-trust-banner" data-bs-toggle="offcanvas" data-bs-target="#device" aria-controls="device" >
                               <i class="fa-solid fa-minus"></i> <span class="text-padding">Read More</span>
                            </a>
                    
                </div>
            </div>
            <div class="trust_banner trust_banner_security" style="background-image: url(' {{ asset('public/front/images/data-security7.png') }}');">
                <!-- <img class="img-fluid" src="http://localhost/pcsgloballaravel/public/front/images/aus-img-7.png" alt="bg1" /> -->
                <div class="trust_card tax_preparation" id="jump-to-sec5">
                    <div class="trust_card_head">
                        <h3>Secure Data Storage</h3>
                        <span><img src="{{ asset('public/front/images/trust_icon.png') }}" alt="icon"></span>
                    </div>
                    <p>PCS protects data integrity and flexibility through an Encrypted network-attached storage (NAS), in which all data is safe and is returned to an irreversible schedule. Off-site replicas ensure reliable disaster recovery. The controlled server access is applied by restricting the administrative console to a predetermined IP range, which reduces the surface of the external attack. Sensitive data is rooted only through private internal networks of PCS Global, to maintain strict privacy to avoid public internet-was back by cybersecurity expertise and multi-level cybersecurity aid.
</p>
                    

 <a href="#" class="btn-trust-banner" data-bs-toggle="offcanvas" data-bs-target="#secure" aria-controls="secure" >
                               <i class="fa-solid fa-minus"></i> <span class="text-padding">Read More</span>
                            </a>
                </div>
            </div>
            <div class="trust_banner trust_banner_security" style="background-image: url(' {{ asset('public/front/images/data-security5.png') }}');">
                <!-- <img class="img-fluid" src="http://localhost/pcsgloballaravel/public/front/images/aus-img-7.png" alt="bg1" /> -->
                <div class="trust_card tax_preparation" id="jump-to-sec6">
                    <div class="trust_card_head" >
                        <h3>Compliance & Best Practices</h3>
                        <span><img src="{{ asset('public/front/images/trust_icon.png') }}" alt="icon"></span>
                    </div>
                    <p>PCS Global holds an internationally obedient security structure, aligning with major IT security standards including ISO 27001 and NIST CSF, ensuring a flexible and robust security culture. Our infrastructure is designed to support GDPR, HIPAA and ISO-aligned environment, making us a reliable cybersecurity company for areas such as healthcare, finance and global enterprises. With cyber security expertise and multilevel cyber security assistance, we perform quarterly penetration testing, monthly vulnerability scan and continuous patch management to develop.
</p>

 <a href="#" class="btn-trust-banner" data-bs-toggle="offcanvas" data-bs-target="#compliance" aria-controls="compliance" >
                               <i class="fa-solid fa-minus"></i> <span class="text-padding">Read More</span>
                            </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>Let’s Build our Future-Ready Backbone Schedule a Free Consultation.</h2>
                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

                            <!-- Bubble effect layers -->
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <!-- Label and Icon -->
                            <svg width="20" height="20" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.51089 1L6.15002 1.13169C6.91653 1.15942 7.59676 1.64346 7.89053 2.3702L8.96656 5.03213C9.217 5.65159 9.1496 6.35837 8.78693 6.91634L7.40831 9.0375C8.22454 10.2096 10.4447 12.9558 12.7955 14.5633L14.5484 13.4845C14.9939 13.2103 15.5273 13.1289 16.0314 13.2581L19.5161 14.1517C20.4429 14.3894 21.0674 15.2782 20.9942 16.2552L20.7705 19.2385C20.6919 20.2854 19.8351 21.1069 18.818 20.9887C5.39245 19.4276 -2.48056 0.99997 2.51089 1Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="color-button__label relative z-10 will-change-transform ms-2"> Schedule a Free
                                Consultation</span>

                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mt-4">
                    <div>
                        <img class="img-fluid" src="{{asset('public/front/images/coman_tree1.png')}}" alt="">
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
<div class="offcanvas offcanvas-start" tabindex="-1" id="device" aria-labelledby="deviceLabel">
                              <div class="offcanvas-header">
                               
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body p-4">
                                <div>
                                    <h3 class="offcanvas-head">Device & Data Flow Security</h3>
                                    <p>
PCS enforces strict role-based access and authentication protocols, using multi-factor authentication (MFA) and at least using users to reach authorized resources only. All internal communication between equipment and server is safe with TLS 1.3 and AES-256 encryption, providing strong data security services. Wired infrastructure is reinforced with controlled switches, managed DHCP and safe server configurations, including locked physical ports and RLAN partitions that restrict access to sensitive subnets for only specified equipment.

                                    </p>
                                 <ul>
                                      <li>
                                          Encrypted communication - TLS 1.3 between devices protects all internal data in transit, providing advanced cyber security and data protection solutions, AES-256 encryption and advanced cyber security for business and data safety solutions.

</li>
                                      <li>
                                          Role-Based Access & Authentication - MFA and least-privilege controls safeguard critical systems with enterprise-grade IT security solutions.

</li>
                                      <li>
                                          Safe Wired Infrastructure switch / DHCP / server-managed switch, DHCP, and server settings, plus physical port lock and RLAN division, provide multi-layered cyber security consultancy and support.

                                      </li>
                                    </ul>
                                </div>
                               
                              </div>
                            </div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="secure" aria-labelledby="secureLabel">
                              <div class="offcanvas-header">
                               
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                               <div class="offcanvas-body p-4">
                                <div>
                                    <h3 class="offcanvas-head">Secure Data Storage</h3>
                                    <p>
                                        PCS protects data integrity and flexibility through an Encrypted network-attached storage (NAS), in which all data is safe and is returned to an irreversible schedule. Off-site replicas ensure reliable disaster recovery. The controlled server access is applied by restricting the administrative console to a predetermined IP range, which reduces the surface of the external attack. Sensitive data is rooted only through private internal networks of PCS Global, to maintain strict privacy to avoid public internet-was back by cybersecurity expertise and multi-level cybersecurity aid.

                                    </p>
                                 <ul>
                                      <li>NAS Encryption and Backup Protocols: Encrypted storage, immutable backups, and off-site replication for complete data protection services.
</li>
                                      <li>Controlled Server Access (IP-Restricted): Limits administrative access to trusted IPs for enhanced IT security solutions.
</li>
                                      <li>Internal-Only Data Routing: Sensitive information stays within private infrastructure, ensuring compliance and data security solutions.</li>
                                    </ul>
                                </div>
                               
                              </div>
                            </div>
<div class="offcanvas offcanvas-start" tabindex="-1" id="compliance" aria-labelledby="complianceLabel">
                              <div class="offcanvas-header">
                               
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body p-4">
                                <div>
                                    <h3 class="offcanvas-head">Compliance & Best Practices</h3>
                                    <p>
PCS Global holds an internationally obedient security structure, aligning with major IT security standards including ISO 27001 and NIST CSF, ensuring a flexible and robust security culture. Our infrastructure is designed to support GDPR, HIPAA and ISO-aligned environment, making us a reliable cybersecurity company for areas such as healthcare, finance and global enterprises. With cyber security expertise and multilevel cyber security assistance, we perform quarterly penetration testing, monthly vulnerability scan and continuous patch management to develop.

                                    </p>
                                 <ul>
                                      <li>
                                          Adherence to International IT Security Standards: Compliance with ISO 27001, NIST CSF, and other global benchmarks for data security services.

</li>
                                      <li>
                                          Built for GDPR, HIPAA, and ISO-Aligned Environments: Secure infrastructure tailored for healthcare, finance, and cross-border cybersecurity solutions.

</li>
                                      <li>Regular Audits and Upgrades: Proactive defense with scheduled penetration tests, vulnerability scans, and ongoing IT security solutions.
</li>
                                    </ul>
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
    "name": "What is data security and why is it critical for businesses?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The Data Security Services protect from breaches of sensitive business data, deliver compliance, ensure operational integrity, and provide confidence to customers."
    }
  },{
    "@type": "Question",
    "name": "What are the risks of poor data security practices?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Organizations that do not invest in adequate Cyber Security Solutions face breaches of data, regulatory fines and a reduction in reputation that can take quarters or years to restore."
    }
  },{
    "@type": "Question",
    "name": "How do organizations recover data after a breach or attack?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our Cyber Security Services Company offers rapid incident response, accurate analysis, and secure recovery through proven Data Protection Services."
    }
  },{
    "@type": "Question",
    "name": "What are the most common types of cyber threats?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our cybersecurity specialists deal with ransomware, malware, phishing, insider threats and advanced persistent threats on a regular basis."
    }
  },{
    "@type": "Question",
    "name": "What are best practices for securing cloud-stored data?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Cybersecurity & Data Protection Solutions deploy encryption, Multi-Factor Authentication, access protocols and audits over cloud environments to ensure security."
    }
  },{
    "@type": "Question",
    "name": "What does a cybersecurity audit involve?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "A Data Security Audit looks, analyzes and reports on your organization's IT Security Solutions, policies and vulnerabilities, which may improve your organization's level of cyber security."
    }
  },{
    "@type": "Question",
    "name": "How does PCS Global help companies protect against cyber threats?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "PCS Global provides multi-layered cybersecurity support and real-time threat intelligence with original and custom cybersecurity solutions."
    }
  },{
    "@type": "Question",
    "name": "What types of cyber attacks does PCS Global defend against?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our Cyber Security Company deploys solutions against a range of threat actors. We look after your business from obvious threats like ransomware, phishing, and more serious matters like zero-day exploits, insider threats and DDoS attacks."
    }
  },{
    "@type": "Question",
    "name": "How can PCS Global assist in recovering from a cyber attack?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We offer comprehensive 24/7 Managed Security Services, ensuring rapid containment, data restoration, and post-breach security hardening."
    }
  },{
    "@type": "Question",
    "name": "What makes PCS Global’s cybersecurity solutions stand out from competitors?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our cybersecurity consultants have years of cybersecurity experience, along with professional, qualified specialists in AI threat detection and compliance for IT Security Solutions for businesses."
    }
  },{
    "@type": "Question",
    "name": "Does PCS Global offer 24/7 cyber threat monitoring?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes - as part of the cyber security for business experience, our offering includes continuous monitoring from the best experienced cyber security experts in the world."
    }
  }]
}
</script>
@endverbatim
@include('layouts.frontfooter')
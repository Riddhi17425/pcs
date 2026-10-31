@extends('layouts.app', [
    'og_image' => asset('public/front/images/hire-offshore-accountant/offshore-accounting-staff-for-cpa-and-accounting-firms.webp')
])

@push('styles')
    @foreach (['common/hero-dark.css', 'common/home-sections.css', 'pages/accounting-outsourcing.css', 'common/service-split.css', 'pages/hire-offshore-accountant.css'] as $css)
        <link rel="stylesheet" href="{{ asset('public/front/css/' . $css) }}?v={{ filemtime(public_path('front/css/' . $css)) }}">
    @endforeach
@endpush

@section('content')
@php
    $img = fn ($file) => asset('public/front/images/' . $file);
    $bubbleColors = '["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0"]';
    $heroTitle = 'Hire Offshore Accountants';
    $heroText = 'Finding the right accountant is one of the biggest challenges for U.S. businesses and CPA firms today. Hiring in-house is expensive, time-consuming, and carries ongoing overhead costs that grow with every new hire. PCS Global gives you a smarter alternative. When you hire offshore accountants through us, you get qualified, experienced finance professionals who work exclusively on your accounts, understand U.S. GAAP and IRS compliance requirements, and integrate seamlessly into your existing workflows - at a significantly lower cost than a local hire.';
    $heroButtons = ['Book a Free Consultation', 'Talk to Our Experts'];
    $heroUsps = ['Experienced Accountants', 'Cost-Effective Accounting Support', 'Flexible & Scalable Teams', 'Secure & Confidential Processes'];

    $whatTitle = 'What is an Offshore Accountant?';
    $whatParas = ['An offshore accountant is a certified accounting professional based outside the United States who provides support on a remote basis. It services various financial needs such as bookkeeping, payroll, tax preparation, accounts payable and receivable, financial reporting, and compliance on the same level as you would expect from in-house accounting personnel, but for a considerably lower cost.', 'At PCS Global, our offshore accountants are trained in U.S. GAAP standards and IRS regulations, work within your preferred time zone, and operate as a dedicated extension of your business or accounting firm. They are not shared resources or call centre staff but qualified experts assigned specifically to your account.'];

    $whyHireTitle = 'Why Hire an Offshore Accountant Instead of an In-House Accountant?';
    $whyHireParas = ['The cost of employing an accountant full-time in the U.S. includes salary, payroll taxes, health insurance benefits, paid vacation, software licenses, and additional training expenses. For many businesses and accounting firms, this overhead can be hard to bear due to the fluctuations in the volume of accounting workload throughout the year.', 'If you hire an outsourced accountant via PCS Global, it means you are using top-level, certified professionals without any of the overhead of hiring employees. It is responsive, adaptable, scalable, and based entirely on what your company is doing at that precise moment in time. You will pay for what is actually completed, and not for desks, downtime, or a benefits package.', 'The result is a leaner, more efficient finance function that delivers better output at a lower overall cost, and one that can scale quickly when your workload increases without the delays that come with traditional hiring.'];
    $whyHireCta = 'Book a Free Consultation';

    $challengesTitle = 'How Offshore Accounting Solves Common Business Challenges';
    $challengesIntro = 'Most businesses and CPA firms that explore offshore accounting are dealing with one or more of these common challenges:';
    $challenges = [
        ['title' => 'High overhead costs', 'text' => 'Salaries, benefits, and infrastructure for in-house accounting staff are high fixed costs. Offshore accounting removes this overhead while maintaining quality.'],
        ['title' => 'Difficulty finding qualified talent', 'text' => 'Highly skilled talent in the US for accounting purposes can be difficult and costly to find. Offshore can provide you with instant qualified personnel, skipping the recruitment challenges.'],
        ['title' => 'Capacity gaps during peak seasons', 'text' => 'The peak workloads during tax seasons, year-end, and audit periods can be managed by scalable offshore staff rather than a non-variable in-house team.'],
        ['title' => 'Compliance risk', 'text' => 'Accounting errors and missed filings increase your regulatory risk. Our offshore experts are 100% dedicated to your accounts and eliminate the chance of human error and missed filings.'],
        ['title' => 'Lack of financial visibility', 'text' => 'Accounting/reporting must be accurate and up-to-date. An offshore accountant will ensure your accounts are accurately managed, and reports are submitted on time, thus allowing business decisions to be made on solid ground.'],
    ];

    $rolesTitle = 'Offshore Accounting Experts You Can Hire From PCS Global';
    $rolesIntro = 'PCS Global provides dedicated offshore professionals across a wide range of accounting and finance roles. Whether you need a single specialist or a full offshore accounting team, we match the right people to your specific requirements.';
    $roles = [
        ['title' => 'Hire Offshore Accounts Payable Clerk', 'text' => 'Processes vendor invoices, schedules and executes payments, performs three-way matching, and maintains accurate AP records. Ensures all payables are settled on time and vendor relationships are maintained.'],
        ['title' => 'Hire Offshore Accounts Receivable Clerk', 'text' => 'Prepare and issue customer invoices, track accounts and follow up on overdue payments, and reconcile receivables monthly. Keeps your cash flow running and AR aging reports updated.'],
       
        ['title' => 'Hire Offshore Accountant Manager', 'text' => 'Manages your offshore accounting function, distributes workflow amongst the team, checks work for accuracy, and acts as the point of contact between your company and the offshore finance function.'],
       
        ['title' => 'Hire Offshore Tax Accountant', 'text' => 'Specializes in federal and state tax return preparation for individuals, corporations, S corps, partnerships, and LLCs. Proficient with all IRS-required filing formats, such as Form 1040, Form 1120, Form 1120S, and Form 1065.'],
        ['title' => 'Hire Offshore Finance and Accounting Staff', 'text' => 'Ongoing general finance support providing bookkeeping, data entry, bank reconciliations, management accounts preparation, and any other ongoing accounting support your business needs.'],
        ['title' => 'Hire Offshore Account Representatives', 'text' => 'In the finance function of your organization, it is responsible for managing client account communication, invoice payment reminders, account status for payment, and relationship management.'],
    ];
    $rolesCta = 'Tell Us What You Need - We Will Find the Right Match';

    $notSureTitle = 'Not Sure Which Role You Need? We Will Help You Figure It Out';
    $notSureText = 'Every business has different accounting requirements. Talk to our team today, and we will recommend the right offshore accounting professional for your specific workload, budget, and business goals.';
    $notSureCta = 'Discuss Your Requirements';

    $cpaTitle = 'Offshore Accounting Staff for CPA and Accounting Firms';
    $cpaParas = ['For CPA and accounting firms specifically, offshore staffing solves a very particular problem. Client demand grows, deadlines pile up, and the cost of expanding your in-house team often makes it financially difficult to justify taking on new clients.', 'When you hire offshore accountants for your CPA firm, you add qualified, trained capacity to your practice without adding to your fixed payroll. Your accounting staff works under your supervision, follows your firm\'s processes, and handles work that would otherwise require additional in-house hires, including bookkeeping, tax preparation, financial reporting, payroll, and compliance tasks.', 'PCS Global works with accounting firms of all sizes across the U.S. Our offshore accounting staff is trained in U.S. GAAP, familiar with the software platforms accounting firms use, and capable of managing real client work from day one. Many firms employ our offshore accounting professionals to handle overflow during busy seasons, expand their service capacity, or build a cost-effective back-office function that runs year-round.'];
    $cpaCta = 'Hire Offshore Accountants for Your CPA Firm Today';

    $stepsTitle = 'Our Simple Process for Hiring Offshore Accountants';
    $steps = [
        ['title' => 'Initial Consultation', 'text' => 'First, we will discuss with you to understand your business and accounting needs, the volume of work, and which role (s) you wish to recruit.'],
        ['title' => 'Candidate Matching', 'text' => 'We choose the right professional or team from our pool of hired offshore accountants depending on your needs, such as the right expertise, software knowledge, technology skills, accounting procedures, and industry specialization skills.'],
        ['title' => 'Review and Selection', 'text' => 'You get to browse profiles, ask questions, and choose the person or people with whom you are comfortable working. You don\'t have to continue if you are not confident that he/she is the right fit.'],
        ['title' => 'Onboarding and Setup', 'text' => 'We handle all aspects of the onboarding process, right from software access and workflow set up to any business-specific training needed. Your accountant will be set to begin work from day one.'],
        ['title' => 'Ongoing Management and Support', 'text' => 'PCS Global actively monitors your offshore workers, manages their productivity, and offers ongoing support so that the work is maintained to the level of quality that your business requires, on an ongoing basis.'],
    ];
    $fiveTitle = 'Ready to Build Your Offshore Accounting Team?';
    $fiveText = 'Find experienced accounting professionals who fit your business needs. Let PCS Global simplify hiring, onboarding and ongoing accounting support.';
    $fiveCta = 'Request a Consultation';

   

    $safeTitle = 'How PCS Global Ensures Data Security and Confidentiality';
    $safeParas = ['At PCS Global, we prioritise client data security and confidentiality through a robust security framework that addresses the key concerns businesses have when choosing offshore accounting services.'];
    $safeCards = [
        ['title' => 'Encrypted Systems', 'text' => 'Every single piece of financial data is transferred securely and stored with enterprise-level data security encryption at all points.'],
        ['title' => 'Strict Access Controls', 'text' => 'Access to client data is limited to the specific team members working on your account. No data is accessible to unauthorised personnel at any level.'],
        ['title' => 'Confidentiality Agreements', 'text' => 'Every offshore professional working on your account signs a confidentiality agreement before accessing any client information.'],
        ['title' => 'Secure Communication Channels', 'text' => 'All communication, file sharing, and collaboration take place through secure, approved platforms. No client data is transmitted through unsecured channels.'],
        ['title' => 'Compliance with U.S. Data Protection Standards', 'text' => 'Our processes are structured to align with U.S. data privacy expectations, ensuring your client and business information is handled responsibly and in line with applicable requirements.'],
    ];
    

    $industriesTitle = 'Industries We Serve';
    $industriesIntro = 'At PCS Global, we supplement businesses and companies from many different sectors of the market. We have accounting staff with practical working experience with customers based in:';
    $industryNames = ['CPA and Accounting Firms', 'Small and Medium Businesses', 'Startups and Growing Companies', 'E-Commerce and Retail', 'Real Estate and Property Management', 'Healthcare and Professional Services', 'Technology and IT Companies', 'Manufacturing and Distribution', 'Non-Profit Organisations'];

    $whyChooseTitle = 'Why Choose PCS Global Over Other Offshore Accounting Providers?';
    $whyChooseIntro = 'When you hire a dedicated accountant from PCS Global, you are getting much more than a staffing service-you are getting a veteran offshore accounting provider who understands the process and structure and has helped U.S. Businesses for more than 18 years.';
    $whyChooseItems = [
        ['title' => '18 Years of Experience', 'text' => 'PCS Global has been providing high-quality offshore finance and accounting support to U.S. businesses since 2006. That is 18 years of refined processes, qualified professionals, and consistent delivery that businesses and CPA firms across the U.S. rely on.'],
        ['title' => 'Qualified Professionals', 'text' => 'Our offshore accountants hold recognised accounting qualifications including CPA, ACCA, and CA credentials. Every professional has hands-on experience working with U.S. businesses, accounting standards, and IRS compliance requirements.'],
        ['title' => 'Dedicated Accounting Team', 'text' => 'You are not sharing a resource with multiple other clients. When you hire offshore accountants via us, that person or team works exclusively on your account with full focus and accountability.'],
        ['title' => 'Seamless Integration', 'text' => 'Our offshore staff integrates into your existing workflows, software systems, and communication channels. To your business, they function as a natural extension of your team.'],
        ['title' => 'Flexible Engagement Models', 'text' => 'Full-time, part-time, or project-based. We structure every engagement around what your business actually needs, with the flexibility to scale up or down as your requirements change.'],
        ['title' => 'Consistent Quality Controls', 'text' => 'Every piece of work goes through a structured internal review before delivery. Our quality control processes ensure consistent accuracy and reliability across every engagement, every month.'],
    ];

    $countriesTitle = 'Countries We Serve: USA, UK, and Australia';
    $countriesIntro = 'PCS Global provides offshore accounting staff to clients across three primary markets:';
    $countries = [
    [
        'title' => 'United States',
        'text' => 'Assisting American businesses, CPA firms, and accounting practices with offshore accountants versed in U.S. GAAP, U.S. IRS procedures, and federal and state compliance guidelines.',
        'button' => ['Explore US Accounting Services', route('pcs.global.usa')]
    ],
    [
        'title' => 'United Kingdom',
        'text' => 'Supporting UK businesses and accountancy firms with offshore team members that meet UK accounting standards, know HMRC, understand MTD, and work in line with the Companies House guidelines.',
        'button' => ['Explore UK Accounting Services', route('accounting.outsourcing.services')]
    ],
    [
        'title' => 'Australia',
        'text' => 'Assisting Australian businesses and accounting firms by providing them with a fully trained offshore accountant accustomed to Australian accounting standards, ATO regulations, GST and MYOB/Xero workflows.',
        'button' => ['Explore AUS Accounting Services', route('pcs.global.aus')]
    ],
];

        $regions = [
        ['title' => 'Outsourced Bookkeeping Services for USA', 'img' => $img('bookkeeping-outsourcing/outsourced-bookkeeping-services-for-usa.webp'),
         'button' => ['Explore US Bookkeeping Services', route('pcs.global.usa')],
         'text' => 'For US businesses and CPA firms, we maintain books in QuickBooks, Xero and similar platforms, track sales tax collected and keep vendor records current for year-end information reporting.'],
        ['title' => 'Outsourced Bookkeeping Services for UK', 'img' => $img('bookkeeping-outsourcing/outsourced-bookkeeping-services-for-uk.webp'),
         'button' => ['Explore UK Bookkeeping Services', route('accounting.outsourcing.services')],
         'text' => 'For UK businesses and practices, we code transactions for VAT and maintain digital records in Making Tax Digital-compatible software. Books are ready for each VAT return and, where applicable, for Making Tax Digital for Income Tax quarterly updates.'],
        ['title' => 'Outsourced Bookkeeping Services for Australia', 'img' => $img('bookkeeping-outsourcing/outsourced-bookkeeping-services-for-australia.webp'),
         'button' => ['Explore AUS Bookkeeping Services', route('pcs.global.aus')],
         'text' => 'For Australian businesses and firms, we code transactions for GST and keep the books BAS-ready throughout the quarter. Your registered BAS or tax agent reviews and lodges the BAS.'],
    ];


    $countriesOutro = 'No matter what market you are operating in, PCS Global has offshore accounting professionals who are fully aware of the exact local compliance, regulatory frameworks, and accounting standards that apply to your region.';



    $finalTitle = 'Your Dedicated Offshore Accountant Is Already Waiting.';
    $finalText = 'PCS Global connects you with qualified offshore accounting professionals who are trained, vetted, and ready to get to work, so your finances are in the right hands without the wait.';
    $finalCta = 'Hire an Offshore Accountant Now';

    $faqs = [
        ['q' => 'What is an offshore accountant?', 'a' => 'An offshore accountant is an established accounting specialist from another country who can perform your accounting needs - such as accounting, payroll, and tax return preparation - remotely at a substantially less expensive cost than hiring someone in-house.'],
        ['q' => 'Is it safe to hire an offshore accountant for my business or CPA firm?', 'a' => 'Yes. PCS Global uses the most secure data protection methods possible, including encrypted systems, controlled access, confidentiality agreements, and secure communication channels.'],
        ['q' => 'How is an offshore accountant different from an outsourced accounting firm?', 'a' => 'With an outsourcing accounting service, your business is one among a pile. With a PCS offshore accountant, it can be their full-time job managing all work on your behalf as part of your team.'],
        ['q' => 'Do offshore accountants understand US, UK, and Australian tax laws and compliance requirements?', 'a' => 'Yes. In addition to a broad range of offshore accounting expertise, all PCS Global offshore accountants are fully trained and compliant with all U.S. GAAP, IRS regulations, HMRC requirements, and Australian ATO rules relevant to your business markets.'],
        ['q' => 'How long does it take to hire and onboard an offshore accountant?', 'a' => 'All engagements can be onboarded in 1-2 weeks after first contact/consultation (depending on role and set-up work required)'],
        ['q' => 'Can offshore accountants work in my time zone?', 'a' => 'Yes. Our offshore staff will work during your working hours. Therefore, there will be perfect communication and prompt response without interfering with your daily operations.'],
        ['q' => 'What accounting software do offshore accountants use?', 'a' => 'Our offshore accountants are proficient across QuickBooks, Xero, NetSuite, Sage, Drake Tax, UltraTax, Bill.com, Dext, and MYOB, and can adapt to other platforms your business uses.'],
        ['q' => 'Can I hire an offshore accountant for my CPA or accounting firm specifically?', 'a' => 'Yes. We work a great deal with accounting and CPA firms, providing exclusive offshore staffing for tax preparation, bookkeeping, financial statement preparation, payroll, and other accounting back-office functions.'],
        ['q' => 'What qualifications do offshore accountants have?', 'a' => 'Our offshore accountants hold up-to-date qualifications such as CPA, ACCA, CA, and equivalent certifications, and they have practical exposure to US, UK, and Australian accounting standards and compliance.'],
    ];


    $roleImages = [
        'hire-offshore-accountant/hire-offshore-accountant-manager.webp',
        'hire-offshore-accountant/hire-offshore-accounts-payable-clerk.webp',
        'hire-offshore-accountant/hire-offshore-accounts-receivable-clerk.webp',
        'hire-offshore-accountant/hire-offshore-tax-accountant.webp',
        'hire-offshore-accountant/hire-offshore-finance-and-accounting-staff.webp',
        'hire-offshore-accountant/hire-offshore-account-representatives.webp',
    ];
    $softwareImages = [
        'bookkeeping-outsourcing/invoice-and-expense-management.webp',
        'bookkeeping-outsourcing/bank-and-credit-card-reconciliation.webp',
        'bookkeeping-outsourcing/management-reporting-and-financial-data.webp',
        'payroll-outsourcing/payroll-reports-reconciliation.webp',
        'tax-outsourcing/corporate-tax-preparation.webp',
        'bookkeeping-outsourcing/month-end-bookkeeping-and-closing.webp',
        'bookkeeping-outsourcing/secure-document-sharing.webp',
        'bookkeeping-outsourcing/financial-statement-preparation.webp',
        'tax-outsourcing/australia-tax-outsourcing.webp',
    ];
    $safeImages = [
        'hire-offshore-accountant/encrypted-systems.webp',
        'hire-offshore-accountant/strict-access-controls.webp',
        'hire-offshore-accountant/confidentiality-agreements.webp',
        'hire-offshore-accountant/secure-communication-channels.webp',
        'hire-offshore-accountant/compliance-with-us-data-protection-standards.webp',
    ];
    $countryImages = ['hire-offshore-accountant/offshore-accounting-staff-united-states.webp', 'hire-offshore-accountant/offshore-accounting-staff-united-kingdom.webp', 'hire-offshore-accountant/offshore-accounting-staff-australia.webp'];
    $industryIcons = ['accounting-and-auditing-firms.png', 'Professional-Services.png', 'industries9.png', 'E-commerce-Retail.png', 'Real-Estate.png', 'Healthcare.png', 'Technology-Companies.png', 'Manufacturing.png', 'industries6.png'];
    $industryRows = [[], []];
    foreach ($industryNames as $i => $name) {
        $industryRows[$i < 5 ? 0 : 1][] = [$img($industryIcons[$i]), $name];
    }

    $icon = [
        'award'  => '<circle cx="12" cy="9" r="5.5"/><path d="m8.5 13.3-1.5 7.2 5-2.7 5 2.7-1.5-7.2"/>',
        'cost'   => '<circle cx="12" cy="12" r="9"/><path d="M14.8 9.2c-.5-.9-1.6-1.4-2.8-1.4-1.6 0-2.8.8-2.8 2.1 0 3 5.6 1.5 5.6 4.3 0 1.3-1.2 2.1-2.8 2.1-1.3 0-2.4-.5-2.9-1.5"/><path d="M12 6.5v1.3M12 16.9v1.3"/>',
        'scale'  => '<path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>',
        'lock'   => '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>',
        'search' => '<circle cx="11" cy="11" r="7"/><path d="m20.5 20.5-4.5-4.5"/>',
        'team'   => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'scope'  => '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1"/><path d="M9 10h6M9 14h6M9 18h3"/>',
        'growth' => '<path d="M3 20h18"/><path d="m5 16 4-4 3 3 7-7"/><path d="M15 8h4v4"/>',
        'accuracy' => '<circle cx="12" cy="12" r="9"/><path d="m8 12.5 2.7 2.7L16.5 9"/>',
        'clock'  => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'focus'  => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.2"/>',
        'folder' => '<path d="M3 7a2 2 0 0 1 2-2h4l2 2.5h8a2 2 0 0 1 2 2V18a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Z"/><path d="M8 14h8"/>',
    ];
    $heroIcons = ['award', 'cost', 'scale', 'lock'];
    $challengeIcons = ['cost', 'search', 'clock', 'accuracy', 'focus'];
    $stepIcons = ['search', 'team', 'accuracy', 'scope', 'growth'];

    $formServices = ['Accounting Outsourcing', 'Bookkeeping Outsourcing', 'Taxation Outsourcing', 'Payroll Outsourcing', 'Recruitment Outsourcing', 'Strata Management Services'];
@endphp

<section class="acc_hero_light">
    <div class="container">
        <div class="acc_hero_inner">
            <div class="acc_hero_text">
                <h1><span>Hire Offshore Accountants</span></h1>
                <p>{{ $heroText }}</p>
                <div class="acc_hero_btns">
                    <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $heroButtons[0] }}</a>
                    <a class="com_btn_outline" href="tel:{{ $site['phone']['tel'] }}">{{ $heroButtons[1] }}
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none" aria-hidden="true"><path d="M2.3134 0.76742L6.03706 0.902169C6.82137 0.930543 7.5174 1.42583 7.81799 2.16945L8.91901 4.8932C9.17527 5.52705 9.10631 6.25025 8.73521 6.82118L7.32457 8.99161C8.15976 10.1909 10.4315 13.0009 12.8369 14.6458L14.6305 13.5419C15.0864 13.2613 15.6321 13.178 16.1479 13.3102L19.7136 14.2246C20.6619 14.4678 21.3009 15.3773 21.226 16.3769L20.9971 19.4295C20.9167 20.5008 20.04 21.3413 18.9993 21.2204C5.26189 19.623 -2.79399 0.767389 2.3134 0.76742Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
            <div class="acc_hero_benefits">
                @foreach ($heroUsps as $i => $usp)
                    <div class="acc_hero_benefit">
                        <span class="acc_hero_benefit_icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icon[$heroIcons[$i]] !!}</svg>
                        </span>
                        <span>{{ $usp }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('hire-offshore-accountant/what-is-an-offshore-accountant.webp') }}" loading="lazy" alt="{{ $whatTitle }}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter_lt acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">{{ $whatTitle }}</h2>
                    @foreach ($whatParas as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">{{ $whyHireTitle }}</h2>
                    @foreach ($whyHireParas as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                    <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $whyHireCta }}</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('hire-offshore-accountant/why-hire-an-offshore-accountant-instead-of-an-in-house-hire.webp') }}" loading="lazy" alt="{{ $whyHireTitle }}">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $rolesTitle }}</h2>
            <p>{{ $rolesIntro }}</p>
        </div>

        <div class="precision_grid acc_services_grid {{ count($roles) % 3 ? 'precision_grid_center' : '' }}">
            @foreach ($roles as $i => $card)
                <div class="precision_card">
                    <div class="precision_card_img">
                        <img src="{{ $img($roleImages[$i]) }}" loading="lazy" alt="{{ $card['title'] }}">
                    </div>
                    <div class="precision_card_body">
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>{{ $notSureTitle }}</h2>

                        <p>{{ $notSureText }}</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <span class="color-button__label relative z-10 me-2">{{ $notSureCta }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="svc_split mt-100">
    <div class="container">
        <div class="svc_split_inner">
            <div class="svc_split_intro svc_reveal">
                <h2>{{ $challengesTitle }}</h2>
                <p>{{ $challengesIntro }}</p>
                <div class="svc_split_img">
                    <img src="{{ $img('hire-offshore-accountant/how-offshore-accounting-solves-common-business-challenges.webp') }}" loading="lazy" alt="{{ $challengesTitle }}">
                </div>
            </div>

            <ol class="svc_split_list">
                @foreach ($challenges as $i => $item)
                    <li class="svc_split_row svc_reveal">
                        <span class="svc_split_icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icon[$challengeIcons[$i]] !!}</svg>
                        </span>
                        <div>
                            <h3>{{ $item['title'] }}</h3>
                            <p>{{ $item['text'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>

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

@push('scripts')
<script src="{{ asset('public/front/js/trust-slider.js') }}?v={{ filemtime(public_path('front/js/trust-slider.js')) }}" defer></script>
@endpush

<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $industriesTitle }}</h2>
            <p>{{ $industriesIntro }}</p>
        </div>
    </div>

    <div class="industries_bot">
        <div class="ind_marquee">
            @foreach ($industryRows as $row)
                <div class="ind_row {{ $loop->odd ? 'ind_row_up' : 'ind_row_down' }}">
                    <div class="ind_track" style="animation-duration: {{ count($row) * 7.5 }}s">
                        @foreach ([1, 2, 3, 4] as $copy)
                            @foreach ($row as [$iconImg, $label])
                                <div class="industries_card" @if ($copy > 1) aria-hidden="true" @endif>
                                    <div class="industries_icon"><img src="{{ $iconImg }}" loading="lazy" alt="{{ $copy > 1 ? '' : $label }}"></div>
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

<section class="trust_slider_sec trust_grid_sec mt-100">
    <div class="container">
        <div class="trust_grid_head">
            <h2>{{ $countriesTitle }}</h2>
            <p>{{ $countriesIntro }}</p>
        </div>
        <div class="trust_grid acc_region_grid">
            @foreach ($countries as $i => $card)
                <div class="trust_slide">
                    <div class="trust_slide_img">
                        <img src="{{ $img($countryImages[$i]) }}" loading="lazy" alt="{{ $card['title'] }}">
                    </div>
                    <div class="trust_slide_body">
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                    </div>
                     <div class="trust_slide_btn">
<a class="com_btn_outline com_btn_outline_light"
   href="{{ $card['button'][1] }}">
    {{ $card['button'][0] }}
    <span aria-hidden="true">&rarr;</span>
</a>                   </div>
                </div>
            @endforeach
        </div>
       
    </div>
</section>

<section class="process_sec mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $stepsTitle }}</h2>
             <p class="">{{ $countriesOutro }}</p>
        </div>

        <div class="process_steps" data-slider data-slider-controls="slider4" data-slider-show="3" data-slider-controls-visible="{{ count($steps) > 3 ? 'true' : 'false' }}">
            @foreach ($steps as $step)
                <div class="process_card">
                    <div class="process_head">
                        <span class="process_icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icon[$stepIcons[$loop->index]] !!}</svg>
                        </span>
                    </div>
                    <div class="process_body">
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
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

<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>{{ $fiveTitle }}</h2>

                        <p>{{ $fiveText }}</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <span class="color-button__label relative z-10 me-2">{{ $fiveCta }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('hire-offshore-accountant/offshore-accounting-staff-for-cpa-and-accounting-firms.webp') }}" loading="lazy" alt="{{ $cpaTitle }}">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter_lt acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">{{ $cpaTitle }}</h2>
                    @foreach ($cpaParas as $paragraph)
                        <p>{{ $paragraph }}</p>
                    @endforeach
                    <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ $cpaCta }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $safeTitle }}</h2>
            @foreach ($safeParas as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>

        <div class="our_experts_cen">
            <div class="ov_slider" data-slider data-slider-controls="slider5" data-slider-show="3">
                @foreach ($safeCards as $i => $card)
                    <div>
                        <div class="ov_card">
                            <img src="{{ $img($safeImages[$i]) }}" loading="lazy" alt="{{ $card['title'] }}">
                            <div class="ov_card_body">
                                <div class="ov_card_head">
                                    <h3>{{ $card['title'] }}</h3>
                                    <img src="{{ $img('common/security-icon.svg') }}" width="33" height="30" alt="">
                                </div>
                                <p>{{ $card['text'] }}</p>
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

<section class="acc_why mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">{{ $whyChooseTitle }}</h2>
            <p>{{ $whyChooseIntro }}</p>
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img('hire-offshore-accountant/why-choose-pcs-global-over-other-offshore-accounting-providers.webp') }}" loading="lazy" alt="{{ $whyChooseTitle }}">
            </div>
            <div class="split_acc_list accordion" id="whyAcc">
                @foreach ($whyChooseItems as $i => $item)
                    <div class="split_acc_item">
                        <button type="button" class="split_acc_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse"
                            data-bs-target="#whyAcc{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="whyAcc{{ $i }}">
                            <span>{{ $item['title'] }}</span>
                            <img src="{{ $img('common/icon-plus.svg') }}" width="32" height="32" alt="">
                        </button>
                        <div id="whyAcc{{ $i }}" class="split_acc_body collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#whyAcc">
                            <p>{{ $item['text'] }}</p>
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

<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>{{ $finalTitle }}</h2>

                        <p>{{ $finalText }}</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <span class="color-button__label relative z-10 me-2">{{ $finalCta }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-80">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="faq-head mb-2 mb-xxl-4">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="fre_ques accordion" id="accFaq">
                    @foreach ($faqs as $i => $item)
                        <div class="fre_que">
                            <h3 class="sub_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#accFaq{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="accFaq{{ $i }}">
                                {{ $item['q'] }}
                            </h3>
                            <div id="accFaq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#accFaq">
                                <p>{{ $item['a'] }}</p>
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
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ], $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_PRETTY_PRINT) !!}
</script>

<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>{{ $rolesCta }}</h2>
            <p>{{ $notSureText }}</p>
        </div>

        <form id="contactBandForm" class="validated-form contact_band_form" action="{{ route('request.store') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="form_type" value="India Footer Form">
            <input type="hidden" name="country" id="cfCountry" value="India">
            <input type="hidden" name="full_phone" id="cfFullPhone">
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
                <div class="col-12 cf_field">
                    <select name="service" aria-label="Choose Service" required>
                        <option value="" hidden>Choose Service*:</option>
                        @foreach ($formServices as $service)
                            <option value="{{ $service }}" @selected($service === 'Accounting Outsourcing')>{{ $service }}</option>
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
                <button type="submit" class="com_btn2 color-animated-button bubble-btn" data-hover-colors='{{ $bubbleColors }}'>
                    <span class="color-button__background"></span>
                    <span class="color-button__bubble-container">
                        <span class="color-button__bubble"></span>
                    </span>
                    <span class="color-button__label relative z-10">{{ $finalCta }}</span>
                </button>
            </div>
        </form>
    </div>
</section>
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
        initialCountry: @json($site['phone_country'] ?? 'in'),
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

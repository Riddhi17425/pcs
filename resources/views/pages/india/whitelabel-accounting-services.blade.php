@extends('layouts.app')

@push('styles')
    @foreach (['common/hero-dark.css', 'common/home-sections.css', 'pages/accounting-outsourcing.css', 'common/service-split.css'] as $css)
        <link rel="stylesheet" href="{{ asset('public/front/css/' . $css) }}?v={{ filemtime(public_path('front/css/' . $css)) }}">
    @endforeach
@endpush

@section('content')
@php
    $img = fn ($file) => asset('public/front/images/' . $file);
    $bubbleColors = '["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0"]';

    $heroText = 'Scale your accounting firm with affordable white label accounting services from PCS Global. Our dedicated offshore accounting professionals help CPA firms, accounting firms, and bookkeeping businesses reduce costs, increase capacity, and deliver more value under their own brand.';
    $heroBenefits = [
        ['Dedicated Accounting Teams', '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>'],
        ['ISO 27001 & 9001 Certified', '<circle cx="12" cy="9" r="5.5"/><path d="m8.5 13.3-1.5 7.2 5-2.7 5 2.7-1.5-7.2"/>'],
        ['GDPR Compliant & Secure', '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>'],
        ['Trusted by Global Accounting Firms', '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3c2.5 2.5 3.8 5.5 3.8 9s-1.3 6.5-3.8 9c-2.5-2.5-3.8-5.5-3.8-9S9.5 5.5 12 3Z"/>'],
    ];

    $software = ['Homepage_01.png', 'Homepage_02.png', 'Homepage_03.png', 'Homepage_04.png', 'Homepage_05.png', 'Homepage_06.png', 'Homepage_07.png', 'Homepage_08.png', 'Homepage_09.png', 'Homepage_10.png', 'Homepage_11.png', 'Homepage_12.png', 'Homepage_13.png', 'Homepage_14.png', 'Homepage_15.png', 'Homepage_16.png', 'Homepage_17.png', 'Homepage_18.png', 'Homepage_19.png', 'Homepage_20.png', 'Homepage_21.png', 'Homepage_22.png', 'Homepage_23.png', 'Homepage_24.png', 'Homepage_25.png', 'Homepage_26.png', 'Homepage_27.png', 'Homepage_28.png', 'Homepage_29.png'];

    $aboutParas = [
        'Our accounting services work on a white-label business model. Your company offers accounting work to your end clients under your own brand name, while our outsourcing team handles it in the background. Your clients only see your brand and deal only with you.',
        'This is what sets it apart from simple outsourcing, where the outside firm is often visible to the client. With white label accounting, offshore teams stay completely hidden from your clients, so your firm keeps full ownership of the client relationship.',
        'With our white label accounting solutions, you get skilled accountants handling the daily work behind the scenes. That means you can serve more clients and expand your firm, without the effort and cost of hiring in-house.',
    ];

    $benefitsIntro = 'White label accounting helps growing firms scale efficiently by delivering expert accounting services under your brand without expanding your in-house team. It reduces costs, increases capacity, and lets you focus on client growth.';
    $benefits = [
        ['title' => 'Reduce Operational Costs', 'icon' => 'cost',
         'text' => 'Hiring and training in-house accountants is expensive, and the cost never really stops. With white label support, you pay only for the work you need. There are no software licences or office costs to carry, which protects your margins.'],
        ['title' => 'Scale Without Hiring Locally', 'icon' => 'scale',
         'text' => 'When work comes up, you have to recruit, which is slow and costly. White label gives you a ready team to rely on, so you can take on more clients or handle busy seasons without posting a job advert or renting more office space.'],
        ['title' => 'Access Skilled Accounting Professionals', 'icon' => 'award',
         'text' => 'You get qualified accountants who work across US, UK, and Australian standards. That means you can offer your clients a wider range of services than your own team might cover, from bookkeeping to complex reporting, without having to find and hire staff.'],
        ['title' => 'Increase Profit Margins', 'icon' => 'growth',
         'text' => 'Because white label work costs you less than employing staff, the gap between what you charge and what you pay widens. You bill at your usual rates while keeping your delivery costs low, so every client you serve adds more to your profits.'],
        ['title' => 'Improve Turnaround Times', 'icon' => 'clock',
         'text' => 'With a dedicated team behind you, tasks get done quickly and returned on time, even during peak periods. Faster turnaround keeps your clients happy and makes your firm look professional and reliable.'],
        ['title' => 'Focus on Client Relationships', 'icon' => 'focus',
         'text' => 'When the routine accounting is handled for you, your time is freed for the work that grows your firm. You can spend it advising clients, attracting new users, and building trust, rather than spending your evenings on other tasks.'],
    ];

    $solutionsIntro = 'PCS Global provides a complete <strong>white label accounting solution</strong> around the needs of your firm and your clients, covering every service from bookkeeping and taxation to year-end closing support for you.';
    $solutions = [
        ['title' => 'White Label Bookkeeping Services', 'img' => $img('whitelabel-accounting-services/white-label-bookkeeping-services.webp'),
         'text' => 'Good bookkeeping is the foundation that every report is based on. All the record-keeping for the clients is kept up-to-date and organised, so nothing is missed. Every day we record all your expenses, reconcile statements, and ensure your books reflect truly where your business stands. This provides you with accurate and reliable figures to rely on every month.'],
        ['title' => 'White Label Accounts Payable Services', 'img' => $img('whitelabel-accounting-services/white-label-accounts-payable-services.webp'),
         'text' => 'Paying suppliers correctly and on time keeps your clients\' businesses running smoothly. Our <strong>white label accounts payable services</strong> take care of the whole process from start to finish. We check each bill, schedule it for payment, and keep a clear record of what is owed, so nothing is paid twice or missed. Your clients stay on good terms with their suppliers.'],
        ['title' => 'White Label Accounts Receivable Services', 'img' => $img('whitelabel-accounting-services/white-label-accounts-receivable-services.webp'),
         'text' => 'One of the hardest things for any business to achieve is on-time payment. Our <strong>white label accounts receivable services</strong> enable your clients to raise timely invoices, have good follow-up procedures, and bring in money faster. We raise accurate invoices, chase overdue payments firmly, and keep a close eye on what is still outstanding.'],
        ['title' => 'White Label Payroll Processing', 'img' => $img('whitelabel-accounting-services/white-label-payroll-processing.webp'),
         'text' => 'Payroll is one area where there is no room for mistakes, because people expect to be paid the right amount on the right day. We handle the entire payroll process for your clients, from the calculations through to the filings. Everything is worked out carefully and submitted on time, so staff are paid correctly, and the business stays compliant.'],
        ['title' => 'Financial Reporting & Management Reporting', 'img' => $img('whitelabel-accounting-services/financial-reporting-and-management-reporting.webp'),
         'text' => 'Numbers are only useful when they are easy to understand and act on. We turn your clients\' raw figures into clear financial statements and management reports that are easy to read. These reports show how the business is performing, where the money is going, and what is worth paying attention to. This way, your firm gets reliable reports to hand over'],
        ['title' => 'Month-End & Year-End Closing Support', 'img' => $img('whitelabel-accounting-services/month-end-and-year-end-closing-support.webp'),
         'text' => 'Reconciling books at month/year end often consumes an enormous amount of your professionals\' time, especially when the closing deadlines hit. Our professionals balance the accounts, sort the entries, and prepare necessary documentation for reviewing your closings and ensure an error-free conclusion at month’s end/period end.'],
    ];

    $casTitle = 'Dedicated White Label Client Accounting Services (CAS)';
    $casParas = [
        'At PCS Global, we provide dedicated white label client accounting Services that help accounting firms deliver ongoing financial support to their clients without expanding their internal teams. Client Accounting Services (CAS) go beyond annual accounting and tax work, focusing on managing a client\'s day-to-day financial operations throughout the year.',
        'In practice, we manage the books in the cloud, keep them updated, and give your clients a live view of their numbers whenever they log in. With <strong>client accounting services outsourcing,</strong> your firm offers this steady, modern service without building the team to run it.',
        'With the daily accounting handled by our <strong>outsourced accounting support,</strong> your firm can deliver a consistent monthly service that pays you on a regular basis.',
    ];

    $industries = [
        [
            [$img('Healthcare.png'), 'Healthcare'],
            [$img('Construction.png'), 'Construction'],
            [$img('Manufacturing.png'), 'Manufacturing'],
            [$img('Real-Estate.png'), 'Real Estate'],
            [$img('E-commerce-Retail.png'), 'E-commerce & Retail'],
            [$img('Technology-Companies.png'), 'Technology Companies'],
            [$img('Professional-Services.png'), 'Professional Services'],
        ],
        [
            [$img('industries9.png'), 'Consultants and Professionals'],
            [$img('industries1.png'), 'Airlines'],
            [$img('industries2.png'), 'Telecommunications and Gaming'],
            [$img('industries3.png'), 'E-Sports'],
            [$img('industries4.png'), 'Construction Business'],
            [$img('industries5.png'), 'Law Firms'],
            [$img('industries7.png'), 'Pharmaceuticals'],
        ],
    ];

    $whoIntro = 'At PCS Global, we support US, UK & Australian firms with our <strong>white label accounting services</strong> and work behind the scenes for all kinds of practices, so they can offer more services under their own brand name with less pressure on their staff.';
    $whoCards = [
        ['title' => 'CPA Firms (USA)', 'img' => $img('whitelabel-accounting-services/cpa-firms-usa.webp'),
         'text' => 'CPA firms face heavy workloads, especially in tax season. We provide extra qualified capacity that works as per US standards, so you can take on more clients.'],
        ['title' => 'Accounting Practices (UK)', 'img' => $img('whitelabel-accounting-services/accounting-practices-uk.webp'),
         'text' => 'UK accounting practices juggle accounting, transaction, VAT, payroll, and year-end tasks. We handle all these day-to-day activities, so you can focus on advising clients and growing your enterprise.'],
        ['title' => 'Bookkeeping Businesses', 'img' => $img('whitelabel-accounting-services/bookkeeping-businesses.webp'),
         'text' => 'Growth should never mean saying no to new clients. Our team picks up the extra work, giving bookkeeping businesses the capacity to take on more without hiring new staff.'],
        ['title' => 'Tax Preparation Firms', 'img' => $img('whitelabel-accounting-services/tax-preparation-firms.webp'),
         'text' => 'Every tax deadline counts, and we help you hit all of them. We provide steady back-office support that helps you process more returns accurately, so you can handle peak season without stress.'],
        ['title' => 'BAS & Accounting Firms (Australia)', 'img' => $img('whitelabel-accounting-services/bas-and-accounting-firms-australia.webp'),
         'text' => 'BAS, GST, and local standards, all handled the right way. Our team works to these requirements, so it is always accurate, compliant, and ready for you to deliver to clients.'],
        ['title' => 'Virtual CFO Firms', 'img' => $img('whitelabel-accounting-services/virtual-cfo-firms.webp'),
         'text' => 'You give the advice, and we handle the numbers behind it. We take care of the bookkeeping and reporting underneath, so your advice is always backed by accurate figures.'],
    ];

    $processIntro = 'Our five-step white label accounting process makes it easy to bring us on board.';
    $processSteps = [
        ['title' => 'Introduction Call',
         'text' => 'We start with a simple conversation to understand your firm, your clients, and the work you want to hand over. This helps us see exactly where we can be helpful to you.'],
        ['title' => 'Process Assessment',
         'text' => 'Next, we look at how you currently work, the software you use, and your standards. This lets us fit into your existing process smoothly, rather than asking you to change how you do things.'],
        ['title' => 'Team Allocation',
         'text' => 'We then assign you a dedicated team with the right skills for your clients and regions. You get the same people each time, so they learn about your firm and preferences quickly.'],
        ['title' => 'Delivery of Knowledge',
         'text' => 'Before any live work begins, we make sure your team is fully briefed on your clients, formats, and expectations. Getting this right upfront means the work is accurate and runs smoothly from the start.'],
        ['title' => 'Ongoing Delivery and Reporting',
         'text' => 'From there, we handle the work day to day and keep you updated with regular reporting. You always know where things stand, what is done, what is in progress, and what is coming up.'],
    ];

    $whyIntro = 'PCS Global works as an extension of your firm, delivering trusted white label accounting support that helps you scale operations, improve efficiency, and achieve sustainable growth.';
    $whyCards = [
        ['title' => 'Dedicated Team Model', 'img' => $img('Dedicated-Team-Model.webp'),
         'text' => 'We give you one consistent team that works only on your account. Because they know your firm and your clients well, the work runs smoothly, and you rarely have to explain things twice.'],
        ['title' => 'Industry-Specific Accountants', 'img' => $img('Industry-Specific-Accountants.webp'),
         'text' => 'We match you with accountants who understand your clients\' industries, so the work reflects how those businesses actually operate. That knowledge shows in cleaner books and more useful reports.'],
        ['title' => 'US, UK & Australian Accounting Expertise', 'img' => $img('US-UK-Australian-Accounting-Expertise.webp'),
         'text' => 'Our teams work across US, UK, and Australian standards every day. Whichever market your clients belong to, the work is done right according to local rules and ready for you to deliver.'],
        ['title' => 'Flexible Engagement Models', 'img' => $img('Flexible-Engagement-Models.webp'),
         'text' => 'You decide how much we do, whether that is a single service, a few clients, or everything behind the scenes. Scale it up or down whenever you like, with no long contracts.'],
        ['title' => 'Secure Infrastructure', 'img' => $img('Transparent-Fixed-Monthly-Pricing.webp'),
         'text' => 'Your clients\' data is backed by strong security, with controlled access and safe systems. We treat their information with the same care you would, because your reputation depends on it.'],
        ['title' => 'NDA & Data Protection Compliance', 'img' => $img('NDA-Data-Protection-Compliance.webp'),
         'text' => 'Every engagement is covered by strict NDAs and proper data protection practices. Your clients stay yours, their data stays safe, and nothing about our role ever reaches them.'],
        ['title' => 'Transparent Pricing', 'img' => $img('Transparent-Pricing.webp'),
         'text' => 'You always know what you are paying and what it covers, with no hidden fees or surprise charges. Clear pricing makes it easy to quote your own clients with confidence.'],
        ['title' => 'Scalable Resource Allocation', 'img' => $img('Scalable-Resource-Allocation.webp'),
         'text' => 'When work increases, we scale your team up fast; when it slows, we bring it back down. You always have the right level of support, without paying for staff you do not need.'],
    ];

    $contactTitle = 'Ready to Scale Your Firm with Reliable White Label Accounting Services?';
    $contactText = 'If you\'re looking for reliable white label accounting support without the cost and complexity of hiring in-house, we can help. Our experienced accounting professionals work as an extension of your firm, helping you increase capacity, improve efficiency, and serve more clients with confidence.';

    $faqTitle = 'White Label Accounting FAQs';
    $faqs = [
        ['q' => 'What is white label accounting?',
         'a' => 'White label accounting is a service model in which accounting work is done by an outside team but delivered under your firm\'s brand. Your clients deal with you and see your name, while the outsourcing team handles the work quietly in the background.'],
        ['q' => 'How is white label accounting different from outsourcing?',
         'a' => 'With normal outsourcing, the other firm is often visible to your client. White label is invisible. We never appear to your clients, so your brand stays at the centre throughout.'],
        ['q' => 'Can clients know that accounting work is outsourced?',
         'a' => 'No. Everything reaches them under your name, in your formats, through you. We work entirely behind the scenes and have no contact with your clients unless you specifically ask for it.'],
        ['q' => 'Which accounting software do you support?',
         'a' => 'We work across the main platforms, including QuickBooks, Xero, Sage, NetSuite, Zoho Books, FreshBooks, and MYOB. In most cases, we simply work with the software your firm already uses.'],
        ['q' => 'Do you provide dedicated accountants?',
         'a' => 'Yes. You get a fixed team that works only on your account, rather than a different person each time. They learn about your firm and your clients, which keeps the work consistent.'],
        ['q' => 'How secure is our client data?',
         'a' => 'We use secure systems, controlled access, and strict NDAs on every engagement. Your clients\' information is protected carefully, because we know your reputation depends on it.'],
        ['q' => 'Do you support US GAAP, UK GAAP, and Australian accounting standards?',
         'a' => 'Yes. Our teams work to US, UK, and Australian standards every day, so the work always complies with the correct rules for wherever your clients are based.'],
        ['q' => 'What industries do you specialise in?',
         'a' => 'We support many sectors, including healthcare, construction, e-commerce, manufacturing, real estate, professional services, technology, and retail. Whatever your clients do, we can match the work accordingly.'],
        ['q' => 'How much do white label accounting services cost?',
         'a' => 'It varies depending on the scope and scale of services required. You only pay for what you use, and we clearly present our cost structure upfront before you even commit.'],
        ['q' => 'Can I scale my team up or down?',
         'a' => 'Yes, you can increase your support when things get busy and scale back when things slow down. When your workload varies, your support varies along with it, and you only ever pay what you need.'],
    ];


    $rich = fn ($s) => str_replace(['&lt;strong&gt;', '&lt;/strong&gt;'], ['<strong>', '</strong>'], e($s));

    $icon = [
        'cost'   => '<circle cx="12" cy="12" r="9"/><path d="M14.8 9.2c-.5-.9-1.6-1.4-2.8-1.4-1.6 0-2.8.8-2.8 2.1 0 3 5.6 1.5 5.6 4.3 0 1.3-1.2 2.1-2.8 2.1-1.3 0-2.4-.5-2.9-1.5"/><path d="M12 6.5v1.3M12 16.9v1.3"/>',
        'scale'  => '<path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>',
        'award'  => '<circle cx="12" cy="9" r="5.5"/><path d="m8.5 13.3-1.5 7.2 5-2.7 5 2.7-1.5-7.2"/>',
        'growth' => '<path d="M3 20h18"/><path d="m5 16 4-4 3 3 7-7"/><path d="M15 8h4v4"/>',
        'clock'  => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'focus'  => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.2"/>',
        'call'   => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/>',
        'search' => '<circle cx="11" cy="11" r="7"/><path d="m20.5 20.5-4.5-4.5"/>',
        'team'   => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'scope'  => '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1"/><path d="M9 10h6M9 14h6M9 18h3"/>',
    ];
    $processIcons = ['call', 'search', 'team', 'scope', 'growth'];

    $formServices = ['Accounting Outsourcing', 'Bookkeeping Outsourcing', 'Taxation Outsourcing', 'Payroll Outsourcing', 'Recruitment Outsourcing', 'Strata Management Services'];
@endphp

<section class="acc_hero_light">
    <div class="container">
        <div class="acc_hero_inner">
            <div class="acc_hero_text">
                <h1>White Label Accounting Services for <span>US, UK &amp; Australian Firms</span></h1>
                <p>{!! $rich($heroText) !!}</p>
                <div class="acc_hero_btns">
                    <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Your Free Consultation</a>
                    <a class="com_btn_outline" href="tel:{{ $site['phone']['tel'] }}">Speak with Our Experts
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none" aria-hidden="true"><path d="M2.3134 0.76742L6.03706 0.902169C6.82137 0.930543 7.5174 1.42583 7.81799 2.16945L8.91901 4.8932C9.17527 5.52705 9.10631 6.25025 8.73521 6.82118L7.32457 8.99161C8.15976 10.1909 10.4315 13.0009 12.8369 14.6458L14.6305 13.5419C15.0864 13.2613 15.6321 13.178 16.1479 13.3102L19.7136 14.2246C20.6619 14.4678 21.3009 15.3773 21.226 16.3769L20.9971 19.4295C20.9167 20.5008 20.04 21.3413 18.9993 21.2204C5.26189 19.623 -2.79399 0.767389 2.3134 0.76742Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
            <div class="acc_hero_benefits">
                @foreach ($heroBenefits as [$benefit, $benefitIcon])
                    <div class="acc_hero_benefit">
                        <span class="acc_hero_benefit_icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $benefitIcon !!}</svg>
                        </span>
                        <span>{{ $benefit }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="clients acc_software mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Tools &amp; Technology We Use</h2>
        </div>
    </div>
    <div class="client_slider_full">
        <div class="client_slider">
            @foreach ([1, 2] as $pass)
                @foreach ($software as $logo)
                    <div>
                        <img class="img-fluid" src="{{ $img($logo) }}" loading="lazy" alt="Accounting software logo">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-6 order-2 order-lg-2">
                <div class="acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">White Label Accounting Services</h2>
                    @foreach ($aboutParas as $paragraph)
                        <p>{!! $rich($paragraph) !!}</p>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-1">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('whitelabel-accounting-services/about-our-white-label-accounting-services.webp') }}" loading="lazy" alt="White Label Accounting Services">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('whitelabel-accounting-services/dedicated-white-label-client-accounting-services-cas.webp') }}" loading="lazy" alt="{{ $casTitle }}">
                </div>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="counter_lt acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">{{ $casTitle }}</h2>
                    @foreach ($casParas as $paragraph)
                        <p>{!! $rich($paragraph) !!}</p>
                    @endforeach
                    <a class="com_btn1" href="#consultation">Book a Free Consultation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Comprehensive White Label Accounting Solutions</h2>
            <p>{!! $rich($solutionsIntro) !!}</p>
        </div>

        <div class="precision_grid acc_services_grid {{ count($solutions) % 3 ? 'precision_grid_center' : '' }}">
            @foreach ($solutions as $card)
                <div class="precision_card">
                    <div class="precision_card_img">
                        <img src="{{ $card['img'] }}" loading="lazy" alt="{{ $card['title'] }}">
                    </div>
                    <div class="precision_card_body">
                        <h3>{{ $card['title'] }}</h3>
                        <p>{!! $rich($card['text']) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="svc_split mt-100">
    <div class="container">
        <div class="svc_split_inner">
            <div class="svc_split_intro svc_reveal">
                <h2>Benefits of White Label Accounting for Growing Firms</h2>
                <p>{!! $rich($benefitsIntro) !!}</p>
                <div class="svc_split_img">
                    <img src="{{ $img('whitelabel-accounting-services/benefits-of-white-label-accounting-for-growing-firms.webp') }}" loading="lazy" alt="Benefits of White Label Accounting for Growing Firms">
                </div>
            </div>

            <ol class="svc_split_list">
                @foreach ($benefits as $item)
                    <li class="svc_split_row svc_reveal">
                        <span class="svc_split_icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icon[$item['icon']] !!}</svg>
                        </span>
                        <div>
                            <h3>{{ $item['title'] }}</h3>
                            <p>{!! $rich($item['text']) !!}</p>
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

<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Industries We Specialize In</h2>
        </div>
    </div>

    <div class="industries_bot">
        <div class="ind_marquee">
            @foreach ($industries as $row)
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

<section class="trust_slider_sec mt-100">
    <div class="trust_slider_wrap">
        <div class="trust_slider_lt">
            <div class="trust_slider_head">
                <h2>Who We Help: Accounting Firms in the US, UK, and Australia</h2>
                <p>{!! $rich($whoIntro) !!}</p>
            </div>
            <div class="trust_slider_arrows">
                <button type="button" class="trust_slider_arrow trust_slider_prev" aria-label="Previous">
                    <img src="{{ $img('figma-trust-slider/arrow-left.svg') }}" alt="">
                </button>
                <button type="button" class="trust_slider_arrow trust_slider_next" aria-label="Next">
                    <img src="{{ $img('figma-trust-slider/arrow-left.svg') }}" alt="">
                </button>
            </div>
        </div>

        <div class="trust_slider_rt">
            <div class="trust_slider_track" id="trustSliderTrack">
                @foreach ($whoCards as $card)
                    <div class="trust_slide">
                        <div class="trust_slide_img">
                            <img src="{{ $card['img'] }}" loading="lazy" alt="{{ $card['title'] }}">
                        </div>
                        <div class="trust_slide_body">
                            <h3>{{ $card['title'] }}</h3>
                            <p>{!! $rich($card['text']) !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="trust_slider_progress" id="trustSliderProgress">
                @foreach ($whoCards as $card)
                    <span class="trust_slider_seg"></span>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('public/front/js/trust-slider.js') }}?v={{ filemtime(public_path('front/js/trust-slider.js')) }}" defer></script>
@endpush

<section class="process_sec mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">How Our White Label Accounting Process Works</h2>
            <p>{!! $rich($processIntro) !!}</p>
        </div>

        <div class="process_steps" data-slider data-slider-controls="slider4" data-slider-show="3" data-slider-controls-visible="{{ count($processSteps) > 3 ? 'true' : 'false' }}">
            @foreach ($processSteps as $step)
                <div class="process_card">
                    <div class="process_head">
                        <span class="process_icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $icon[$processIcons[$loop->index]] !!}</svg>
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

<section class="acc_why mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Why Choose PCS Global Group as Your White Label Accounting Partner</h2>
            <p>{!! $rich($whyIntro) !!}</p>
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img('whitelabel-accounting-services/why-choose-pcs-global-group-as-your-white-label-accounting-partner.webp') }}" loading="lazy" alt="Why Choose PCS Global Group as Your White Label Accounting Partner">
            </div>
            <div class="split_acc_list accordion" id="whyAcc">
                @foreach ($whyCards as $i => $item)
                    <div class="split_acc_item">
                        <button type="button" class="split_acc_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse"
                            data-bs-target="#whyAcc{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="whyAcc{{ $i }}">
                            <span>{{ $item['title'] }}</span>
                            <img src="{{ $img('common/icon-plus.svg') }}" width="32" height="32" alt="">
                        </button>
                        <div id="whyAcc{{ $i }}" class="split_acc_body collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#whyAcc">
                            <p>{!! $rich($item['text']) !!}</p>
                        </div>
                    </div>
                @endforeach
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
                        <h2>Looking for a Reliable White Label Accounting Partner?</h2>

                        <p>Let PCS Global work behind the scenes as an extension of your firm, so you can take on more clients, keep your brand at the front and grow without the cost of hiring in-house.</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <span class="color-button__label relative z-10 me-2">Discuss Your White Label Requirements</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('public/front/js/split-accordion.js') }}?v={{ filemtime(public_path('front/js/split-accordion.js')) }}" defer></script>
@endpush

<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="faq-head mb-2 mb-xxl-4">{{ $faqTitle }}</h2>
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
                                <p>{{ strip_tags($item['a']) }}</p>
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
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($f['a'])],
    ], $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_PRETTY_PRINT) !!}
</script>

<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>{{ $contactTitle }}</h2>
            <p>{!! $rich($contactText) !!}</p>
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
                    <span class="color-button__label relative z-10">Book Your Free Consultation</span>
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

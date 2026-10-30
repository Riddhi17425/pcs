{{-- Accounting outsourcing page (/outsourced-accounting-bookkeeping-services). Controller: ServiceController@accountingBookeeping.
     Sections AU / US / UK home pages wale hain (same classes); upar data ka PHP block, neeche har section ka markup.
     CSS: style.css + common/hero-dark.css + common/home-sections.css + pages/accounting-outsourcing.css (neeche @push('styles')).
     Text / images badalne ho to isi file me badlo. --}}
@extends('layouts.app', [
    'og_image' => asset('public/front/images/procure-to-pay-p2p.jpg')
])

@push('styles')
    @foreach (['common/hero-dark.css', 'common/home-sections.css', 'pages/accounting-outsourcing.css'] as $css)
        <link rel="stylesheet" href="{{ asset('public/front/css/' . $css) }}?v={{ filemtime(public_path('front/css/' . $css)) }}">
    @endforeach
@endpush

@section('content')
@php
    $img = fn ($file) => asset('public/front/images/' . $file);
    $bubbleColors = '["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0"]';

    $heroFeatures = ['Dedicated Accounting Teams', 'ISO 27001 and ISO 9001 Certified', 'US, UK & Australian Accounting Expertise', 'Secure & Confidential Delivery'];

    // Homepage_XX.png = tools logos (home page ke "Tools & Technology" tab wale)
    $software = [
        ['Homepage_07.png', 'QuickBooks'],
        ['Homepage_02.png', 'Xero'],
        ['Homepage_08.png', 'Sage'],
        ['Homepage_06.png', 'NetSuite'],
        ['Homepage_30.png', 'Zoho Books'],
        ['Homepage_11.png', 'FreshBooks'],
        ['Homepage_12.png', 'MYOB'],
    ];

    $services = [
        ['title' => 'Accounts Payable Outsourcing', 'img' => $img('procure-to-pay-p2p.jpg'),
         'text' => 'When you choose to outsource accounts payable to PCS Global, our team will handle everything from receipt of the supplier invoice all the way to the readiness of payment. First, we match all invoices with purchase orders, apply the proper tax treatment, and send them off for approval. Unlike <strong>accounts payable outsourcing providers</strong> that only enter invoices, we also reconcile supplier accounts and prepare payment batches for your approval.'],
        ['title' => 'Accounts Receivable Outsourcing', 'img' => $img('accounts-receivable-accounts-payable-ar-ap.jpg'),
         'text' => 'Outsourcing accounts receivable with PCS Global will help your firm’s invoices go out on time and the payment will reach to the right customer accounts. Our <strong>outsource accounts receivable services</strong> cover invoicing from your billing data, posting receipts, reconciling debtor accounts and preparing overdue reminders. At PCS Global you will get aged debtors reports as often as you need, and the credit decision still remains with your firm.'],
        ['title' => 'Financial Reporting &amp; Month-End Close', 'img' => $img('record-to-report-r2r.jpg'),
         'text' => 'We create a checklist and set a deadline, like the fifth business day of the month, before the closing of accounts. All bank accounts, balance sheet and intercompany accounts would be reconciled before posting of accruals, prepaid expenses and depreciation. Financials and reporting will always depict approved templates and standards, such as US GAAP, UK GAAP and IFRS or AASB.'],
        ['title' => 'Payroll Accounting &amp; Processing', 'img' => $img('Payroll_outsourcing.jpg'),
         'text' => 'Our accounting team posts payroll journals, reconciles payroll liability accounts and summarises payroll costs by department or entity. The aim is for wages, deductions and employer contributions to agree with the general ledger every month. If you also need pay runs processed, we offer that as a separate service.'],
        ['title' => 'Tax Accounting &amp; Tax Preparation Support', 'img' => $img('Taxation.jpg'),
         'text' => 'A year of monthly reconciliations makes year-end tax work far simpler. At year end, your tax adviser receives reconciled balances, workpapers and supporting schedules from our team. Tax advice, review of the return and filing are handled by your licensed tax professional.'],
        ['title' => 'Budgeting &amp; Forecasting', 'img' => $img('budgeting-forecasting.jpg'),
         'text' => 'Your management team sets the assumptions, and we build annual budgets by department or entity, rolling forecasts and cash flow projections from them and your recorded historical results. Each month, a budget-versus-actual report clearly shows which lines have moved away from plan. Your management remains responsible for the assumptions and the decisions based on them.'],
    ];

    $businessNeeds = [
        ['title' => 'For Small &amp; Medium-Sized Businesses',
         'text' => 'In a small business, the outsource accounting for small business works very less as we compare it with bigger firms or businesses but the books and reports still needed on time. People who outsource accounting for small or medium-sized businesses majorly begin with payables or bank reconciliations, then add monthly reporting once the routine is working well.'],
        ['title' => 'For Accounting &amp; CPA Firms',
         'text' => 'Busy season is when most accounting and CPA firms first bring us in, usually for client accounting, reconciliations and reporting. We work in your practice software, use your templates and send every file back for your team to review. If you prefer, the work can go out under your firm’s name.'],
        ['title' => 'For Growing Businesses',
         'text' => 'Growth often brings a new entity, office or reporting line months before the finance team can hire. We increase capacity as needed and introduce written procedures, a fixed close calendar and reporting split by entity, department or location.'],
        ['title' => 'For Enterprises',
         'text' => 'Enterprise clients typically outsource high-volume, rule-based processes like payables, receivables and balance sheet reconciliations. We work within your internal controls, approval limits and ERP, whether that’s NetSuite or Sage.'],
    ];

    $regions = [
        ['title' => 'Outsourced Accounting Services for USA', 'img' => $img('Accounting_-_PCS_Global_in_USA.jpg'),
         'button' => ['Explore US Accounting Services', route('pcs.global.usa')],
         'text' => 'For US businesses and CPA firms, we provide accounting under US GAAP, month-end close, accounts payable and receivable, and extra capacity during tax season. Scope and pricing are agreed after an initial consultation.'],
        ['title' => 'Outsourced Accounting Services for UK', 'img' => $img('Accounting_-_PCS_Global_in_UK.jpg'),
         'button' => ['Explore UK Accounting Services', route('accounting.outsourcing.services')],
         'text' => 'For UK businesses and practices, we prepare accounts under UK GAAP and IFRS, keep records VAT-ready, produce monthly management accounts and support year-end preparation.'],
        ['title' => 'Outsourced Accounting Services for Australia', 'img' => $img('Accounting_-_PCS_Global_in_Australia.jpg'),
         'button' => ['Explore Australia Accounting Services', route('pcs.global.aus')],
         'text' => 'In Australia, we support AASB-aligned reporting, GST coding, BAS-ready records and 30 June year-end preparation. BAS and income tax lodgement stay with your registered agent.'],
    ];

    $industries = [
        [[$img('accounting-and-auditing-firms.png'), 'Accounting & Auditing Firms'], [$img('industries4.png'), 'Construction'], [$img('industries8.png'), 'Manufacturing'], [$img('e-commerce-retail-sector.png'), 'E-commerce & Retail'], [$img('telecommunications.svg'), 'Telecommunications']],
        [[$img('industries2.png'), 'Gaming / E-Sports'], [$img('industries7.png'), 'Pharmaceuticals'], [$img('industries5.png'), 'Law Firms'], [$img('property -management.png'), 'Strata / Property Management']],
    ];

    $processSteps = [
        ['title' => 'Discovery &amp; Requirement Analysis',
         'text' => 'First, we review how much volume you process, the software you use, your deadlines and the points where your team is most stretched. That tells us which processes to outsource first.'],
        ['title' => 'Process &amp; Scope Setup',
         'text' => 'We then write up what we will deliver, by when, and where your team reviews it. Where you already have standard operating procedures, those are what we follow.'],
        ['title' => 'Secure Onboarding',
         'text' => 'Access to your systems, file-sharing channels and confidentiality agreements are arranged next, with access levels set by you.'],
        ['title' => 'Dedicated Team Allocation',
         'text' => 'We assign people whose experience fits the work, and they stay on your account. That avoids repeated handovers.'],
        ['title' => 'Accounting Operations',
         'text' => 'Work is completed to the agreed schedule. If information is missing or something needs clarifying, we raise it through the channel agreed during onboarding.'],
        ['title' => 'Review &amp; Continuous Improvement',
         'text' => 'Quality and turnaround are reviewed with you at agreed intervals. Based on that review, we can change the scope, the size of the team or the procedures themselves.'],
    ];

    $securityCards = [
        ['title' => 'Certified Security Standards', 'img' => $img('australia/Certified-Security-Standards.webp'),
         'text' => 'PCS Global holds ISO 27001 certification for information security and ISO 9001 certification for quality management. Personal data is processed in line with GDPR, giving clients independent assurance that their financial information is managed and protected to recognised international standards.'],
        ['title' => 'Confidentiality &amp; NDAs', 'img' => $img('australia/Confidentiality -Privacy.webp'),
         'text' => 'The non-disclosure agreement is executed prior to providing any client information to the members of our team. The obligation of confidentiality binds all members of the team involved in the project, and client information is not utilized for anything other than what was agreed upon.'],
        ['title' => 'Controlled Access', 'img' => $img('australia/Secure-Data-Handling.webp'),
         'text' => 'The access is role based; thus, only the assigned files can be accessed by each individual in the team. Multi-factor authentication is compulsory at each login attempt; also, administrative access is limited to certain IP addresses only. The access levels will be determined in consultation with you.'],
        ['title' => 'Secure Technology &amp; Communication', 'img' => $img('australia/Secure-Technology-Communication.webp'),
         'text' => 'Files and communications move through monitored, encrypted channels using TLS 1.3 and AES-256. Sensitive information is never sent through personal email or unprotected routes, and our network is protected by next-generation firewalls and intrusion prevention systems against external cyber threats.'],
        ['title' => 'Secure Data Storage &amp; Continuity', 'img' => $img('australia/Business-continuity.webp'),
         'text' => 'Client data is held securely in encrypted storage with immutable backups and off-site replication. Vulnerability scans run monthly and penetration tests quarterly, while continuous patch management and redundant backup internet connections help keep work secure and running with minimal disruption.'],
        ['title' => 'Quality &amp; Review Controls', 'img' => $img('australia/Quality-Process-Controls.webp'),
         'text' => 'Every process follows a written procedure and checklist agreed with you. A second team member reviews all completed work before delivery, and items that need your input are recorded on an internal exceptions log instead of being resolved on assumption.'],
    ];

    $stats = [[60, 'Clients'], [800, 'Projects Completed'], [100, 'Years of Combined Experience']];

    $benefits = [
        ['title' => 'Reduce Accounting &amp; Finance Costs',
         'text' => 'You pay for a defined scope of work, with no extra salaries, office costs or software licences to cover. Pricing is confirmed before we start and reflects your volume and complexity.'],
        ['title' => 'Access Accounting Professionals',
         'text' => 'PCS Global was founded by Malay Dalal, a Fellow Chartered Accountant with more than 35 years of experience. Our team works on US, UK and Australian engagements.'],
        ['title' => 'Build a Dedicated Accounting Team',
         'text' => 'If your workload is consistent, you’ll be assigned a dedicated team. Within a few months, they know your chart of accounts, who approves what and how you like reports presented.'],
        ['title' => 'Scale Your Finance Function Faster',
         'text' => 'Whether it’s a busy quarter, an acquisition or a newly formed entity, extra capacity can be added without a recruitment process. Once the workload settles, it’s reduced again.'],
        ['title' => 'Improve Accuracy &amp; Reporting',
         'text' => 'Monthly reconciliations, written procedures and a second reviewer on every file mean fewer corrections for your team. Final approval stays with you.'],
        ['title' => 'Focus on Core Business',
         'text' => 'When processing and reconciliations are handled externally, your finance staff can spend more of their week on analysis, forecasting and management requests.'],
    ];

    $faqs = [
        ['q' => 'What are outsourced accounting services?',
         'a' => 'The outsourcing accounting services means your company hires an external team to manage your accounts like payables, receivables, reconciliations, financial reporting and month end reports, the outsourcing team manages it all. Your systems are being used everytime for approvals and file filings for your business.'],
        ['q' => 'How does accounting outsourcing work?',
         'a' => 'It all depends on what requirement you have, but PCS Global Group starts by reviewing your current processes by deciding on what type of scope of work you have chosen. After that a secure access and team is assigned to work for you on a fixed schedule. You choose your team, review each delivery, and we can change or develop new scope based on your modified requirement.'],
        ['q' => 'Why should I outsource accounting services to India?',
         'a' => 'There are three main reasons. First, India has a good number of qualified accountants who are proficient in English and trained on international standards and cloud-based software. Second, the time zone is such that work continues during off-hours in the US and UK. Third, an offshore team is very cost efficient to hire.'],
        ['q' => 'Can you provide a dedicated accounting team?',
         'a' => 'Yes. Team size depends on your workload, but the individuals assigned to you remain on your account. How you communicate with them and how work is reviewed are agreed during onboarding.'],
        ['q' => 'Can CPA and accounting firms outsource their accounting work?',
         'a' => 'Yes. Firms outsource client accounting, reconciliations and reporting to add capacity, particularly in peak season. Everything is returned for the firm’s review. Some professional bodies require client consent before work is passed to a third party, so firms should check their rules and obtain consent where needed.'],
        ['q' => 'Is outsourced accounting secure?',
         'a' => 'That depends on the provider’s controls. With PCS Global, information security is certified to ISO 27001 and data handling follows GDPR. NDAs, role-based access, multi-factor authentication and encryption are standard on every engagement, and your data is visible only to the team working on your account.'],
        ['q' => 'Which accounting software does PCS Global support?',
         'a' => 'QuickBooks, Xero, Sage, NetSuite, Zoho Books, FreshBooks, MYOB and Microsoft Excel. In most cases, we work directly in the platform you already have.'],
        ['q' => 'Does PCS Global provide accounting outsourcing services in the USA, UK and Australia?',
         'a' => 'Yes. We work with businesses and firms in all three markets, following the relevant accounting standards and reporting cycles. Regulatory filings and professional sign-off remain with you or your licensed adviser.'],
    ];
        
    // card icons (24x24, stroke): process steps aur benefits ke liye
    $icon = [
        'search'   => '<circle cx="11" cy="11" r="7"/><path d="m20.5 20.5-4.5-4.5"/>',
        'scope'    => '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1"/><path d="M9 10h6M9 14h6M9 18h3"/>',
        'lock'     => '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>',
        'team'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'ledger'   => '<rect x="5" y="3" width="14" height="18" rx="2"/><path d="M8 7h8"/><path d="M8 11h.01M12 11h.01M16 11h.01M8 15h.01M12 15h.01M16 15h.01M8 18h.01M12 18h.01M16 18h.01"/>',
        'growth'   => '<path d="M3 20h18"/><path d="m5 16 4-4 3 3 7-7"/><path d="M15 8h4v4"/>',
        'cost'     => '<circle cx="12" cy="12" r="9"/><path d="M14.8 9.2c-.5-.9-1.6-1.4-2.8-1.4-1.6 0-2.8.8-2.8 2.1 0 3 5.6 1.5 5.6 4.3 0 1.3-1.2 2.1-2.8 2.1-1.3 0-2.4-.5-2.9-1.5"/><path d="M12 6.5v1.3M12 16.9v1.3"/>',
        'award'    => '<circle cx="12" cy="9" r="5.5"/><path d="m8.5 13.3-1.5 7.2 5-2.7 5 2.7-1.5-7.2"/>',
        'scale'    => '<path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>',
        'accuracy' => '<circle cx="12" cy="12" r="9"/><path d="m8 12.5 2.7 2.7L16.5 9"/>',
        'focus'    => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.2"/>',
    ];
    $processIcons = ['search', 'scope', 'lock', 'team', 'ledger', 'growth'];
    $benefitIcons = ['cost', 'award', 'team', 'scale', 'accuracy', 'focus'];

    $arrow = '<svg width="18" height="12" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19 6.33L14 11.33M19 6.33L14 1.33M19 6.33H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
@endphp

{{-- Hero (light): left = heading + paragraph + CTAs, right = 4 key benefit cards --}}
@php
    $heroBenefits = [
        ['Dedicated Accounting Teams', '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>'],
        ['ISO 27001 and ISO 9001 Certified', '<circle cx="12" cy="9" r="5.5"/><path d="m8.5 13.3-1.5 7.2 5-2.7 5 2.7-1.5-7.2"/>'],
        ['US, UK &amp; Australian Accounting Expertise', '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3c2.5 2.5 3.8 5.5 3.8 9s-1.3 6.5-3.8 9c-2.5-2.5-3.8-5.5-3.8-9S9.5 5.5 12 3Z"/>'],
        ['Secure &amp; Confidential Delivery', '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>'],
    ];
@endphp
<section class="acc_hero_light">
    <div class="container">
        <div class="acc_hero_inner">
            <div class="acc_hero_text">
                <h1>Outsourcing Accounting Services for <span>Global Businesses and Accounting Firms</span></h1>
                <p>To run an accounting function effectively you need qualified people, streamlined processes, and accurate reporting. PCS Global provides <strong>accounting outsourcing services</strong> that support global businesses and accounting firms with their day-to-day accounting work while keeping financial records in good order and providing additional resources. Our offshore team’s expertise lies in accounts payable and receivable to month-end closing and reporting. We work according to your country specific accounting standards and requirements.</p>
                <div class="acc_hero_btns">
                    <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Book a Free Consultation</a>
                    <a class="com_btn_outline" href="tel:{{ $site['phone']['tel'] }}">Talk to Our Experts
                        <svg width="20" height="20" viewBox="0 0 22 22" fill="none" aria-hidden="true"><path d="M2.3134 0.76742L6.03706 0.902169C6.82137 0.930543 7.5174 1.42583 7.81799 2.16945L8.91901 4.8932C9.17527 5.52705 9.10631 6.25025 8.73521 6.82118L7.32457 8.99161C8.15976 10.1909 10.4315 13.0009 12.8369 14.6458L14.6305 13.5419C15.0864 13.2613 15.6321 13.178 16.1479 13.3102L19.7136 14.2246C20.6619 14.4678 21.3009 15.3773 21.226 16.3769L20.9971 19.4295C20.9167 20.5008 20.04 21.3413 18.9993 21.2204C5.26189 19.623 -2.79399 0.767389 2.3134 0.76742Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                </div>
            </div>
            <div class="acc_hero_benefits">
                @foreach ($heroBenefits as [$benefit, $benefitIcon])
                    <div class="acc_hero_benefit">
                        <span class="acc_hero_benefit_icon">
                            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $benefitIcon !!}</svg>
                        </span>
                        <span>{!! $benefit !!}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Software Slider --}}
<section class="clients acc_software mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Technology &amp; Accounting Software We Support</h2>
            <p>Our team works in QuickBooks, Xero, Sage, NetSuite, Zoho Books, FreshBooks and MYOB, as well as Microsoft Excel.</p>
        </div>
    </div>
    <div class="client_slider_full">
        <div class="client_slider">
            {{-- 2 baar: kam logos me bhi slider ka loop bina khali jagah chale --}}
            @foreach ([1, 2] as $pass)
                @foreach ($software as [$logo, $name])
                    <div>
                        <img class="img-fluid" src="{{ $img($logo) }}" loading="lazy" alt="{{ $name }}">
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</section>

{{-- What Are (image + text) --}}
<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('accounting-outsourcing/what-are-outsourcing-accounting.webp') }}" loading="lazy" alt="What Are Outsourcing Accounting Services">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter_lt acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">What Are Outsourcing Accounting Services?</h2>
                    <p>Outsourcing accounting services means assigning selected accounting tasks, such as transaction processing, reconciliations, period-end journals and management reporting, to an external team that works under your policies and inside your accounting software.</p>
                    <p>Accountability for the figures stays with your business. Your finance manager continues to approve payments, review reports and sign the annual financial statements. What changes is who completes the day-to-day processing, and how quickly additional capacity can be added when workloads increase.</p>
                    <p>Most businesses begin with accounts payable or bank reconciliations. Once that process is running smoothly, they typically extend the scope to month-end close and reporting.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Why India (text + image) --}}
<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class=" acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">Why Global Companies Outsource Accounting to India?</h2>
                    <p>India has been a major centre for offshore accounting for many years, and companies in the US, UK and Australia use it for reasons beyond price.</p>
                    <p>The talent pool is large. Many accountants there are trained on international reporting standards and work daily in Xero, QuickBooks and NetSuite. Business hours in India fall during the US night, so work sent at the close of a US day is often processed by the next morning. For UK clients, there’s a useful overlap in the morning, and for Australian clients, in the afternoon. English is the working language for all emails, file notes and reports.</p>
                    <p>Offshore teams are typically cheaper than local hires, but the cost difference depends on your volume and scope. We handle security with ISO 27001 certified processes. Any personal data is processed according to GDPR.</p>
                    <p class="acc_note">We are headquartered in Ahmedabad, India, with a presence in Australia, the UK and the USA.</p>
                    <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Discuss Your Outsourcing Requirements</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('accounting-outsourcing/why-outsource-accounting-india.webp') }}" loading="lazy" alt="Why Global Companies Outsource Accounting to India">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Service Cards --}}
<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">End-to-End Our Outsourced Accounting Services</h2>
            <p>Our work covers the accounting cycle from outsourcing accounts payable and receivable through to month-end close and reporting. Most clients use two or three of the services below, scoped to their own requirements, software and review process.</p>
        </div>

        <div class="precision_grid acc_services_grid {{ count($services) % 3 ? 'precision_grid_center' : '' }}">
            @foreach ($services as $card)
                <div class="precision_card">
                    <div class="precision_card_img">
                        <img src="{{ $card['img'] }}" loading="lazy" alt="{{ html_entity_decode($card['title']) }}">
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

{{-- Trust Slider (business needs): left heading + arrows, right image cards --}}
@php
    $needImages = ['figma-trust-slider/small-medium-businesses.webp', 'figma-trust-slider/accounting-finance-firms.webp', 'figma-trust-slider/Growing-Businesses.webp', 'figma-trust-slider/Professional-Services-Firms.webp'];
@endphp
<section class="trust_slider_sec mt-100">
    <div class="trust_slider_wrap">
        <div class="trust_slider_lt">
            <div class="trust_slider_head">
                <h2>Accounting Outsourcing Solutions for Different Business Needs</h2>
                <p>A ten-person business and a multi-entity group need very different support. Before quoting, we look at your size, the number of entities and the accounting skills already in your team.</p>
                <div>
                    <a class="com_btn2" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Request a Consultation</a>
                </div>
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
                @foreach ($businessNeeds as $i => $item)
                    <div class="trust_slide">
                        <div class="trust_slide_img">
                            <img src="{{ $img($needImages[$i]) }}" loading="lazy" alt="{{ html_entity_decode($item['title']) }}">
                        </div>
                        <div class="trust_slide_body">
                            <h3>{!! $item['title'] !!}</h3>
                            <p>{!! $item['text'] !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="trust_slider_progress" id="trustSliderProgress">
                @foreach ($businessNeeds as $item)
                    <span class="trust_slider_seg"></span>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('public/front/js/trust-slider.js') }}?v={{ filemtime(public_path('front/js/trust-slider.js')) }}" defer></script>
@endpush
{{-- Industry Pills --}}
<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Industries We Serve</h2>
            <p>Every industry has its own transaction patterns. These are the sectors our teams currently work with:</p>
        </div>
    </div>

    <div class="industries_bot">
        <div class="ind_marquee">
            @foreach ($industries as $row)
                <div class="ind_row {{ $loop->odd ? 'ind_row_up' : 'ind_row_down' }}">
                    <div class="ind_track">
                        {{-- 4 baar: kam cards me bhi track seamless loop ho (-50% translate) --}}
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

{{-- Region Cards (USA / UK / Australia) --}}
<section class="trust_slider_sec trust_grid_sec mt-100">
    <div class="container">
        <div class="trust_grid_head">
            <h2>Global Accounting Outsourcing Services for USA, UK &amp; Australia</h2>
            <p>The US, UK, and Australia each have different standards, different tax vocabulary, and a different financial year-end. Our team prepares work in accordance with whichever rules apply to your organization. The regulatory documentation and signing off will be done by you or your licensed advisor.</p>
        </div>
        <div class="trust_grid acc_region_grid">
            @foreach ($regions as $card)
                <div class="trust_slide">
                    <div class="trust_slide_img">
                        <img src="{{ $card['img'] }}" loading="lazy" alt="{{ $card['title'] }}">
                    </div>
                    <div class="trust_slide_body">
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['text'] }}</p>
                    </div>
                    <div class="trust_slide_btn">
                        <a class="com_btn_outline com_btn_outline_light" href="{{ $card['button'][1] }}">{{ $card['button'][0] }} {!! $arrow !!}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Process Steps --}}
<section class="process_sec mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Our Accounting Outsourcing Process</h2>
            <p>Before any live work starts, an engagement passes through six stages. By the end of them, both sides know who is responsible for what, and when.</p>
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
                        <h3>{!! $step['title'] !!}</h3>
                        <p>{!! $step['text'] !!}</p>
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

{{-- Cta Banner (India home jaisa: com_inner_banners, CSS style.css + responsive.css) --}}
<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>Ready to Simplify Your Accounting &amp; Finance Operations?</h2>

                        <p>Discuss your outsourcing requirements and get tailored solutions to improve efficiency, reduce operational workload, and support business growth.</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <!-- Bubble effect layers -->
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <!-- Label -->
                            <span class="color-button__label relative z-10 will-change-transform me-2">Book a Free Consultation</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Overlay Cards (data security) --}}
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Data Security &amp; Quality Assurance</h2>
            <p>Sharing financial information with an external team is a significant decision. PCS Global treats data security and quality control as core parts of every engagement, supported by ISO 27001 and ISO 9001 certification and GDPR-compliant data handling.</p>
        </div>

        <div class="our_experts_cen">
            <div class="ov_slider" data-slider data-slider-controls="slider5" data-slider-show="3">
                @foreach ($securityCards as $card)
                    <div>
                        <div class="ov_card">
                            <img src="{{ $card['img'] }}" loading="lazy" alt="{{ html_entity_decode($card['title']) }}">
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

{{-- Split Accordion (why choose): heading on top, image left + benefits accordion right --}}
<section class="acc_why mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Why Businesses Choose PCS Global for Accounting Outsourcing?</h2>
            <p>Outsourced accounting firms differ a great deal in security, team continuity and how carefully they review work. These are the points clients most often look at when they assess us.</p>
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img('accounting-outsourcing/why-choose-pcs-global.webp') }}" loading="lazy" alt="Why Businesses Choose PCS Global for Accounting Outsourcing">
            </div>
            <div class="split_acc_list accordion" id="whyAcc">
                @foreach ($benefits as $i => $item)
                    <div class="split_acc_item">
                        <button type="button" class="split_acc_head {{ $i === 0 ? '' : 'collapsed' }}" data-bs-toggle="collapse"
                            data-bs-target="#whyAcc{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="whyAcc{{ $i }}">
                            <span>{!! $item['title'] !!}</span>
                            <img src="{{ $img('common/icon-plus.svg') }}" width="32" height="32" alt="">
                        </button>
                        <div id="whyAcc{{ $i }}" class="split_acc_body collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#whyAcc">
                            <p>{!! $item['text'] !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{-- Cta Banner (India home jaisa: com_inner_banners, CSS style.css + responsive.css) --}}
<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>Looking for a Reliable Accounting Outsourcing Partner?</h2>

                        <p>If accounting work is taking up too much of your team’s time, PCS Global can take on the recurring tasks and show you each month what’s done and what’s outstanding.</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <!-- Bubble effect layers -->
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <!-- Label -->
                            <span class="color-button__label relative z-10 will-change-transform me-2">Discuss Your Outsourcing Requirements</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Faq List --}}
<section class="mt-80">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="faq-head mb-2 mb-xxl-4">Outsourced Accounting Services FAQs</h2>
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

{{-- FAQ schema (Google rich results) --}}
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

{{-- Contact Form --}}
@php
    $contactFormServices = ['Accounting Outsourcing', 'Bookkeeping Outsourcing', 'Taxation Outsourcing', 'Payroll Outsourcing', 'Recruitment Outsourcing', 'Strata Management Services'];
@endphp
<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>Discuss Your Accounting Outsourcing Requirements</h2>
            <p>Tell us about your accounting workload, the software you use and your reporting deadlines. We’ll recommend an outsourcing model and level of support that suits your business or firm.</p>
        </div>

        <form id="contactBandForm" class="validated-form contact_band_form" action="{{ route('request.store') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="form_type" value="India Footer Form">
            <input type="hidden" name="country" id="cfCountry" value="India">
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
                <div class="col-12 cf_field">
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
                <button type="submit" class="com_btn2 color-animated-button bubble-btn" data-hover-colors='{{ $bubbleColors }}'>
                    <span class="color-button__background"></span>
                    <span class="color-button__bubble-container">
                        <span class="color-button__bubble"></span>
                    </span>
                    <span class="color-button__label relative z-10">Book a Free Consultation</span>
                </button>
            </div>
        </form>
    </div>
</section>
@endsection

@push('scripts')
<script>
// footer form: phone ka country flag (intl-tel-input) + "country" field sync (India home jaisa)
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

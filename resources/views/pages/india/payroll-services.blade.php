{{-- Payroll outsourcing page (/payroll-outsourcing-services). Controller: ServiceController@payrollService.
     Layout taxation-services.blade.php jaisa hi hai (same classes), upar data ka PHP block, neeche har section ka markup.
     CSS: style.css + common/hero-dark.css + common/home-sections.css + pages/accounting-outsourcing.css + common/service-split.css (neeche @push('styles')).
     Text / images badalne ho to isi file me badlo. --}}
@extends('layouts.app', [
    'og_image' => asset('public/front/images/why-payroll-outsourcing.png')
])

@push('styles')
    @foreach (['common/hero-dark.css', 'common/home-sections.css', 'pages/accounting-outsourcing.css', 'common/service-split.css'] as $css)
        <link rel="stylesheet" href="{{ asset('public/front/css/' . $css) }}?v={{ filemtime(public_path('front/css/' . $css)) }}">
    @endforeach
@endpush

@section('content')
@php
    $img = fn ($file) => asset('public/front/images/' . $file);
    $bubbleColors = '["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0"]';

    // Payroll_XX.png / Homepage_XX.png = software logos
    $software = [
        ['Payroll_01.png', 'QuickBooks Payroll'],
        ['Payroll_05.png', 'Xero Payroll'],
        ['Homepage_12.png', 'MYOB Payroll'],
        ['Payroll_06.png', 'Sage Payroll'],
        ['Payroll_08.png', 'ADP'],
        ['Payroll_03.png', 'Gusto'],
        ['Payroll_02.png', 'Paychex'],
        ['Payroll_04.png', 'IRIS Payroll'],
    ];

    $services = [
        ['title' => 'Employee Data &amp; Payroll Records Management', 'img' => $img('payroll-outsourcing/employee-data-payroll-records.webp'),
         'text' => 'Employee master data, pay rates, tax and withholding details, bank details and benefit elections are maintained in your payroll system. Every change is checked against an authorised instruction before it reaches a pay run.'],
        ['title' => 'Gross-to-Net Salary Calculations', 'img' => $img('payroll-outsourcing/gross-to-net-salary.webp'),
         'text' => 'Gross pay, taxes, statutory deductions, pension or super contributions and voluntary deductions are calculated for every employee, every pay period. Each pay run is compared with the previous one, and unusual movements are flagged before approval.'],
        ['title' => 'Overtime, Bonuses &amp; Allowance Calculations', 'img' => $img('payroll-outsourcing/overtime-bonuses-allowances.webp'),
         'text' => 'Overtime, shift penalties, commissions, bonuses and allowances are calculated from approved timesheets and your pay rules. For US employers, qualified overtime and tips are tracked separately for Form W-2 reporting.'],
        ['title' => 'Leave, Attendance &amp; Timesheet Integration', 'img' => $img('payroll-outsourcing/leave-attendance-timesheet.webp'),
         'text' => 'Leave balances, attendance records and timesheet data are imported or entered by the agreed cut-off. Unapproved or incomplete hours are held back and returned to your manager for approval.'],
        ['title' => 'Payroll Reports &amp; Financial Reconciliation', 'img' => $img('payroll-outsourcing/payroll-reports-reconciliation.webp'),
         'text' => 'Each pay run produces a payroll register, a summary by department or cost centre, and a journal ready for your accounts. Payroll liabilities are reconciled to the ledger, so wages, tax and contributions that matches with what was paid.'],
        ['title' => 'New Employee &amp; Employee Exit Payroll Processing', 'img' => $img('payroll-outsourcing/new-employee-exit-payroll.webp'),
         'text' => 'New starters are set up with the correct tax and contribution details from their first pay. Leavers receive accurate final pay, including accrued leave, termination payments and the required leaving documentation.'],
    ];

    $firmServices = [
        ['title' => 'Payroll Processing Support for CPA Firms', 'icon' => 'file',
         'text' => 'Our payroll processing support for CPA firms covers pay runs, deductions, reports and authorised filings across your client list. Your firm keeps the client relationship and final approval.'],
        ['title' => 'White-Label Payroll Outsourcing', 'icon' => 'tag',
         'text' => 'Payslips, reports and client communications carry your firm’s name. Your clients see one provider: your firm.'],
        ['title' => 'Dedicated Offshore Payroll Specialists', 'icon' => 'team',
         'text' => 'Firms with a steady client base receive specialists assigned only to their clients. Over time, they learn each client’s pay rules, calendars and approvers.'],
        ['title' => 'High-Volume Payroll Processing', 'icon' => 'stack',
         'text' => 'Large headcounts, weekly pay cycles and year-end peaks are handled by scaling the team, not stretching it. Pay dates stay fixed regardless of volume.'],
        ['title' => 'Multi-Client Payroll Administration', 'icon' => 'calendar',
         'text' => 'Each client runs on its own payroll calendar, pay frequency and approval chain. We manage them side by side, with a consolidated status view for your payroll manager.'],
        ['title' => 'Back-Office Payroll Support', 'icon' => 'folder',
         'text' => 'Onboarding forms, timesheet follow-up, payslip distribution and employee payroll queries move to our team. Your staff focus on advisory work and client servicing.'],
    ];

    // CPA firms rows ke icons (24x24, stroke)
    $firmIcons = [
        'file'     => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8l-5-5Z"/><path d="M14 3v5h5"/><path d="M9 13h6M9 17h4"/>',
        'tag'      => '<path d="M3 12.2V4a1 1 0 0 1 1-1h8.2a1 1 0 0 1 .7.3l7.8 7.8a1 1 0 0 1 0 1.4l-7.4 7.4a1 1 0 0 1-1.4 0L3.3 12.9a1 1 0 0 1-.3-.7Z"/><circle cx="8" cy="8" r="1.3"/>',
        'team'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'stack'    => '<path d="m12 3 9 4.5-9 4.5-9-4.5L12 3Z"/><path d="m3 12 9 4.5 9-4.5"/><path d="m3 16.5 9 4.5 9-4.5"/>',
        'calendar' => '<rect x="3.5" y="5" width="17" height="15.5" rx="2"/><path d="M3.5 10h17"/><path d="M8 3v4M16 3v4"/><path d="M8 14h.01M12 14h.01M16 14h.01M8 17.5h.01M12 17.5h.01"/>',
        'folder'   => '<path d="M3 7a2 2 0 0 1 2-2h4l2 2.5h8a2 2 0 0 1 2 2V18a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Z"/><path d="M8 14h8"/>',
    ];

    $businessNeeds = [
        ['title' => 'Payroll Outsourcing for Small &amp; Medium-Sized Businesses',
         'text' => 'We run complete pay cycles for small and medium-sized businesses that outsource payroll for small business needs, from employee setup to payslips and filings. A fixed payroll calendar keeps every pay date on schedule.'],
        ['title' => 'Payroll Support for Growing Businesses',
         'text' => 'Our team adds new employees, pay groups, benefits and locations to your existing payroll setup as you expand. Current pay runs continue without interruption, and reporting extends to every new pay group or entity.'],
        ['title' => 'Payroll Outsourcing for Large Enterprises',
         'text' => 'We process high-volume, multi-entity payroll within your controls, approval limits and payroll system. Each pay run delivers a reconciled journal per entity and a full audit trail, ready for your finance team to post.'],
        ['title' => 'Payroll for Hourly &amp; Shift-Based Workforces',
         'text' => 'We calculate pay for hourly, shift-based and rostered staff in sectors such as healthcare, construction and retail. Penalty rates, overtime and allowances are applied from approved timesheets, accurately and consistently, in every pay cycle.'],
        ['title' => 'Payroll Support for Bookkeeping &amp; Accounting Firms',
         'text' => 'We give bookkeeping and accounting firms a ready-to-use payroll capability to offer their clients. Our specialists run each client’s pay cycle under your firm’s name, while your team keeps the client relationship and final approval.'],
        ['title' => 'Payroll Processing for Multi-Location Businesses',
         'text' => 'We process payroll for employers with sites across states, regions or countries, applying each location’s tax and contribution rules. Reports are produced by location and entity, so payroll costs are visible site by site.'],
    ];
    // Same order as $businessNeeds above
    $needImages = ['payroll-outsourcing/payroll-small-medium-businesses.webp', 'payroll-outsourcing/payroll-growing-businesses.webp', 'payroll-outsourcing/payroll-large-enterprises.webp', 'payroll-outsourcing/payroll-hourly-shift-workforces.webp', 'payroll-outsourcing/payroll-bookkeeping-accounting-firms.webp', 'payroll-outsourcing/payroll-multi-location-businesses.webp'];

    // payroll ke USA / UK / Australia ke alag pages abhi nahi hain, isliye button country site ke home par jata hai
    $regions = [
        ['title' => 'USA Payroll Outsourcing Services', 'img' => $img('payroll-outsourcing/usa-payroll-outsourcing.webp'),
         'button' => ['Explore US Payroll Outsourcing', route('us.home')],
         'text' => 'We process federal and state withholding, FICA, unemployment taxes and benefit deductions, and prepare Forms 941, W-2 and W-3. Qualified overtime and tips are tracked separately, in line with current IRS reporting requirements.'],
        ['title' => 'UK Payroll Outsourcing Services', 'img' => $img('payroll-outsourcing/uk-payroll-outsourcing.webp'),
         'button' => ['Explore UK Payroll Outsourcing', route('uk')],
         'text' => 'We run PAYE, National Insurance, pension auto-enrolment deductions and RTI submissions for every pay period. Benefits in kind are processed through payroll in real time, in line with HMRC’s payrolling requirements.'],
        ['title' => 'Australia Payroll Outsourcing Services', 'img' => $img('payroll-outsourcing/australia-payroll-outsourcing.webp'),
         'button' => ['Explore AU Payroll Outsourcing', route('australia.home')],
         'text' => 'We process PAYG withholding, super contributions and STP reporting for every pay event. Super is calculated and reported each payday under Payday Super rules, so contributions reach employees’ funds on time.'],
    ];

    $industries = [
        [[$img('industries7.png'), 'Healthcare'], [$img('industries4.png'), 'Construction'], [$img('industries8.png'), 'Manufacturing'], [$img('e-commerce-retail-sector.png'), 'E-commerce & Retail'], [$img('industries2.png'), 'Professional Services']],
        [[$img('telecommunications.svg'), 'Technology Companies'], [$img('accounting-and-auditing-firms.png'), 'Accounting & Auditing Firms'], [$img('industries5.png'), 'Law Firms'], [$img('property -management.png'), 'Real Estate']],
    ];

    $processSteps = [
        ['title' => 'Initial Consultation &amp; Payroll Requirements Assessment',
         'text' => 'We record headcount, pay frequencies, pay groups, benefits and the filings in scope. This sets the team size and your payroll calendar.'],
        ['title' => 'Employee Data &amp; Payroll Document Collection',
         'text' => 'Employee records, pay rates, tax details and year-to-date figures are collected through secure channels. Any gaps are listed before setup starts.'],
        ['title' => 'Payroll Setup &amp; Data Validation',
         'text' => 'Your payroll software is configured, or reviewed if already in use, and opening balances are validated. A parallel run can be completed before the first live pay date.'],
        ['title' => 'Payroll Calculation &amp; Processing',
         'text' => 'Hours, changes and one-off payments received by the cut-off are processed. Gross-to-net pay, deductions and contributions are calculated for every employee.'],
        ['title' => 'Quality Checks &amp; Payroll Reconciliation',
         'text' => 'A second specialist checks the pay run and compares it with the previous period. All variances are explained in your pay-run approval pack.'],
        ['title' => 'Client Review &amp; Approval',
         'text' => 'You review the approval pack and approve the pay run. Nothing is finalised without your sign-off.'],
        ['title' => 'Final Payroll Reports &amp; Payment Support',
         'text' => 'After approval, payslips, reports and the payment file are issued, and authorised filings are submitted. Payments are released from your bank account by your authorised signatories.'],
    ];

    $securityCards = [
        ['title' => 'Salary Data Confidentiality', 'img' => $img('payroll-outsourcing/salary-data-confidentiality.webp'),
         'text' => 'Pay data is visible only to the named specialists on your account. Every team member signs a confidentiality agreement before access is granted.'],
        ['title' => 'Credentials Stay With You', 'img' => $img('payroll-outsourcing/credentials-stay-with-you.webp'),
         'text' => 'Payroll software, bank and government portal credentials remain with your business. Our team works through user access you grant and can revoke at any time.'],
        ['title' => 'Approved Changes Only', 'img' => $img('payroll-outsourcing/approved-changes-only.webp'),
         'text' => 'Pay rate, bank detail and employee changes are actioned only from authorised instructions. Each change is logged with who requested and approved it.'],
        ['title' => 'Payment Release Control', 'img' => $img('payroll-outsourcing/payment-release-control.webp'),
         'text' => 'We prepare payment files, but funds are released only by your authorised signatories. Payroll processing and payment approval remain separate.'],
        ['title' => 'Certified Security Processes', 'img' => $img('payroll-outsourcing/certified-security-processes.webp'),
         'text' => 'PCS Global is certified to ISO 27001 for information security and ISO 9001 for quality management, and handles personal data under GDPR. Systems are protected by multi-factor authentication, encryption and IP restrictions.'],
        ['title' => 'Pay Run Accuracy Checks', 'img' => $img('payroll-outsourcing/pay-run-accuracy-checks.webp'),
         'text' => 'Every pay run is reviewed by a second specialist against the previous period and your pay rules before it reaches you for approval.'],
    ];

    $benefits = [
        ['title' => 'Reduce Payroll Administration Costs',
         'text' => 'Outsourcing removes the cost of recruiting, training and covering an in-house payroll officer. Pricing follows headcount and pay frequency.'],
        ['title' => 'Improve Payroll Accuracy &amp; Efficiency',
         'text' => 'Variance checks against the previous pay run and a second-specialist review catch errors before payslips are issued.'],
        ['title' => 'Scale Payroll Operations as Your Business Grows',
         'text' => 'New employees, pay groups and locations are added to the same setup. Capacity rises with headcount while pay dates stay unchanged.'],
        ['title' => 'Free Up Internal Teams for Core Business Activities',
         'text' => 'HR and finance teams stop chasing timesheets and calculating deductions, and put that time into people and planning.'],
        ['title' => 'Access Dedicated Payroll Expertise',
         'text' => 'Specialists trained in US, UK and Australian payroll rules work on your account. PCS Global was founded by Malay Dalal, a Fellow Chartered Accountant with more than 35 years of experience.'],
        ['title' => 'Streamline Payroll Reporting &amp; Workflows',
         'text' => 'Each pay run ends with a register, a liability reconciliation and a journal ready to post. Your payroll calendar keeps cut-offs, approvals and filings predictable.'],
    ];

    $faqs = [
        ['q' => 'What are payroll outsourcing services?',
         'a' => 'Payroll outsourcing services involve an external team running your pay cycle: maintaining employee data, calculating pay and deductions, producing payslips and reports, and handling authorised filings. Your business approves each pay run and releases payments.'],
        ['q' => 'Which payroll functions can be outsourced?',
         'a' => 'Employee data maintenance, gross-to-net calculations, overtime and bonuses, tax and statutory deductions, leave and timesheet processing, new starter and leaver payroll, reports, reconciliations and payroll filings.'],
        ['q' => 'How does payroll outsourcing work?',
         'a' => 'We agree a payroll calendar with cut-offs and approval dates. Your data reaches us by the cut-off, we calculate and check the pay run, you approve it, and we issue payslips, reports and authorised filings.'],
        ['q' => 'Why should businesses outsource payroll services to India?',
         'a' => 'India gives employers access to dedicated payroll specialists trained in US, UK and Australian rules, at a lower cost than an in-house payroll function. PCS Global supports this with ISO 27001-certified security and strict access controls on salary data.'],
        ['q' => 'Can accounting and CPA firms outsource payroll processing?',
         'a' => 'Yes. Accounting and CPA firms outsource payroll processing for their clients, with each pay run returned to the firm for approval. Work can also be delivered under the firm’s own name.'],
        ['q' => 'Does PCS Global offer white-label payroll outsourcing?',
         'a' => 'Yes. Payslips, reports and communications can carry your firm’s branding, and your clients deal only with your firm.'],
        ['q' => 'Can payroll outsourcing support businesses with multiple locations?',
         'a' => 'Yes. Pay runs apply the tax and contribution rules for each state, region or country, with reporting by location and entity.'],
        ['q' => 'Which payroll software does PCS Global support?',
         'a' => 'We work in the payroll features of QuickBooks, Xero, MYOB and Sage, with NetSuite, Zoho Books and Microsoft Excel used for journals and reporting. Other payroll platforms can be confirmed during scoping.'],
        ['q' => 'How does PCS Global protect employee payroll data?',
         'a' => 'Access is limited to named specialists, login credentials stay with your business and every change requires authorised approval. PCS Global is ISO 27001 certified and GDPR compliant.'],
        ['q' => 'Can PCS Global support payroll outsourcing for the USA, UK and Australia?',
         'a' => 'Yes. We process payroll for employers in all three countries, including US federal and state withholding, UK PAYE and RTI, and Australian PAYG withholding, super and STP.'],
    ];

    // card icons (24x24, stroke): process steps ke liye
    $icon = [
        'search'   => '<circle cx="11" cy="11" r="7"/><path d="m20.5 20.5-4.5-4.5"/>',
        'scope'    => '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1"/><path d="M9 10h6M9 14h6M9 18h3"/>',
        'lock'     => '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>',
        'team'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'ledger'   => '<rect x="5" y="3" width="14" height="18" rx="2"/><path d="M8 7h8"/><path d="M8 11h.01M12 11h.01M16 11h.01M8 15h.01M12 15h.01M16 15h.01M8 18h.01M12 18h.01M16 18h.01"/>',
        'growth'   => '<path d="M3 20h18"/><path d="m5 16 4-4 3 3 7-7"/><path d="M15 8h4v4"/>',
        'accuracy' => '<circle cx="12" cy="12" r="9"/><path d="m8 12.5 2.7 2.7L16.5 9"/>',
    ];
    $processIcons = ['search', 'scope', 'ledger', 'team', 'accuracy', 'lock', 'growth'];

    $arrow = '<svg width="18" height="12" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19 6.33L14 11.33M19 6.33L14 1.33M19 6.33H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

    $heroBenefits = [
        ['Dedicated Payroll Specialists', '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>'],
        ['ISO 27001 and ISO 9001 Certified', '<circle cx="12" cy="9" r="5.5"/><path d="m8.5 13.3-1.5 7.2 5-2.7 5 2.7-1.5-7.2"/>'],
        ['US, UK &amp; Australian Payroll Experience', '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3c2.5 2.5 3.8 5.5 3.8 9s-1.3 6.5-3.8 9c-2.5-2.5-3.8-5.5-3.8-9S9.5 5.5 12 3Z"/>'],
        ['You Approve Every Pay Run', '<circle cx="12" cy="12" r="9"/><path d="m8 12.5 2.7 2.7L16.5 9"/>'],
    ];
@endphp

{{-- Hero (light): left = heading + paragraph + CTAs, right = 4 key benefit cards --}}
<section class="acc_hero_light">
    <div class="container">
        <div class="acc_hero_inner">
            <div class="acc_hero_text">
                <h1>Payroll Outsourcing Services for <span>Global Businesses and Accounting Firms</span></h1>
                <p>One late or incorrect pay run can cost more than money. It costs employee trust. PCS Global provides <strong>outsourcing payroll services</strong> that keep every pay cycle accurate, on time, and fully reported for businesses and accounting firms across the USA, UK, and Australia. Our offshore payroll specialists run your payroll inside your own software, and nothing is released until you approve it.</p>
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
            <h2 class="mb-2 mb-xxl-4">Technology and Software We Support</h2>
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
                    <img class="img-fluid" src="{{ $img('payroll-outsourcing/what-are-payroll-outsourcing.webp') }}" loading="lazy" alt="What Are Payroll Outsourcing Services">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter_lt acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">What Are Payroll Outsourcing Services?</h2>
                    <p>Payroll outsourcing services means an external team runs your pay cycle: maintaining employee records, calculating gross-to-net pay, applying tax and statutory deductions, issuing payslips and reports, and handling the related filings.</p>
                    <p>Your business sets pay policy, approves each pay run and releases the payments. The outsourced team manages the calculation, checking and reporting around those decisions.</p>
                    <p>Payroll processing is different from payroll accounting. Processing decides what each employee is paid; accounting records that payroll in the general ledger afterwards.</p>
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
                    <h2 class="mb-3 mb-xxl-4">Why Global Companies Outsource Payroll Services to India?</h2>
                    <p>Payroll is a deadline work. Every pay run has a fixed data cut-off, a fixed pay date and no room for late corrections, which is why employers move it to a dedicated specialist team.</p>
                    <p>Our payroll specialists in India work only on specific payrolls. They are trained in US, UK and Australian pay rules and in the payroll features of QuickBooks, Xero, MYOB and Sage. Each client receives a payroll calendar that sets out data cut-offs, approval dates and filing deadlines for the full year.</p>
                    <p>Salary information is among the most confidential data a business holds. Access is limited to named specialists, our processes are ISO 27001 certified and personal data is handled in line with GDPR. Offshore payroll processing also costs less than an in-house payroll officer, depending on headcount, pay frequency and complexity.</p>
                    <p class="acc_note">PCS Global operates from its head office in Ahmedabad, India, with a presence in Australia, the UK and the USA.</p>
                    <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Discuss Your Outsourcing Requirements</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('payroll-outsourcing/why-outsource-payroll-india.webp') }}" loading="lazy" alt="Why Global Companies Outsource Payroll Services to India">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Service Cards --}}
<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Our Payroll Outsourcing Services</h2>
            <p>Our payroll processing services cover each stage of the pay cycle, from employee records to reconciled reports and statutory filings. Scope is set per client, based on headcount, pay frequency and the filings you want us to manage.</p>
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

{{-- CPA & Accounting Firms (editorial split: left sticky intro + image, right icon rows; CSS: common/service-split.css) --}}
<section class="svc_split mt-100">
    <div class="container">
        <div class="svc_split_inner">
            <div class="svc_split_intro svc_reveal">
                <h2>Payroll Outsourcing Services for Accounting &amp; CPA Firms</h2>
                <p>Accounting and CPA firms add payroll to their client offering without building an in-house payroll team. We run pay cycles in your clients’ payroll software, follow your firm’s procedures and send every pay run to your staff for approval.</p>
                <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Request a Consultation</a>
                <div class="svc_split_img">
                    <img src="{{ $img('payroll-outsourcing/payroll-for-accounting-cpa-firms.webp') }}" loading="lazy" alt="Payroll outsourcing services for accounting and CPA firms">
                </div>
            </div>

            <ol class="svc_split_list">
                @foreach ($firmServices as $card)
                    <li class="svc_split_row svc_reveal">
                        <span class="svc_split_icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $firmIcons[$card['icon']] !!}</svg>
                        </span>
                        <div>
                            <h3>{!! $card['title'] !!}</h3>
                            <p>{!! $card['text'] !!}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>

@push('scripts')
<script>
// services split: scroll reveal (IntersectionObserver; reduced-motion / no-support par sab seedha dikhta hai)
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

{{-- Trust Slider (business needs): left heading + arrows, right image cards --}}
<section class="trust_slider_sec mt-100">
    <div class="trust_slider_wrap">
        <div class="trust_slider_lt">
            <div class="trust_slider_head">
                <h2>Payroll Outsourcing Solutions for Different Business Needs</h2>
                <p>Our outsourced payroll solutions are built around your headcount, pay frequency, locations and filing requirements, with a payroll setup designed for the way your business operates.</p>
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
<script>
document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById('trustSliderTrack');
    const prevBtn = document.querySelector('.trust_slider_prev');
    const nextBtn = document.querySelector('.trust_slider_next');
    const segs = document.querySelectorAll('#trustSliderProgress .trust_slider_seg');
    if (!track || !segs.length) return;

    const originalCards = Array.from(track.querySelectorAll('.trust_slide'));
    const loopCards = originalCards.map((card) => {
        const clone = card.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        clone.querySelectorAll('a, button, input, select, textarea, [tabindex]').forEach((el) => el.setAttribute('tabindex', '-1'));
        track.appendChild(clone);
        return clone;
    });
    const cardLeft = (card) => card.offsetLeft - track.firstElementChild.offsetLeft;
    const cycleWidth = () => cardLeft(loopCards[0]);

    function updateProgress() {
        const width = cycleWidth();
        const position = width > 0 ? track.scrollLeft % width : track.scrollLeft;
        let active = 0, best = Infinity;
        originalCards.forEach((card, i) => {
            const distance = Math.abs(cardLeft(card) - position);
            if (distance < best) { best = distance; active = i; }
        });
        segs.forEach((seg, i) => seg.classList.toggle('active', i === active));
    }

    function scrollByCard(direction) {
        const card = track.querySelector('.trust_slide');
        if (!card) return;
        const gap = parseFloat(getComputedStyle(track).gap) || 0;
        track.scrollBy({ left: direction * (card.offsetWidth + gap), behavior: 'smooth' });
    }

    prevBtn && prevBtn.addEventListener('click', () => scrollByCard(-1));
    nextBtn && nextBtn.addEventListener('click', () => scrollByCard(1));
    track.addEventListener('scroll', () => {
        const width = cycleWidth();
        while (width > 0 && track.scrollLeft >= width) track.scrollLeft -= width;
        updateProgress();
    });
    window.setInterval(() => scrollByCard(1), 4000);
    updateProgress();
});
</script>
@endpush

{{-- Industry Pills --}}
<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Industries We Support With Payroll Outsourcing</h2>
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
            <h2>Payroll Outsourcing Services for the USA, UK &amp; Australia</h2>
            <p>Our international payroll services cover employers in the USA, UK and Australia. Each country has its own tax, contribution and reporting rules, and every pay run is prepared according to the rules of the jurisdiction concerned.</p>
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
            <h2 class="mb-2 mb-xxl-4">Our Payroll Outsourcing Process</h2>
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
                        <h2>Ready to Streamline Your Payroll Operations?</h2>

                        <p>Share your headcount, pay frequency and countries. We will build a payroll calendar and team around them.</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <!-- Bubble effect layers -->
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <!-- Label -->
                            <span class="color-button__label relative z-10 me-2">Book a Free Consultation</span>
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
            <h2 class="mb-2 mb-xxl-4">Payroll Data Security &amp; Quality Assurance</h2>
            <p>Payroll records hold salaries, bank details and personal identifiers for every employee. Each payroll engagement is protected by the following controls.</p>
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
            <h2 class="mb-2 mb-xxl-4">Why Choose PCS Global for Payroll Outsourcing?</h2>
            <p>Payroll outsourcing companies and payroll service providers are judged on two things: accurate pay and confidential data. PCS Global’s payroll service is designed around both. Across 800+ projects for 60+ clients, our team brings more than 100 years of combined experience.</p>
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img('payroll-outsourcing/why-choose-payroll-outsourcing.webp') }}" loading="lazy" alt="Why Choose PCS Global for Payroll Outsourcing">
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
                        <h2>Looking for a Reliable Payroll Outsourcing Partner?</h2>

                        <p>Keep employees paid correctly and on time, with a specialist team running every pay cycle.</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <!-- Bubble effect layers -->
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <!-- Label -->
                            <span class="color-button__label relative z-10 me-2">Discuss Your Outsourcing Requirements</span>
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
            <h2 class="faq-head mb-2 mb-xxl-4">Frequently Asked Questions About Payroll Outsourcing</h2>
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
            <h2>Discuss Your Payroll Outsourcing Requirements</h2>
            <p>Tell us your headcount, pay frequency, countries and payroll software. We will propose a payroll calendar, team and scope for your business or firm.</p>
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
                            <option value="{{ $service }}" @selected($service === 'Payroll Outsourcing')>{{ $service }}</option>
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

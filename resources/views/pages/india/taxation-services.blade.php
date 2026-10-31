@extends('layouts.app', [
    'og_image' => asset('public/front/images/Taxation.jpg')
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
        ['title' => 'Tax Preparation Outsourcing', 'img' => $img('tax-outsourcing/tax-preparation-outsourcing.webp'),
         'text' => 'Our outsourced tax preparation service organises client source documents, reconciles income and expenses to the accounts, and builds indexed workpapers and supporting schedules. Your reviewer starts from a complete, structured file.'],
        ['title' => 'Tax Return Outsourcing', 'img' => $img('tax-outsourcing/tax-return-outsourcing.webp'),
         'text' => 'With tax return outsourcing, draft returns are completed in your firm’s software from the prepared workpapers. Each return is delivered with an open-items list, so your preparer reviews with full context.'],
        ['title' => 'Sales Tax Outsourcing', 'img' => $img('tax-outsourcing/sales-tax-outsourcing.webp'),
         'text' => 'For US clients, we prepare sales tax workings by jurisdiction, reconcile tax collected to the general ledger and draft returns for approval. For UK and Australian clients, we prepare the equivalent VAT and GST workings.'],
        ['title' => 'Tax Compliance Outsourcing', 'img' => $img('tax-outsourcing/tax-compliance-outsourcing.webp'),
         'text' => 'We maintain filing calendars, prepare extension and estimated tax workings, and keep supporting documents organised by client. Deadlines are tracked, while compliance decisions and lodgements remain with your licensed professional.'],
        ['title' => 'Corporate Tax Preparation &amp; Compliance', 'img' => $img('tax-outsourcing/corporate-tax-preparation.webp'),
         'text' => 'We prepare tax provisions, book-to-tax adjustments, depreciation schedules and draft corporate returns from year-end accounts. Every adjustment is documented and traceable for your reviewer.'],
        ['title' => 'Individual &amp; Personal Tax Return Preparation', 'img' => $img('tax-outsourcing/individual-tax-return-preparation.webp'),
         'text' => 'We prepare individual returns covering employment income, investments, rental property, capital gains and deductions. Each return arrives with a clear list of open questions for your preparer.'],
    ];

    $firmServices = [
        ['title' => 'Tax Preparation Support for CPA Firms', 'icon' => 'file',
         'text' => 'We prepare individual, business and entity returns ahead of your review. US firms obtain written Section 7216 consent from clients before return information is shared with preparers outside the United States.'],
        ['title' => 'Tax Preparation Support for Taxation Firms', 'icon' => 'building',
         'text' => 'We take on preparation volume during filing season, while your preparers retain review, signing and client relationships.'],
        ['title' => 'White Label Tax Preparation', 'icon' => 'tag',
         'text' => 'All work is delivered under your firm’s name, using your templates and standards. Your clients deal only with your firm.'],
        ['title' => 'Dedicated Offshore Tax Preparers', 'icon' => 'team',
         'text' => 'Firms with steady volume receive preparers assigned exclusively to their files. The same preparers return each season, already familiar with your clients and review expectations.'],
        ['title' => 'High-Volume Tax Return Processing', 'icon' => 'stack',
         'text' => 'In peak weeks, additional preparers are deployed to process larger batches. Work is sequenced by your filing deadlines, with progress reported throughout.'],
        ['title' => 'Back-Office Tax Support', 'icon' => 'folder',
         'text' => 'We manage document collection, data entry, organiser follow-up and workpaper filing. Your staff concentrate on review, sign-off and client communication.'],
    ];

    $firmIcons = [
        'file'     => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8l-5-5Z"/><path d="M14 3v5h5"/><path d="M9 13h6M9 17h4"/>',
        'building' => '<rect x="4" y="3" width="11" height="18" rx="1.5"/><path d="M15 9h4a1 1 0 0 1 1 1v11H15"/><path d="M8 7h3M8 11h3M8 15h3"/>',
        'tag'      => '<path d="M3 12.2V4a1 1 0 0 1 1-1h8.2a1 1 0 0 1 .7.3l7.8 7.8a1 1 0 0 1 0 1.4l-7.4 7.4a1 1 0 0 1-1.4 0L3.3 12.9a1 1 0 0 1-.3-.7Z"/><circle cx="8" cy="8" r="1.3"/>',
        'team'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'stack'    => '<path d="m12 3 9 4.5-9 4.5-9-4.5L12 3Z"/><path d="m3 12 9 4.5 9-4.5"/><path d="m3 16.5 9 4.5 9-4.5"/>',
        'folder'   => '<path d="M3 7a2 2 0 0 1 2-2h4l2 2.5h8a2 2 0 0 1 2 2V18a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Z"/><path d="M8 14h8"/>',
    ];

    $businessNeeds = [
        ['title' => 'For Small &amp; Medium-Sized Businesses',
         'text' => 'We prepare tax-ready accounts and organised workpapers for your external adviser. Year-end preparation is faster, with fewer queries.'],
        ['title' => 'For Growing Businesses',
         'text' => 'As new entities and jurisdictions are added, tax workpapers for each entity are kept organised and reconciled throughout the year.'],
        ['title' => 'For Enterprises',
         'text' => 'We prepare tax provision workpapers, fixed asset schedules and indirect tax reconciliations within your internal controls and review structure.'],
    ];
    $needImages = ['tax-outsourcing/tax-small-medium-businesses.webp', 'tax-outsourcing/tax-growing-businesses.webp', 'tax-outsourcing/tax-enterprises.webp'];

    $regions = [
        ['title' => 'USA Tax Outsourcing Services', 'img' => $img('tax-outsourcing/usa-tax-outsourcing.webp'),
         'button' => ['Explore US Tax Services', route('taxation-services-usa')],
         'text' => 'We prepare federal and state returns, sales tax workings and supporting schedules for US CPA firms and businesses. Firms obtain Section 7216 consent before client information is shared offshore.'],
        ['title' => 'UK Tax Outsourcing Services', 'img' => $img('tax-outsourcing/uk-tax-outsourcing.webp'),
         'button' => ['Explore UK Tax Services', route('taxation-services-uk')],
         'text' => 'We prepare Self Assessment, partnership, trust and Corporation Tax workings, along with VAT reconciliations. Records are kept ready for Making Tax Digital for Income Tax quarterly updates, in effect since April.'],
        ['title' => 'Australia Tax Outsourcing Services', 'img' => $img('tax-outsourcing/australia-tax-outsourcing.webp'),
         'button' => ['Explore Australian Tax Services', route('taxation.services.australian')],
         'text' => 'We prepare individual, company, partnership and trust return workings and BAS/GST reconciliations. Registered agents obtain client permission for offshore work and remain responsible for lodgement.'],
    ];

    $industries = [
        [[$img('accounting-and-auditing-firms.png'), 'Accounting & Auditing Firms'], [$img('industries4.png'), 'Construction'], [$img('industries8.png'), 'Manufacturing'], [$img('e-commerce-retail-sector.png'), 'E-commerce & Retail'], [$img('telecommunications.svg'), 'Technology Companies']],
        [[$img('industries2.png'), 'Professional Services'], [$img('industries7.png'), 'Healthcare'], [$img('industries5.png'), 'Law Firms'], [$img('property -management.png'), 'Real Estate']],
    ];

    $processSteps = [
        ['title' => 'Initial Consultation &amp; Requirement Assessment',
         'text' => 'We confirm your return volumes, return types, software and deadlines, then set team size and priorities.'],
        ['title' => 'Document &amp; Data Collection',
         'text' => 'Client files are shared through secure channels once the required consent is in place. Missing items are listed before preparation begins.'],
        ['title' => 'Tax Preparation &amp; Processing',
         'text' => 'Workpapers, schedules and draft returns are prepared in your software to your checklists.'],
        ['title' => 'Quality Review',
         'text' => 'A second team member checks every file before release. Open items are documented for your reviewer.'],
        ['title' => 'Client Review &amp; Revisions',
         'text' => 'Your preparer reviews the file, and we complete all requested revisions.'],
        ['title' => 'Finalisation &amp; Filing Support',
         'text' => 'After approval, we finalise the supporting file. Signing and filing are completed by your licensed preparer or registered agent.'],
    ];

    $securityCards = [
        ['title' => 'Certified Standards', 'img' => $img('tax-outsourcing/certified-standards.webp'),
         'text' => 'Our ISO 27001 certification covers how client tax data is stored, accessed and transferred, and ISO 9001 covers how each return is prepared and checked. Personal data is processed under GDPR.'],
        ['title' => 'Consent &amp; Confidentiality', 'img' => $img('tax-outsourcing/consent-confidentiality.webp'),
         'text' => 'A non-disclosure agreement is signed before any data is shared. We work only on files where your firm has obtained the required client consent.'],
        ['title' => 'Controlled Access', 'img' => $img('tax-outsourcing/controlled-access.webp'),
         'text' => 'Only assigned preparers can access your files, with multi-factor authentication at every login. Access levels are set by your firm.'],
        ['title' => 'Secure File Transfer', 'img' => $img('tax-outsourcing/secure-file-transfer.webp'),
         'text' => 'Source documents, workpapers and draft returns move only through encrypted channels (TLS 1.3, AES-256). Client tax data is never sent by personal email or unsecured file links.'],
        ['title' => 'Protected Systems &amp; Backups', 'img' => $img('tax-outsourcing/protected-systems-backups.webp'),
         'text' => 'Our systems are IP-restricted and protected by firewalls and intrusion prevention. Stored data is encrypted and backed up off-site.'],
        ['title' => 'Return Quality Checks', 'img' => $img('tax-outsourcing/return-quality-checks.webp'),
         'text' => 'Every return passes a second internal review against your checklist. Unconfirmed items are flagged for your reviewer, never assumed.'],
    ];

    $benefits = [
        ['title' => 'Experienced Tax Preparation Team',
         'text' => 'Our preparers work on US, UK and Australian returns each season. PCS Global was founded by Malay Dalal, a Fellow Chartered Accountant with more than 35 years of experience.'],
        ['title' => 'Certified Security &amp; Quality Processes',
         'text' => 'Information security and quality management are independently certified to ISO 27001 and ISO 9001.'],
        ['title' => 'Consistent Preparers Every Season',
         'text' => 'The same preparers return each season, bringing knowledge of your clients and review standards.'],
        ['title' => 'Multi-Market Experience',
         'text' => 'One team supports US, UK and Australian returns, giving firms a single partner across jurisdictions.'],
        ['title' => 'Clear Review &amp; Query Process',
         'text' => 'Open items reach your reviewers as documented notes, and every file is checked before release.'],
        ['title' => 'Flexible Seasonal Capacity',
         'text' => 'Preparer numbers scale up for peak months and down afterwards, so costs follow your workload.'],
    ];

    $faqs = [
        ['q' => 'What are outsourcing tax services?',
         'a' => 'Outsourcing tax services involve an external team preparing tax workpapers, schedules and draft returns for an accounting firm or business. The licensed preparer reviews, signs and files each return.'],
        ['q' => 'What tax services can be outsourced?',
         'a' => 'Tax data collection, workpaper preparation, draft individual and entity returns, sales tax, VAT and GST workings, tax provisions and payroll tax reconciliations can all be outsourced.'],
        ['q' => 'How does tax preparation outsourcing work?',
         'a' => 'We assess your volumes and software, receive client files securely once consent is in place, and prepare workpapers and draft returns. Your preparer reviews them, and we complete revisions until the return is ready to file.'],
        ['q' => 'Why should I outsource tax preparation services to India?',
         'a' => 'Firms outsource tax preparation services to India for trained preparers experienced in US, UK and Australian workflows, documented review processes and lower cost than seasonal local hiring, supported by ISO 27001-certified security.'],
        ['q' => 'Can CPA firms outsource tax return preparation?',
         'a' => 'Yes. CPA firms can outsource tax return preparation after obtaining each client’s written Section 7216 consent for sharing information with preparers outside the US. The firm reviews and signs every return.'],
        ['q' => 'What types of tax returns can be outsourced?',
         'a' => 'Individual, business, corporate, partnership and trust returns, along with sales tax, VAT and GST workings. Specific forms depend on the country.'],
        ['q' => 'Is outsourced tax preparation secure?',
         'a' => 'Yes, when the provider’s controls match the sensitivity of tax data. PCS Global is ISO 27001 certified, follows GDPR and applies NDAs, role-based access, multi-factor authentication and encrypted transfer to every tax file.'],
        ['q' => 'Can PCS Global provide tax outsourcing services for the USA, UK and Australia?',
         'a' => 'Yes. We support accounting firms and businesses in all three markets. Review, signing and filing remain with your licensed preparer or registered agent.'],
    ];

    $icon = [
        'search'   => '<circle cx="11" cy="11" r="7"/><path d="m20.5 20.5-4.5-4.5"/>',
        'scope'    => '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1"/><path d="M9 10h6M9 14h6M9 18h3"/>',
        'lock'     => '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>',
        'team'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'ledger'   => '<rect x="5" y="3" width="14" height="18" rx="2"/><path d="M8 7h8"/><path d="M8 11h.01M12 11h.01M16 11h.01M8 15h.01M12 15h.01M16 15h.01M8 18h.01M12 18h.01M16 18h.01"/>',
        'growth'   => '<path d="M3 20h18"/><path d="m5 16 4-4 3 3 7-7"/><path d="M15 8h4v4"/>',
    ];
    $processIcons = ['search', 'lock', 'ledger', 'scope', 'team', 'growth'];

    $arrow = '<svg width="18" height="12" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19 6.33L14 11.33M19 6.33L14 1.33M19 6.33H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

    $heroBenefits = [
        ['Dedicated Tax Preparation Teams', '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>'],
        ['Certified to ISO 27001 and ISO 9001', '<circle cx="12" cy="9" r="5.5"/><path d="m8.5 13.3-1.5 7.2 5-2.7 5 2.7-1.5-7.2"/>'],
        ['US, UK &amp; Australian Tax Return Experience', '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3c2.5 2.5 3.8 5.5 3.8 9s-1.3 6.5-3.8 9c-2.5-2.5-3.8-5.5-3.8-9S9.5 5.5 12 3Z"/>'],
        ['Secure &amp; Confidential Project Delivery', '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>'],
    ];
@endphp

<section class="acc_hero_light">
    <div class="container">
        <div class="acc_hero_inner">
            <div class="acc_hero_text">
                <h1>Outsourcing Tax Services for <span>Global Businesses and Accounting Firms</span></h1>
                <p>Tax preparation demands accuracy, structured review and capacity that rises sharply in tax filing season. PCS Global provides <strong>outsourcing tax services</strong> to accounting firms, CPA practices and businesses across the USA, UK and Australia, covering outsourced tax preparation, workpapers, supporting schedules and draft returns. Our offshore team works with your firm’s software and reviews your checklists. Every return is reviewed, signed and filed by your licensed preparer or registered agent.</p>
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

<section class="clients acc_software mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Technology and Software We Support</h2>
        </div>
    </div>
    <div class="client_slider_full">
        <div class="client_slider">
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

<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-5">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('tax-outsourcing/what-are-taxation-outsourcing.webp') }}" loading="lazy" alt="What Are Taxation Outsourcing Services">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter_lt acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">What Are Taxation Outsourcing Services?</h2>
                    <p>Taxation outsourcing services involve assigning tax preparation work, including data gathering, reconciliations, workpapers and draft returns, to an external team that works from your client records and within your review process.</p>
                    <p>Professional responsibility does not move. Your CPA, enrolled agent or registered tax agent reviews, signs and files every return. The outsourced team delivers the preparation work that review depends on.</p>
                    <p>Most firms begin with individual returns or business workpapers in peak season, then extend the scope to entity returns and year-round support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="row gy-4 gy-lg-0 justify-content-between align-items-stretch">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class=" acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">Why Global Companies Outsource Tax Services to India?</h2>
                    <p>For many years, accounting firms in the USA, UK and Australia have outsourced from India to manage tax season volume. The model gives firms trained preparation capacity that expands in peak months without permanent local hiring.</p>
                    <p>Our preparers are trained in US, UK and Australian tax workflows and work to your firm’s checklists, templates and review standards. Every file follows a documented procedure, which keeps output consistent across preparers and across seasons. All workpapers, review notes and correspondence are prepared in English.</p>
                    <p>Offshore tax preparation costs less than equivalent seasonal hiring, based on return volume and complexity. Tax files carry highly sensitive data, so every engagement runs under ISO 27001-certified security processes, with personal data handled in line with GDPR.</p>
                    <p class="acc_note">PCS Global is headquartered in Ahmedabad, India, with a presence in Australia, the UK and the USA.</p>
                    <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Discuss Your Outsourcing Requirements</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('tax-outsourcing/why-outsource-tax-india.webp') }}" loading="lazy" alt="Why Global Companies Outsource Tax Services to India">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Our Outsourced Tax Services</h2>
            <p>Our taxation services cover the full preparation cycle, from collecting source documents to a review-ready file. Firms engage individual services or combine them across their return mix.</p>
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

<section class="svc_split mt-100">
    <div class="container">
        <div class="svc_split_inner">
            <div class="svc_split_intro svc_reveal">
                <h2>Tax Outsourcing Services for CPA &amp; Taxation Firms</h2>
                <p>Taxation and CPA firms use our team to expand preparation capacity in filing season and across the year. We work with your software, follow your checklists and return every file for review and signature.</p>
                <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Request a Consultation</a>
                <div class="svc_split_img">
                    <img src="{{ $img('tax-outsourcing/tax-support-cpa-firms.webp') }}" loading="lazy" alt="Tax preparation support for CPA and taxation firms">
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

<section class="trust_slider_sec">
    <div class="trust_slider_wrap">
        <div class="trust_slider_lt">
            <div class="trust_slider_head">
                <h2>Tax Outsourcing Solutions for Different Business Needs</h2>
                <p>Every engagement is scoped to your return volume, complexity and existing review capacity.</p>
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

<section class="industries mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Industries We Support</h2>
            <p>Every industry has its own tax and reporting patterns. These are the sectors our teams currently work with:</p>
        </div>
    </div>

    <div class="industries_bot">
        <div class="ind_marquee">
            @foreach ($industries as $row)
                <div class="ind_row {{ $loop->odd ? 'ind_row_up' : 'ind_row_down' }}">
                    <div class="ind_track">
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
            <h2>Global Tax Outsourcing Services for USA, UK &amp; Australia</h2>
            <p>Each market has its own forms, deadlines and preparer rules. We prepare work to the requirements of each jurisdiction, while review, signing and filing remain with your licensed professional.</p>
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

<section class="process_sec mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Our Tax Outsourcing Process</h2>
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

<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>Ready to Simplify Your Tax Season?</h2>

                        <p>Discuss your return volumes and deadlines with our team and secure the preparation capacity your firm needs.</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <span class="color-button__label relative z-10 me-2">Book a Free Consultation</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Tax Data Security &amp; Quality Assurance</h2>
            <p>Tax files contain US Social Security numbers (SSNs), UK Unique Taxpayer References (UTRs), Australian Tax File Numbers (TFNs) and detailed income records. Every tax engagement runs under the following controls.</p>
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

<section class="acc_why mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Why Businesses Choose PCS Global for Tax Outsourcing?</h2>
            <p>When business owners compare tax outsourcing providers, three questions decide it: how client consent is handled, how data is protected and how carefully returns are reviewed. Our process answers each one in writing before work begins. To date, PCS Global has delivered 800+ projects for 60+ clients, backed by more than 100 years of combined team experience.</p>
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img('tax-outsourcing/why-choose-tax-outsourcing.webp') }}" loading="lazy" alt="Why Businesses Choose PCS Global for Tax Outsourcing">
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

<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>Looking for a Reliable Tax Outsourcing Partner?</h2>

                        <p>PCS Global takes on your tax preparation workload while your team retains review, sign-off and client relationships.</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <span class="color-button__label relative z-10 me-2">Discuss Your Outsourcing Requirements</span>
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

<section class="mt-80">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="faq-head mb-2 mb-xxl-4">Frequently Asked Questions About Tax Outsourcing</h2>
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

@php
    $contactFormServices = ['Accounting Outsourcing', 'Bookkeeping Outsourcing', 'Taxation Outsourcing', 'Payroll Outsourcing', 'Recruitment Outsourcing', 'Strata Management Services'];
@endphp
<section class="contact_band mt-100" id="consultation">
    <div class="container">
        <div class="contact_band_head">
            <h2>Discuss Your Tax Outsourcing Requirements</h2>
            <p>Share your return volumes, return types, software and filing deadlines. Our team will recommend a tax preparation setup that fits your firm.</p>
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
                        @foreach ($contactFormServices as $service)
                            <option value="{{ $service }}" @selected($service === 'Taxation Outsourcing')>{{ $service }}</option>
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

{{-- Bookkeeping outsourcing page (/bookkeeping-outsourcing-services). Controller: ServiceController@bookkeepingServices.
     Same layout and classes as taxation-services.blade.php: a PHP data block first, then the markup of each section.
     CSS: style.css + common/hero-dark.css + common/home-sections.css + pages/accounting-outsourcing.css + common/service-split.css (see @push('styles') below).
     Change text or images in this file only. --}}
@extends('layouts.app', [
    'og_image' => asset('public/front/images/Full-Cycle-Bookkeeping.png')
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

    // Software logos (same files as the home page "Tools & Technology" tab). Microsoft Excel has no logo file.
    $software = [
        ['Homepage_07.png', 'QuickBooks'],
        ['Homepage_02.png', 'Xero'],
        ['Homepage_12.png', 'MYOB'],
        ['Homepage_08.png', 'Sage'],
        ['Homepage_06.png', 'NetSuite'],
        ['Homepage_30.png', 'Zoho Books'],
        ['Homepage_11.png', 'FreshBooks'],
    ];

    $services = [
        ['title' => 'General Bookkeeping &amp; Transaction Recording', 'img' => $img('bookkeeping-outsourcing/general-bookkeeping-and-transaction-recording.webp'),
         'text' => 'Each sale, purchase, payment and receipt goes into your software with the right account code. Regular items such as rent or software subscriptions get bank rules, so the same transaction is entered the same way in March as it was in January.'],
        ['title' => 'Bank &amp; Credit Card Reconciliation', 'img' => $img('bookkeeping-outsourcing/bank-and-credit-card-reconciliation.webp'),
         'text' => 'Bank accounts, credit cards and payment platforms such as Stripe and PayPal are matched to their statements every week or month. Unmatched or duplicated items are recorded on a query log for your confirmation, not adjusted on assumption.'],
        ['title' => 'Accounts Payable Bookkeeping', 'img' => $img('bookkeeping-outsourcing/accounts-payable-bookkeeping.webp'),
         'text' => 'Supplier bills are entered as soon as they arrive, with the original document attached and tax coded correctly. When a payment run needs approval, your team works from a ledger that is already up to date.'],
        ['title' => 'Accounts Receivable Bookkeeping', 'img' => $img('bookkeeping-outsourcing/accounts-receivable-bookkeeping.webp'),
         'text' => 'We post your sales invoices and match each customer payment to the invoice it clears, including part payments and single transfers covering several invoices. The result is a debtor list your team can follow up with confidence.'],
        ['title' => 'Month-End Bookkeeping &amp; Closing', 'img' => $img('bookkeeping-outsourcing/month-end-bookkeeping-and-closing.webp'),
         'text' => 'We do not close a month until every transaction is in, every account reconciles and every bill is entered. Your close summary shows what was completed and what still needs your input.'],
        ['title' => 'Catch-Up &amp; Backlog Bookkeeping', 'img' => $img('bookkeeping-outsourcing/financial-statement-preparation.webp'),
         'text' => 'Where several months are behind, we record them in date order and reconcile each one before starting the next. The file is brought current on a clear timeline, with no shortcuts.'],
    ];

    // "Professional Outsourcing Bookkeeping Services for Businesses" (trust slider)
    $businessNeeds = [
        ['title' => 'Accurate Day-to-Day Bookkeeping',
         'text' => 'Coding happens every week or fortnight, never in a rush before a deadline. Because the books are reconciled that often, a wrong code or missing bill is found within days and fixed while it is still small.'],
        ['title' => 'Dedicated Offshore Bookkeepers',
         'text' => 'Your file is assigned to bookkeepers who stay on it. Over time, they learn your suppliers, customers and coding rules, and the number of questions sent to you falls.'],
        ['title' => 'Flexible Bookkeeping Support',
         'text' => 'Engagements start at the scope you need. Many businesses that outsource bookkeeping for small business needs begin with bank reconciliations alone, and add payables, receivables or expenses once that is running well.'],
        ['title' => 'Bookkeeping That Scales With Your Business',
         'text' => 'New bank accounts, sales channels and entities all increase transaction volume. Bookkeeping hours are adjusted to match growth and reduced after peak periods.'],
    ];
    // Same order as $businessNeeds above
    $needImages = ['bookkeeping-outsourcing/accurate-day-to-day-bookkeeping.webp', 'bookkeeping-outsourcing/dedicated-offshore-bookkeepers.webp', 'bookkeeping-outsourcing/flexible-bookkeeping-support.webp', 'bookkeeping-outsourcing/bookkeeping-that-scales-with-your-business.webp'];

    // "Bookkeeping Solutions for Global Accounting & CPA Firms" (editorial split section)
    $firmServices = [
        ['title' => 'Outsourced Bookkeeping for CPA Firms', 'icon' => 'file',
         'text' => 'Our CPA firm bookkeeping services cover coding, reconciliations and month-end bookkeeping across your client portfolio. Your team reviews each file and retains advisory, tax and compliance work.'],
        ['title' => 'White Label Bookkeeping Services', 'icon' => 'tag',
         'text' => 'All bookkeeping is delivered under your firm’s name. Your clients deal only with your firm.'],
        ['title' => 'Back-Office Bookkeeping Support', 'icon' => 'folder',
         'text' => 'We take on bank feed coding, receipt matching and ledger maintenance across your client list. Your staff gain time for file reviews, client meetings and advisory work.'],
        ['title' => 'Dedicated Offshore Bookkeeping Team', 'icon' => 'team',
         'text' => 'Firms with consistent client volume receive a team assigned exclusively to their files. The team uses your practice tools and checklists and reports to your bookkeeping manager.'],
    ];

    // Icons of the split section rows (24x24, stroke)
    $firmIcons = [
        'file'   => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8l-5-5Z"/><path d="M14 3v5h5"/><path d="M9 13h6M9 17h4"/>',
        'tag'    => '<path d="M3 12.2V4a1 1 0 0 1 1-1h8.2a1 1 0 0 1 .7.3l7.8 7.8a1 1 0 0 1 0 1.4l-7.4 7.4a1 1 0 0 1-1.4 0L3.3 12.9a1 1 0 0 1-.3-.7Z"/><circle cx="8" cy="8" r="1.3"/>',
        'team'   => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'folder' => '<path d="M3 7a2 2 0 0 1 2-2h4l2 2.5h8a2 2 0 0 1 2 2V18a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Z"/><path d="M8 14h8"/>',
    ];

    // The USA / UK / Australia buttons open the accounting and bookkeeping page of each country site.
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

    $industries = [
        [[$img('accounting-and-auditing-firms.png'), 'Accounting & Auditing Firms'], [$img('industries2.png'), 'Professional Services'], [$img('industries4.png'), 'Construction'], [$img('e-commerce-retail-sector.png'), 'E-commerce & Retail'], [$img('industries7.png'), 'Healthcare']],
        [[$img('property -management.png'), 'Real Estate'], [$img('property -management.png'), 'Strata / Property Management'], [$img('industries8.png'), 'Manufacturing'], [$img('industries5.png'), 'Law Firms']],
    ];

    $processSteps = [
        ['title' => 'Understand Your Bookkeeping Requirements',
         'text' => 'We confirm your transaction volume, bank and card accounts, software, deadlines and required update frequency.'],
        ['title' => 'Review Your Existing Books &amp; Processes',
         'text' => 'Before starting, we go through your file and note any backlog, unreconciled items or coding problems.'],
        ['title' => 'Set Up Systems &amp; Access',
         'text' => 'You decide the level of access we receive to your accounting software and document storage. We agree how bills, receipts and statements will be sent.'],
        ['title' => 'Assign Your Bookkeeping Team',
         'text' => 'We match bookkeepers to your volume and transaction types, and you deal with one named contact for daily questions.'],
        ['title' => 'Start Day-to-Day Bookkeeping',
         'text' => 'Coding and reconciliation start on the dates we agree. Backlog or cleanup work runs in parallel where required.'],
        ['title' => 'Review &amp; Quality Check',
         'text' => 'Each period is checked against your file’s checklist before closing. Questions reach you once a week, in one list.'],
        ['title' => 'Monthly Reporting &amp; Continuous Improvement',
         'text' => 'You receive a monthly close summary. The engagement is reviewed with you periodically, and coding rules, timing or scope are updated where needed.'],
    ];

    $securityCards = [
        ['title' => 'Certified Standards', 'img' => $img('bookkeeping-outsourcing/certified-standards.webp'),
         'text' => 'Information security at PCS Global is certified to ISO 27001, and quality management to ISO 9001. Any personal data in your books is handled under GDPR.'],
        ['title' => 'Confidentiality Agreements', 'img' => $img('bookkeeping-outsourcing/confidentiality-agreements.webp'),
         'text' => 'We sign a non-disclosure agreement before you share a single record. Your data is used only for the bookkeeping work within the agreed scope.'],
        ['title' => 'Controlled File Access', 'img' => $img('bookkeeping-outsourcing/controlled-file-access.webp'),
         'text' => 'Your file is open only to the bookkeepers assigned to it, and every login requires multi-factor authentication. You set the permission level in your accounting software.'],
        ['title' => 'Secure Document Sharing', 'img' => $img('bookkeeping-outsourcing/secure-document-sharing.webp'),
         'text' => 'Statements, receipts and bills are exchanged through encrypted channels using TLS 1.3 and AES-256. Personal email is never used for financial documents.'],
        ['title' => 'Protected Systems &amp; Backups', 'img' => $img('bookkeeping-outsourcing/protected-systems-and-backups.webp'),
         'text' => 'Access to our systems is restricted by IP address, with firewalls and intrusion prevention in place. Stored data is encrypted and backed up off-site, and we run vulnerability scans and penetration tests on a schedule.'],
        ['title' => 'Bookkeeping Quality Checks', 'img' => $img('bookkeeping-outsourcing/bookkeeping-quality-checks.webp'),
         'text' => 'Every file has a checklist, and a second reviewer goes through the month before we close it. Unclear transactions are raised as queries, never coded on assumption.'],
    ];

    $benefits = [
        ['title' => 'Experienced Bookkeeping Professionals',
         'text' => 'Our bookkeepers work in US, UK and Australian accounting files every day. PCS Global was founded by Malay Dalal, a Fellow Chartered Accountant with more than 35 years of experience.'],
        ['title' => 'Certified Security &amp; Quality Processes',
         'text' => 'Both our information security and our quality management carry independent certification: ISO 27001 and ISO 9001.'],
        ['title' => 'Consistent Bookkeeping Team',
         'text' => 'The bookkeepers assigned at the start of your engagement remain on your file, which keeps coding consistent and avoids repeated handovers.'],
        ['title' => 'Works in Your Existing Software',
         'text' => 'No migration is required. Your data remains in your own platform, with our work visible as it is completed.'],
        ['title' => 'Clear Review &amp; Query Process',
         'text' => 'Unclear items are consolidated into one query list, and every month is checked before it closes.'],
        ['title' => 'Flexible Scope &amp; Pricing',
         'text' => 'You pay for the transaction volume and services you actually use. If your needs change next quarter, the scope changes with them.'],
    ];

    $faqs = [
        ['q' => 'What are outsourcing bookkeeping services?',
         'a' => 'It is the recording side of your finances, handled by an external team: transactions entered, bank accounts reconciled, payables and receivables kept current and each month closed in your own software. The records stay yours, and so does every approval.'],
        ['q' => 'How does bookkeeping outsourcing work?',
         'a' => 'We start by reviewing your books and setting up access. Once bookkeepers are assigned, your transactions are reconciled on a fixed cycle, questions arrive in one weekly list and each month ends with a close summary.'],
        ['q' => 'What bookkeeping tasks can be outsourced?',
         'a' => 'Almost any recurring task. Coding, bank and card reconciliations, bills and sales invoices, receipt matching, ledger cleanup, backlog work and month-end closing are all commonly outsourced.'],
        ['q' => 'Is offshore bookkeeping suitable for small businesses?',
         'a' => 'Yes. Offshore bookkeeping gives a small business properly kept books for less than the cost of a part-time bookkeeper. Bank reconciliations are the usual starting point, with more added as the business grows.'],
        ['q' => 'Why should I outsource bookkeeping to India?',
         'a' => 'India is an established centre for finance and accounting outsourcing, with bookkeepers trained in international practices and experienced in leading cloud platforms. Businesses gain skilled capacity at a lower cost than local hiring, supported by ISO 27001-certified security processes.'],
        ['q' => 'Which bookkeeping software does PCS Global support?',
         'a' => 'QuickBooks, Xero, MYOB, Sage, NetSuite, Zoho Books, FreshBooks and Microsoft Excel. Our bookkeepers log in to the file you already use, so nothing needs to move.'],
        ['q' => 'Is outsourced bookkeeping secure?',
         'a' => 'With the right controls, yes. At PCS Global, an NDA comes first, access is limited to your assigned bookkeepers with multi-factor authentication, and our processes are ISO 27001 certified and GDPR compliant.'],
        ['q' => 'Can PCS Global provide bookkeeping services for USA, UK and Australian businesses?',
         'a' => 'Yes. We maintain books for businesses and accounting firms in all three countries, coding for sales tax, VAT or GST as required. Tax returns and statutory filings remain with you or your licensed adviser.'],
    ];

    // Card icons (24x24, stroke) for the process steps
    $icon = [
        'search'   => '<circle cx="11" cy="11" r="7"/><path d="m20.5 20.5-4.5-4.5"/>',
        'scope'    => '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1"/><path d="M9 10h6M9 14h6M9 18h3"/>',
        'lock'     => '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/><path d="M12 14.5v2.5"/>',
        'team'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>',
        'ledger'   => '<rect x="5" y="3" width="14" height="18" rx="2"/><path d="M8 7h8"/><path d="M8 11h.01M12 11h.01M16 11h.01M8 15h.01M12 15h.01M16 15h.01M8 18h.01M12 18h.01M16 18h.01"/>',
        'growth'   => '<path d="M3 20h18"/><path d="m5 16 4-4 3 3 7-7"/><path d="M15 8h4v4"/>',
        'accuracy' => '<circle cx="12" cy="12" r="9"/><path d="m8 12.5 2.7 2.7L16.5 9"/>',
    ];
    $processIcons = ['search', 'scope', 'lock', 'team', 'ledger', 'accuracy', 'growth'];

    $arrow = '<svg width="18" height="12" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M19 6.33L14 11.33M19 6.33L14 1.33M19 6.33H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

    $heroBenefits = [
        ['Dedicated offshore bookkeepers', '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c0-3.6 2.9-6 6.5-6s6.5 2.4 6.5 6"/><path d="M16 4.6a3.5 3.5 0 0 1 0 6.8"/><path d="M18 14.3c2.1.7 3.5 2.6 3.5 5.7"/>'],
        ['Certified to ISO 27001 and ISO 9001', '<circle cx="12" cy="9" r="5.5"/><path d="m8.5 13.3-1.5 7.2 5-2.7 5 2.7-1.5-7.2"/>'],
        ['Works in your existing software', '<rect x="3" y="4" width="18" height="13" rx="2"/><path d="M8 21h8M12 17v4"/>'],
        ['Daily, weekly or monthly bookkeeping cycles', '<rect x="3.5" y="5" width="17" height="15.5" rx="2"/><path d="M3.5 10h17"/><path d="M8 3v4M16 3v4"/>'],
    ];
@endphp

{{-- Hero (light): left = heading + paragraph + CTAs, right = 4 key benefit cards --}}
<section class="acc_hero_light">
    <div class="container">
        <div class="acc_hero_inner">
            <div class="acc_hero_text">
                <h1>Outsourcing Bookkeeping Services for <span>Global Businesses and Accounting Firms</span></h1>
                <p>Carrying daily financial records requires a lot of time, consistency and attention to detail. PCS Global provides <strong>bookkeeping outsourcing services</strong> to help and support global businesses and accounting firms in maintaining accurate financial records and managing transactions effectively. The PCS Global team supports accounts payable and receivable, bank reconciliations and your firm's month-end bookkeeping by working on your current accounting software and processes to make sure the workflows are smooth. Whether your firm needs routine bookkeeping or support in handling multiple client accounts management, our solutions are designed to adapt to your business needs.</p>
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
            {{-- Rendered twice so the slider loops without gaps even with few logos --}}
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
                    <img class="img-fluid" src="{{ $img('bookkeeping-outsourcing/what-are-outsourcing-bookkeeping-services.webp') }}" loading="lazy" alt="What Are Outsourcing Bookkeeping Services">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counter_lt acc_split_text">
                    <h2 class="mb-3 mb-xxl-4">What Are Outsourcing Bookkeeping Services?</h2>
                    <p>Outsourcing bookkeeping services means your daily transaction recording (sales, purchases, payments and bank activity) is handled by an external team, inside your own accounting software and on a schedule you set.</p>
                    <p>Bookkeeping comes before accounting, not instead of it. Our work is complete when each transaction is entered, coded to the right account and matched to the bank statement. Your accountant takes it from there into adjustments, reporting, tax and advice.</p>
                    <p>A late bookkeeping file holds up everything that depends on it. Outsourcing keeps that first stage current, every week.</p>
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
                    <h2 class="mb-3 mb-xxl-4">Why Global Companies Outsource Bookkeeping Services From India?</h2>
                    <p>India is one of the world’s most established centres for finance and accounting outsourcing. Businesses and accounting firms in the USA, UK and Australia rely on it for skilled bookkeeping capacity that can be scaled without local recruitment.</p>
                    <p>Outsource bookkeeping services from India gives you access to bookkeepers trained in international bookkeeping practices and experienced in QuickBooks, Xero, MYOB and Sage. Our teams work to fixed schedules and documented procedures, which keeps your records consistent from one month to the next. All records, file notes and correspondence are prepared in English.</p>
                    <p>Offshore bookkeeping costs less than an equivalent local hire, with the difference based on your transaction volume and scope. Cost efficiency comes with strong data protection: our processes are ISO 27001 certified, and personal data in your books is handled in line with GDPR.</p>
                    <p class="acc_note">PCS Global is headquartered in Ahmedabad, India, with a presence in Australia, the UK and the USA.</p>
                    <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Discuss Your Outsourcing Requirements</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="partner_img">
                    <img class="img-fluid" src="{{ $img('bookkeeping-outsourcing/why-global-companies-outsource-bookkeeping-services-from-india.webp') }}" loading="lazy" alt="Why Global Companies Outsource Bookkeeping Services From India">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Service Cards --}}
<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4">Our Outsourced Bookkeeping Services</h2>
            <p>Our bookkeeping services cover the full recording cycle, from the first transaction of the month to a closed, reconciled period. Each service can be outsourced individually or combined, based on your volume and software.</p>
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

{{-- Accounting & CPA Firms (editorial split: sticky intro + image on the left, icon rows on the right; CSS: common/service-split.css) --}}
<section class="svc_split svc_split_open mt-100">
    <div class="container">
        <div class="svc_split_inner">
            <div class="svc_split_intro svc_reveal">
                <h2>Bookkeeping Solutions for Global Accounting &amp; CPA Firms</h2>
                <p>Accounting and CPA firms use our bookkeeping solutions to add capacity when client bookkeeping outgrows their internal team. We work in your clients’ files, follow your firm’s procedures and return every file for review.</p>
                <a class="com_btn1" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Request a Consultation</a>
                <div class="svc_split_img">
                    <img src="{{ $img('bookkeeping-outsourcing/bookkeeping-solutions-for-global-accounting-and-cpa-firms.webp') }}" loading="lazy" alt="Bookkeeping solutions for accounting and CPA firms">
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
// Split section: scroll reveal (IntersectionObserver; with reduced motion or no support everything is shown at once)
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

{{-- Trust Slider (professional bookkeeping for businesses): left heading + arrows, right image cards --}}
<section class="trust_slider_sec">
    <div class="trust_slider_wrap">
        <div class="trust_slider_lt">
            <div class="trust_slider_head">
                <h2>Professional Outsourcing Bookkeeping Services for Businesses</h2>
                <p>With our business bookkeeping services, owners and finance teams get well-kept records without hiring, training or supervising a bookkeeper. As a professional bookkeeping service, PCS Global works to an agreed schedule, applies your coding rules and assigns a named point of contact.</p>
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
        </div>
    </div>

    <div class="industries_bot">
        <div class="ind_marquee">
            @foreach ($industries as $row)
                <div class="ind_row {{ $loop->odd ? 'ind_row_up' : 'ind_row_down' }}">
                    <div class="ind_track">
                        {{-- Rendered four times so the track loops seamlessly even with few cards (-50% translate) --}}
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
            <h2>Global Bookkeeping Services for USA, UK &amp; Australia</h2>
            <p>Sales tax, VAT and GST each follow their own coding rules, and our bookkeepers apply the ones relevant to your country. Filing tax returns and statutory documents stays with you or your licensed adviser.</p>
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
            <h2 class="mb-2 mb-xxl-4">How Our Outsourced Bookkeeping Process Works</h2>
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

{{-- CTA Banner (same component as the India home page: com_inner_banners, CSS style.css + responsive.css) --}}
<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>Ready to Streamline Your Bookkeeping Operations?</h2>

                        <p>Get reliable bookkeeping support to maintain accurate financial records, reduce administrative workload, and keep your business finances organised.</p>

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
            <h2 class="mb-2 mb-xxl-4">Data Security &amp; Quality Assurance</h2>
            <p>Your books hold supplier details, customer payments and bank activity, and they deserve the same care as any confidential document. Every bookkeeping engagement runs under the following controls.</p>
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
            <h2 class="mb-2 mb-xxl-4">Why Businesses Choose PCS Global for Bookkeeping Outsourcing?</h2>
            <p>Among outsourced bookkeeping firms, the biggest differences show up in three places: data security, staff continuity and query handling. PCS Global is built around all three. To date, PCS Global has delivered 800+ projects for 60+ clients, backed by more than 100 years of combined team experience.</p>
        </div>

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="{{ $img('bookkeeping-outsourcing/why-businesses-choose-pcs-global-for-bookkeeping-outsourcing.webp') }}" loading="lazy" alt="Why Businesses Choose PCS Global for Bookkeeping Outsourcing">
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

{{-- CTA Banner (same component as the India home page: com_inner_banners, CSS style.css + responsive.css) --}}
<section class="mt-100">
    <div class="container">
        <div class="com_inner_banners">
            <div class="row align-items-lg-end align-items-xxl-center">
                <div class="col-lg-7">
                    <div class="com_inner_banner">
                        <h2>Looking for a Reliable Bookkeeping Outsourcing Partner?</h2>

                        <p>Partner with PCS Global for accurate bookkeeping, organised financial records, and flexible support tailored to your Australian business needs.</p>

                        <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-hover-colors='{{ $bubbleColors }}'>

                            <!-- Bubble effect layers -->
                            <span class="color-button__background"></span>
                            <span class="color-button__bubble-container">
                                <span class="color-button__bubble"></span>
                            </span>

                            <!-- Label -->
                            <span class="color-button__label relative z-10 me-2">Discuss Your Bookkeeping Requirements</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ List --}}
<section class="mt-80">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="faq-head mb-2 mb-xxl-4">Frequently Asked Questions About Outsourcing Bookkeeping</h2>
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
            <h2>Discuss Your Bookkeeping Requirements</h2>
            <p>Share your monthly transaction volume, accounting software and the current state of your books. Our team will recommend a bookkeeping schedule and scope that suits your business or firm.</p>
        </div>

        <form id="contactBandForm" class="validated-form contact_band_form" action="{{ route('request.store') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="form_type" value="India Footer Form">
            <input type="hidden" name="country" id="cfCountry" value="India">
            <input type="hidden" name="full_phone" id="cfFullPhone">
            {{-- Honeypot field for bots, must stay empty --}}
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
                            <option value="{{ $service }}" @selected($service === 'Bookkeeping Outsourcing')>{{ $service }}</option>
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
// Footer form: phone country flag (intl-tel-input) and "country" field sync, same as the India home page.
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

<?php

// US home page ka saara content (text, images, links).
// - Neeche 'return' me sections usi order me hain jaise page par dikhte hain.
// - 'type' = component: resources/views/components/sections/<type>.blade.php
// - 'props' = us section ka data. Text badalna ho to yahin badlo.
// $db: images (Trusted by logos), blogs, ourexpert (team) - admin panel / database se aate hain.

return function (array $db) {
    ['images' => $images, 'blogs' => $blogs, 'ourexpert' => $ourexpert] = $db;

    $img = fn ($file) => asset('public/front/images/' . $file);
    $us = fn ($path) => url('us/' . $path);
    $consult = url('us') . '#consultation';   // jin services ka page abhi nahi hai, wo form par jaati hain

    $serviceCards = [
        ['title' => 'Accounting Outsourcing Services', 'img' => $img('figma-precision/accounting-outsourcing.png'), 'url' => $us('bookkeeping-and-accounting-services'),
         'text' => 'Keeping your accounts accurate and current is demanding, and for many US companies it draws focus away from running the business. We take on the full accounting cycle, from reconciliations and the general ledger to closing your books each month and at year-end, all to US GAAP. You get a clear, current picture of your finances whenever you need it. And because you are not carrying a full in-house team, the cost is considerably lower.'],
        ['title' => 'Bookkeeping Outsourcing Services', 'img' => $img('common/services/bookkeeping-team.jpg'), 'url' => $us('bookkeeping-and-accounting-services'),
         'text' => 'Accurate books are the foundation everything else is built on, from tax filings to financial reporting. We log and match every transaction as it comes through, keeping your records current and your numbers something you can trust. We work inside the software your business already runs on, so nothing about your setup has to change. The result is clean, reliable books maintained month after month.'],
        ['title' => 'Outsourced Tax Preparation Services', 'img' => $img('common/services/tax-team.jpg'), 'url' => $us('taxation-services'),
         'text' => 'Tax season places real strain on US businesses and CPA firms alike. We provide tax preparation support that gets returns organized, reviewed, and ready to file on schedule, easing the pressure when it peaks. Our team stays current on the federal and state rules that affect your filings, which reduces errors and last-minute surprises. You receive accurate, well-prepared returns and a far smoother season.'],
        ['title' => 'Payroll Outsourcing Services', 'img' => $img('us/service-4.jpg'), 'url' => $consult,
         'text' => 'Payroll is one area where employees notice mistakes immediately, so accuracy matters in every cycle. We manage the full process, including pay runs, withholdings, and the associated payroll tax filings, all processed correctly and on time. Your people are paid accurately, and your compliance obligations are met without adding to your team\'s workload. It removes a recurring, high-stakes responsibility from your team.'],
        ['title' => 'Outsourced Audit Support Services', 'img' => $img('us/service-5.jpg'), 'url' => $consult,
         'text' => 'Audits seem a lot less painful when your papers are in order, and the work is done. We get your schedules, reconciliations, and backup documentation ready so that when it comes time for your audit, your auditor does not have to look far to find the information needed. We help facilitate an easier, smoother audit with less interruption to your employees\' work.'],
    ];

    $clientCards = [
        ['title' => 'Accounting Outsourcing for US Businesses', 'img' => $img('us/client-2.jpg'),
         'text' => 'We work with small and mid-sized companies, to fast-growing companies and those with slender finance teams, providing the extra support your business needs. For businesses with seasonal accounting cycles, we ramp up during the accounting high seasons, and ease down as those high seasons wrap up. It is a smart, scalable way to manage a larger in-house team. '],
        ['title' => 'Accounting Outsourcing for US Accounting & CPA Firms', 'img' => $img('us/client-1-182ac9.jpg'),
         'text' => 'We handle bookkeeping, accounting back-office work, tax preparation support, and audit support, along with overflow and seasonal workloads when demand spikes. For firms that prefer it, we also provide white-label accounting and dedicated offshore accounting teams that operate under your brand. A growing number of US accounting firms outsourcing to India do so to grow steadily while keeping quality and client relationships firmly in their own hands.'],
    ];

    $standards = [
        ['title' => 'US GAAP Accounting Support',
         'text' => 'Accurate accounts depend on applying US GAAP correctly and consistently. We handle your accounting to US GAAP, so your financial statements are correctly formatted and hold up under reporting, review, or audit. As guidance and standards are updated, our team stays updated. The result is dependable, standards-based accounting you can build decisions on.'],
        ['title' => 'Financial Reporting',
         'text' => 'Numbers only help when they are presented clearly enough. We produce financial reports that turn your raw data into a clear view of performance, cash position, and trends. Reports are accurate, consistent, and delivered on a schedule that suits your business. This gives owners, leadership, and stakeholders the insight they need, exactly when they need it.'],
        ['title' => 'General Ledger & Reconciliation',
         'text' => 'A reliable general ledger is what keeps your financial picture accurate. We maintain your ledger and reconcile your accounts on a regular basis by identifying and rectifying discrepancies early. Bank, credit card, and account reconciliations are handled thoroughly, so nothing goes unnoticed. The outcome is an accurate ledger which forms the basis for every subsequent report.'],
        ['title' => 'Month-End & Year-End Closing',
         'text' => 'Closing the books can take days your team would much rather spend in other places. We handle your monthly and year-end close, reconcile your accounts, post adjustments, and prepare your books for review. You start each new period with a clean slate and fresh numbers. '],
        ['title' => 'Audit Preparation & Documentation',
         'text' => 'Most of the hassle of an audit has to do with the preparation involved. We compile the documentation, schedules, and reconciliations auditors will be looking for in an organized fashion before the audit even starts. This lessens the back-and-forth, shortens the process, and gives your business a good impression.'],
        ['title' => 'Accounting Process & Internal Controls',
         'text' => 'Strong processes and controls protect the accuracy of everything your finance function produces. We follow clear, documented procedures and build sensible checks into the work, reducing the risk of error and oversight. Consistent processes also make your accounting easier to review and to scale as you grow. '],
    ];

    $ind = fn ($name) => $img("common/industries/$name.svg");
    $industries = [
        [[$ind('accounting'), 'Accounting & CPA Firms'], [$ind('real-estate'), 'Real Estate'], [$ind('construction'), 'Construction'], [$ind('manufacturing'), 'Manufacturing'], [$ind('healthcare'), 'Healthcare']],
        [[$ind('legal'), 'Law Firms'], [$ind('professional-services'), 'Professional Services'], [$ind('ecommerce'), 'E-commerce & Retail'], [$ind('strata'), 'Technology'], [$ind('accounting'), 'Financial Services']],
    ];

    $processSteps = [
        ['title' => 'Discovery',
         'text' => 'We start by learning about your business, what you are doing now, and which tasks you want to delegate to us. We use this initial consultation to demonstrate how we can provide value and the best way to complement your current workflow. We then customise the support based on your business needs.'],
        ['title' => 'Tailored Team',
         'text' => 'Next, we put together a team with the skills to carry out the work you require. The same team members stay involved with your account, so they understand your business, your financial and administrative systems, and your expectations - resulting in a reduced learning curve and consistent results. '],
        ['title' => 'Workflow Integration',
         'text' => 'We then set up to work the way you already do. Our team uses your accounting software, your file-sharing, and your reporting formats, so there is nothing new for your staff to learn. We establish protected access and settle on the channels we will use to talk and share files. The switch is handled carefully, and we quickly become part of your day-to-day tasks.'],
         ['title' => 'Support',
         'text' => 'Once you are good to go, the work begins. We maintain your bookkeeping, payroll, tax, and financial reports in line and on track, providing you with progress updates and future plans along the way. You retain complete awareness and control over every piece of work, while we take care of the work as you handle the business.'],
         ['title' => 'Review & Scale',
         'text' => 'Support is flexible as your business evolves. We carry out quality reviews periodically and, as your requirements fluctuate, you can increase capacity when the demand is high and reduce it when it falls off. That is what makes us so flexible and, therefore, so valuable to you.'],
    ];

    $certs = [
        [$img('figma-footer-badges/iso-9001.png'), 'ISO 9001'],
        [$img('figma-footer-badges/iso-27001.png'), 'ISO 27001'],
        [$img('figma-footer-badges/gdpr.png'), 'GDPR'],
    ];

    $securityCards = [
        ['title' => 'Secure Data Handling', 'img' => $img('us/security-1.jpg'),
         'text' => 'Your financial data is protected at every stage of the work. We keep it in secure systems and limit access to specialists assigned to your account. Clear procedures govern how information is stored, used, and removed throughout the engagement.'],
        ['title' => 'Confidentiality & Privacy', 'img' => $img('us/security-2.jpg'),
         'text' => 'Everything we handle for you stays confidential. Every engagement is covered by signed non-disclosure agreements (NDA) and strict confidentiality rules. Your records and those of your clients remain protected, while your reputation and client relationships stay entirely confidential.'],
        ['title' => 'Quality & Process Controls', 'img' => $img('us/security-3.jpg'),
         'text' => 'QA forms the backbone of our processes, helping us prevent errors rather than relying on luck. Every job passes through a stringent QA review before it comes back to you. This established quality standard remains consistent even when volumes rise. Our quality process is ISO 9001 certified.'],
        ['title' => 'Certified Security Standards', 'img' => $img('us/security-1.jpg'),
         'text' => 'Our security standards are ISO 27001 certified, with firm rules for how data must be protected and managed. This provides third-party evidence that your data receives professional-grade handling. We understand our US clients\' expectations and requirements for data security and adhere to them.'],
        ['title' => 'Secure Technology & Communication', 'img' => $img('us/security-2.jpg'),
         'text' => 'We protect data exchanged through everyday tools such as email using secure, monitored systems and encryption. Confidential details are never sent through unsafe channels, and access to our tools remains tightly controlled. From quick questions to complete financial records, every exchange stays protected.'],
        ['title' => 'Business Continuity & Data Protection', 'img' => $img('us/security-3.jpg'),
         'text' => 'We maintain data protection measures and business continuity plans so your work continues without interruption. Backups, redundancy, and defined recovery procedures help keep your information safe and services running. You can depend on consistent delivery, whatever the circumstances.'],
    ];

    // core team (Malay, Prithvi, Umesh) config/home.php se aati hai; yahan sirf US ka member
    $team = [
        ['name' => 'Parth Parekh', 'role' => 'Advisor Partner US', 'image' => $img('common/team/parth-parekh.png')],
    ];

    $faqs = [
        ['q' => 'What accounting services can US businesses outsource?',
         'a' => 'Most finance functions, including bookkeeping, payroll, tax preparation support, financial reporting, general ledger and reconciliation, and audit support. You might hand over just one task, or your whole accounting function, whichever fits.'],
        ['q' => 'Why should a US business outsource accounting?',
         'a' => 'Maximize your return on investment as you reduce costs, tap into professional expertise, and buy back internal time without hiring. Outsourcing provides you with additional capacity and expert resources on-demand.'],
        ['q' => 'Can PCS Global provide a dedicated accounting team?',
         'a' => 'Yes. You get a dedicated team assigned to your account, so the same professionals learn your business and deliver consistent work over time.'],
        ['q' => 'Does PCS Global support US GAAP accounting?',
         'a' => 'Yes. We will set up your accounting on US GAAP standards so that your statements are compliant and formatted for reporting, review, and auditing.'],
        ['q' => 'What accounting software does PCS Global support?',
         'a' => 'We work with major platforms, including QuickBooks, Xero, Sage, and NetSuite, so we integrate with the tools your business already uses.'],
        ['q' => 'How does PCS Global protect financial data?',
         'a' => 'Through secure systems, restricted access, signed non-disclosure agreements, and recognized security standards, so your information stays private and protected throughout.'],
        ['q' => 'How does the accounting outsourcing process work?',
         'a' => 'In five steps: we learn your requirements, assemble a dedicated team, connect with your systems, take on the daily work, and scale the support as you grow.'],
        ['q' => 'How can I get started with PCS Global?',
         'a' => 'Book a free consultation. We will talk through your requirements and show you how outsourcing could work for your business.'],
    ];

    return [
        ['type' => 'hero-dark', 'props' => [
            'title' => 'Accounting Outsourcing Company for',
            'mark' => 'US Businesses & CPA Firms',
            'text' => 'US businesses and CPA firms trust PCS Global for dedicated, scalable teams across accounting, bookkeeping, tax, payroll, and audit support. We work as a seamless extension of your team, not a distant vendor. Our accounting outsourcing services help US firms reduce costs, improve efficiency, and drive sustainable growth.',
            'features' => ['US Accounting Expertise', 'Dedicated Accounting Teams', 'Scalable Outsourcing Solutions', 'US GAAP Support'],
            'primaryText' => 'Book a Free Consultation',
            'secondaryText' => 'Talk to Our Expert',
            'secondaryUrl' => 'tel:+13478018715',
            'bg' => $img('common/hero-bg.png'),
            'person' => $img('us/hero-person.png'),
        ]],

        ['type' => 'partner-stats', 'props' => [
            'image' => $img('us/partner.jpg'),
            'alt' => 'Why Partner With PCS Global',
            'title' => 'Why Partner with PCS Global?',
            'paragraphs' => [
                'Choosing an outsourcing provider comes down to trust: you want work done well and a team you do not have to supervise closely. With every US business and CPA firm we serve, our aim is the same: to be a genuine accounting outsourcing partner you can trust to get on with the work, not a vendor you have to keep in check.',
                'Our model depends on talented people and efficient procedures; quality comes before quantity. Most US businesses outsource accounting to India for obvious reasons: skills combined with considerable savings; we help you to make that transition seamless, safe, and well worth it. Putting it into perspective, we offer additional capacity, a reduced cost base, and a big room for your people to focus on growth.',
            ],
            'stats' => [[60, 'Clients'], [800, 'Projects Completed'], [100, 'Combined Years of Team Experience']],
        ]],

        ['type' => 'service-cards', 'props' => [
            'title' => 'Outsourcing Financial Services We Provide in the United States',
            'text' => 'Day-to-day finance work can take hours that your people could use elsewhere-and the right accounting partner puts those hours to better use. From the basics to the sophisticated, PCS Global handles the accounting work your US business or firm counts on, whether you want one service or an end-to-end solution. ',
            'cards' => $serviceCards,
        ]],

        ['type' => 'trust-slider', 'props' => [
            'layout' => 'grid',
            'title' => 'Outsourcing Accounting Solutions for USA Businesses &amp; CPA Firms',
            'text' => 'No two businesses manage their finances the same way, so an off-the-shelf package rarely fits. We tailor the support to suit your situation, whether you\'re a rapidly expanding business or an established accountancy firm.',
            'slides' => $clientCards,
        ]],

        ['type' => 'split-accordion', 'props' => [
            'id' => 'standardsAcc',
            'title' => 'US Accounting Standards &amp; Compliance Expertise',
            'text' => 'US compliance leaves little room for error, and mistakes can quickly become expensive, so accuracy here is essential. Our team & processes are tailored to meet US requirements thoroughly and complete every task to the standards that apply, which removes a major worry for you.',
            'image' => $img('us/standards-6f1a69.jpg'),
            'items' => $standards,
        ]],

        ['type' => 'industry-pills', 'props' => [
            'title' => 'Industries We Support Across the United States',
            'rows' => $industries,
        ]],

        ['type' => 'process-steps', 'props' => [
            'title' => 'How Does PCS Global Work With US Clients?',
            'text' => 'Getting started with PCS Global is simple, and the process is built to keep risk and disruption to a minimum. In these five stages, you go from an opening conversation to a team that functions as part of your own.',
            'steps' => $processSteps,
        ]],

        ['type' => 'cert-tools', 'props' => [
            'certs' => $certs,
        ]],

        ['type' => 'overlay-cards', 'props' => [
            'title' => 'Your Data Security. Our Responsibility.',
            'text' => 'Trusting an outside team with your finances is not a step to take lightly. Security and confidentiality are core to how we operate, not features added afterward. This is why US businesses and firms trust us with sensitive financial information.',
            'icon' => $img('common/security-icon.svg'),
            'cards' => $securityCards,
        ]],

        ['type' => 'region-map', 'props' => [
            'id' => 'usMap',
            'title' => 'PCS Global Serves Clients Across United States',
            'size' => [1241, 726],
            'map' => ['src' => $img('us/map-us.svg'), 'x' => 0, 'y' => 0, 'w' => 1241],
            'logo' => ['src' => $img('common/map-logo.svg'), 'x' => 390, 'y' => 134, 'w' => 248.21],
            'photos' => [
                [$img('us/city-california.png'), 23, 311, 242],
                [$img('us/city-texas-e7cd96.png'), 422, 365, 190],
                [$img('us/city-florida.png'), 860, 461, 272],
                [$img('us/city-greatlakes-7ab03f.png'), 677, 134, 283],
                [$img('us/city-newyork-5be5d2.png'), 917, -19, 211],
            ],
            'pins' => [[130.29, 444.57, 43.17], [562.29, 583.57, 43.17], [906, 611.57, 43.17], [815, 323.57, 43.17], [987, 220.57, 43.17]],
            'labels' => [['California', 134, 384], ['Texas', 583, 523], ['Florida', 921.21, 551], ['Illinois', 830.21, 263], ['New York', 987, 160]],
            'label' => ['font' => 18, 'py' => 15.4, 'px' => 20],
        ]],

        ['type' => 'cta-dark', 'props' => [
            'title' => 'Need More Capacity Without Increasing Headcount?',
            'buttonText' => 'Book a Free Consultation',
            'bg' => $img('common/cta-bg.png'),
            'phone' => '+13478018715',
        ]],

        ['type' => 'team-slider', 'props' => [
            'title' => 'Meet the PCS Global US Team',
            'members' => $team,
            'experts' => $ourexpert,
        ]],

        ['type' => 'clients-slider', 'props' => [
            'images' => $images,
            'title' => 'Trusted by US Businesses &amp; CPA Firms',
        ]],

        ['type' => 'testimonials', 'props' => [
            'title' => 'What Our US-Based Clients Say',
            'items' => config('home.testimonials'),
        ]],

        ['type' => 'blog-cards', 'props' => [
            'title' => 'Insights for US Accounting &amp; Businesses',
            'blogs' => $blogs,
            'newTab' => true,
        ]],

        ['type' => 'faq-list', 'props' => [
            'id' => 'usFaq',
            'title' => 'Frequently Asked Questions',
            'items' => $faqs,
        ]],

        ['type' => 'contact-form', 'props' => [
            'title' => 'Ready to Build a Smarter Outsourcing Team?',
            'text' => 'Whether you need accounting, bookkeeping, tax, payroll or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.',
            'cities' => ['New York', 'California', 'Texas', 'Florida', 'Illinois', 'Other'],
            'services' => array_column($serviceCards, 'title'),
            'country' => 'United States',
            'phoneCountry' => 'us',
        ]],
    ];
};

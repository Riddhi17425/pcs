<?php

// Australia home page ka saara content (text, images, links).
// - Neeche 'return' me sections usi order me hain jaise page par dikhte hain.
// - 'type' = component: resources/views/components/sections/<type>.blade.php
// - 'props' = us section ka data. Text badalna ho to yahin badlo.
// $db: images (Trusted by logos), blogs, ourexpert (team) - admin panel / database se aate hain.

return function (array $db) {
    ['images' => $images, 'blogs' => $blogs, 'ourexpert' => $ourexpert] = $db;

    $img = fn ($file) => asset('public/front/images/' . $file);
    $au = fn ($path) => url('aus/' . $path);

    $serviceCards = [
        ['title' => 'Accounting Outsourcing', 'img' => $img('figma-precision/accounting-outsourcing.png'), 'url' => $au('bookkeeping-accounting-services'),
         'text' => 'Updating accurate accounts requires time and effort, which many teams cannot afford. We take care of reconciliations, ledgers, and month-end closing, ensuring you have the right visibility to your financial standing at a fraction of the cost. '],
        ['title' => 'Bookkeeping Outsourcing', 'img' => $img('figma-precision/bookkeeping-outsourcing-5d38e9.png'), 'url' => $au('bookkeeping-accounting-services'),
         'text' => 'Sound financial decisions require updated and accurate records. We record and reconcile every transaction, working within the software you already use. The result is precise, well-maintained books you can rely on throughout the year. '],
        ['title' => 'Tax Preparation Outsourcing', 'img' => $img('figma-precision/tax-preparation-outsourcing.png'), 'url' => $au('taxation-services'),
         'text' => 'Tax obligations place real demands on any business, particularly as deadlines approach. We prepare and review your returns in line with Australian Tax compliances, verify the details, and lodge them on time, reducing errors and missed deadlines. '],
        ['title' => 'BAS/IAS Return Services', 'img' => $img('figma-precision/bas-ias-return-services.png'), 'url' => $au('taxation-services'),
         'text' => 'Installment activity statements are a recurring obligation that leaves little room for error. We manage your Business and Instalment Activity Statements, calculating GST and PAYG, reconciling records, and lodging accurate statements on time without the recurring pressure. '],
        ['title' => 'Payroll Outsourcing', 'img' => $img('figma-precision/payroll-outsourcing.png'), 'url' => url('aus') . '#consultation',
         'text' => 'Payroll is among the most sensitive functions in any business, and accuracy is not optional. We manage pay runs, PAYG, superannuation, leave and Single Touch Payroll reporting to the ATO, ensuring employees are paid correctly and your business remains compliant.'],
        ['title' => 'Strata Management Services', 'img' => $img('figma-precision/strata-management-services-ae35ad.png'), 'url' => $au('strata-management'),
         'text' => 'Strata finances are detailed and heavily governed by deadlines. Our specialists manage the financial side of your schemes and portfolios, from budgets and levies through to invoicing and owner reporting, keeping records accurate and reporting clear. '],
    ];

    $clientSlides = [
        ['title' => 'Accounting & Finance Firms', 'img' => $img('figma-trust-slider/accounting-finance-firms.png'),
         'text' => 'We provide qualified accounting support under your own brand, helping you take on more clients and manage peak periods without immediate recruitment. Work is completed to your standards and returned ready for review, while your clients continue to see only your firm. '],
        ['title' => 'Small & Medium-Sized Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'We manage everyday accounting work, from bookkeeping and payroll to BAS and reporting, without the cost of a full-time in-house team. This gives your business the financial capability of a larger organisation while keeping overheads under control. '],
         ['title' => 'Growing Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'Rapid growth can quickly place pressure on your finance function as sales, staff and transaction volumes increase. We scale alongside your business, providing additional support when required so your finances never become a constraint on continued growth. '],
         ['title' => 'Professional Services Firms', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'We manage billing, payroll and compliance in the background, allowing your consultants and advisers to focus on client work. Your back office continues to operate accurately and reliably without taking valuable time away from the services that generate fees. '],
         ['title' => 'Strata & Property Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'Our specialists manage levy collection, scheme budgets and owner reporting with the accuracy required by strata and property businesses. You gain reliable strata accounting and clear financial records without diverting your team from managing properties. '],
         ['title' => 'Other Australian Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'Whatever your industry, we adapt to your existing processes, so there are no new systems to learn and no disruption to your operations. You may outsource a single function or your entire finance operation, according to your needs. It is flexible, scalable accounting support for Australian businesses of every size.'],
    ];

    $standards = [
        ['title' => 'Australian Accounting Standards',
         'text' => 'Financial statements must adhere to the correct standards to be both accurate and accepted. We prepare your accounts in accordance with AASB requirements, ensuring they are properly structured and ready for review, lodgement or audit. As the standards evolve, our team remains current, so your reporting never falls behind. '],
        ['title' => 'BAS & GST Support',
         'text' => 'Errors in GST and activity statements are easily made and can prove costly. We manage the process in full, calculating your GST on sales and purchases, reconciling it against your records, and lodging on time. Every statement is reviewed before it reaches the ATO. This removes a demanding recurring task and protects you from avoidable errors and penalties.'],
        ['title' => 'PAYG & Payroll Requirements',
         'text' => 'Australian payroll obligations are strict and allow little margin for error. We ensure every requirement is met, including PAYG withholding, superannuation, leave entitlements and Single Touch Payroll reporting to the ATO. Each pay cycle is processed accurately and on time. Your employees are paid correctly, and your business remains fully compliant.'],
        ['title' => 'ASIC Compliance Support',
         'text' => 'Meeting your ASIC obligations is essential to keeping your business in good standing, yet the deadlines are easily overlooked. We help you remain on top of them, from maintaining accurate records to lodging reports on time. Nothing is left to the last minute, and nothing is missed. It is consistent, year-round support that keeps your company compliant while you focus on running it.'],
        ['title' => 'Australian Tax Requirements',
         'text' => 'Accurate tax management protects your business on two fronts: it maintains compliance and ensures you pay no more than necessary. Our tax specialists prepare your returns in line with current Australian rules, apply the deductions to which you are entitled, and lodge on time. You remain fully compliant with the ATO while retaining more of what is yours. '],
        ['title' => 'Strata Accounting Requirements',
         'text' => 'Strata schemes are governed by their own financial rules, and discrepancies are quickly noticed by owners. We prepare strata accounts accurately, manage levy and fund records correctly, and produce reporting that satisfies every requirement. Owners, committees and managers receive a clear and reliable view of the finances. It is specialist support that keeps strata properties compliant and their records in order.'],
    ];

    $ind = fn ($name) => $img("common/industries/$name.svg");
    $industries = [
        [[$ind('accounting'), 'Accounting & Auditing'], [$ind('construction'), 'Construction'], [$ind('real-estate'), 'Real Estate & Property'], [$ind('strata'), 'Strata Management'], [$ind('manufacturing'), 'Manufacturing']],
        [[$ind('professional-services'), 'Professional Services'], [$ind('legal'), 'Legal Services'], [$ind('healthcare'), 'Healthcare'], [$ind('ecommerce'), 'E-commerce & Retail'], [$ind('professional-services'), 'Other relevant industries']],
    ];

    $processSteps = [
        ['title' => 'Discovery',
         'text' => 'We start by understanding your business, challenges, workload and the tasks you want us to handle. Based on your requirements, we identify where we can help and recommend the best way to work together.'],
        ['title' => 'Tailored Team',
         'text' => 'We assemble a qualified team with the skills required for your business and your specific needs. Your dedicated team gets to know your company, preferences and expectations, ensuring continuity, smoother delivery and less repeated instruction.'],
        ['title' => 'Workflow Integration',
         'text' => 'We fit into your existing ways of working, using the same software, file-sharing and reporting formats. Secure access, communication processes and work delivery are agreed upfront, making the transition smooth and straightforward.'],
        ['title' => 'Support',
         'text' => 'Once setup is complete, your team manages bookkeeping, payroll, tax and reporting accurately and on schedule. You retain full control while we handle the day-to-day workload and keep you informed of progress and upcoming requirements.'],
        ['title' => 'Review & Scale',
         'text' => 'As your requirements change, our support adapts with you. We regularly review the work to maintain quality and can scale support up during busy periods or reduce it when demand eases, keeping the partnership flexible as you grow.'],
    ];

    $certs = [
        [$img('figma-footer-badges/iso-9001.png'), 'ISO 9001'],
        [$img('figma-footer-badges/sca-vic-member.png'), 'Strata Community Association VIC'],
        [$img('figma-footer-badges/iso-27001.png'), 'ISO 27001'],
        [$img('figma-footer-badges/sca-wa-member.png'), 'Strata Community Association WA'],
        [$img('figma-footer-badges/gdpr.png'), 'GDPR'],
    ];

    $securityCards = [
        ['title' => 'Secure Data Handling', 'img' => $img('australia/security-1.jpg'),
         'text' => 'We protect your financial information at every stage using secure systems and controlled access. Only professionals assigned to your account can access your data. Clear procedures govern how information is handled, stored and disposed of, keeping it protected from beginning to end. '],
        ['title' => 'Confidentiality & Privacy', 'img' => $img('australia/security-2.jpg'),
         'text' => 'Discretion is central to how we work. Every engagement follows strict confidentiality practices and signed non-disclosure agreements to protect your information and that of your clients. Our involvement stays behind the scenes, safeguarding your reputation and client relationships. '],
        ['title' => 'Quality & Process Controls', 'img' => $img('australia/security-3.jpg'),
         'text' => 'Accuracy is built into every process. Tasks follow defined procedures and are reviewed before reaching you, allowing errors to be identified and corrected early. This maintains consistent quality even during high-volume periods, so you can use our work with confidence. '],
        ['title' => 'Certified Security Standards', 'img' => $img('australia/security-1.jpg'),
         'text' => 'We follow recognised security standards and certifications to ensure your data is protected, accessed and managed responsibly. This gives you confidence that your information is handled securely and professionally by a trusted outsourcing partner.'],
        ['title' => 'Secure Technology & Communication', 'img' => $img('australia/security-2.jpg'),
         'text' => 'We use secure, monitored systems and encrypted channels for files and communications. Sensitive information is never transmitted through unprotected means, while access to our systems is tightly controlled. This helps minimise everyday data risks and keeps your information secure.'],
    ];

    // core team (Malay, Prithvi, Umesh) config/home.php se aati hai; yahan sirf Australia ka member
    $team = [
        ['name' => 'Pratik Devmurari', 'role' => 'Operations - Australia', 'image' => $img('common/team/pratik-devmurari.png')],
    ];

    $testimonials = config('home.testimonials');

    $faqs = [
        ['q' => 'What services does PCS Global provide in Australia?',
         'a' => 'We provide accounting, bookkeeping, tax preparation, BAS and IAS returns, payroll and strata management, all delivered by a dedicated team that works as an extension of yours.'],
        ['q' => 'Does PCS Global provide accounting outsourcing in Australia?',
         'a' => 'Yes. We support Australian businesses and accounting firms with scalable outsourced accounting, tailored to your workload and prepared to Australian standards.'],
        ['q' => 'Does PCS Global work with Australian accounting firms?',
         'a' => 'Yes. Many of our clients are accounting and finance firms that rely on us to add capacity, manage busy periods, and take on more clients under their own brand.'],
        ['q' => 'Can PCS Global provide dedicated accounting professionals?',
         'a' => 'Yes. The same team will work on your business, developing an understanding and knowledge that grows as they get to know you.'],
        ['q' => 'Can I outsource only specific accounting processes?',
         'a' => 'Yes. You may outsource a single task, such as bookkeeping or payroll, or hand over your entire finance function, depending on your requirements.'],
        ['q' => 'Can outsourcing support scale as my business grows?',
         'a' => 'Yes. Our support adapts to your fluctuating workload, so you can increase your capacity when needed and scale down to meet quieter periods, all without trouble or delay.'],
         ['q' => 'How does PCS Global work with Australian businesses?',
         'a' => 'Our step-by-step process is: we get to know your needs, assemble a dedicated team, liaise with your systems, provide support, and adapt to your size.'],
         ['q' => 'How do I get started with PCS Global?',
         'a' => 'Simply book a free consultation. We will discuss your requirements and show you how the right outsourcing solution could work for your business.'],
    ];

    return [
        ['type' => 'hero-dark', 'props' => [
            'title' => 'Accounting Outsourcing Company for',
            'mark' => 'Australian Businesses & Firms',
            'text' => 'PCS Global is an established services company supporting Australian businesses and accounting firms with reliable accounting, bookkeeping, tax, payroll, and financial support. Our dedicated team works as an extension of your team, helping you reduce costs, maintain compliance, and scale with confidence.',
            'features' => ['Australian Accounting Expertise', 'Dedicated Professional Teams', 'Scalable Outsourcing Solutions', 'Secure & Confidential Delivery'],
            'primaryText' => 'Book a Free Consultation',
            'secondaryText' => 'Talk to Our Expert',
            'secondaryUrl' => 'tel:+61399980494',
            'bg' => $img('common/hero-bg.png'),
            'person' => $img('australia/hero-person.png'),
        ]],

        ['type' => 'partner-stats', 'props' => [
            'image' => $img('australia/partner.jpg'),
            'alt' => 'Why Partner With PCS Global',
            'title' => 'Why Partner with PCS Global?',
            'paragraphs' => [
                'The right partner does more than just take care of your accounting. We work as an extension of your team, a partner you can count on without having to follow up consistently. We define our workflow to mirror yours which ensures consistency in project delivery. We provide seamless service delivery and strive to be a trusted accounting outsourcing partner.',
                'As an accounting and finance outsourcing company in Australia built on skilled professionals and disciplined processes, we deliver work you can rely on. For many Australian firms, accounting outsourcing to India has become an effective way to access talent pool and reduce overheads at once, and we make that transition skilled seamless and secured. The outcome is greater capacity, lower costs, and more time for your team to focus on growth.',
            ],
            'stats' => [[60, 'Clients'], [800, 'Projects Completed'], [100, 'Combined Years of Team Experience']],
        ]],

        ['type' => 'service-cards', 'props' => [
            'title' => 'Outsourcing Financial Services We Provide in Australia',
            'text' => 'When everyday accounting work takes up too much of your employees\' time, support is what you need. PCS Global offers accounting services Australian businesses and practices depend on, from everyday accounting, bookkeeping to specialist compliance, available as individual services or a complete package. ',
            'cards' => $serviceCards,
        ]],

        ['type' => 'trust-slider', 'props' => [
            'title' => 'Outsourcing Accounting Solutions for Australian Businesses & Firms',
            'text' => 'No two organisations operate the same way, so we tailor our accounting support to your structure, workload and objectives. We support australian businesses and firms with flexible, reliable accounting outsourcing solutions designed around their specific needs.',
            'slides' => $clientSlides,
        ]],

        ['type' => 'split-accordion', 'props' => [
            'id' => 'standardsAcc',
            'title' => 'Australian Accounting Standards &amp; Compliance Expertise',
            'text' => 'We understand Australian accounting is governed by strict regulations, and the consequences of non-compliance can be significant. Our teams are trained in Australian accounting rules and standards, ensuring your work is always prepared correctly. ',
            'image' => $img('australia/standards.jpg'),
            'items' => $standards,
        ]],

        ['type' => 'industry-pills', 'props' => [
            'title' => 'Industries We Support Across Australia',
            'rows' => $industries,
        ]],

        ['type' => 'process-steps', 'props' => [
            'title' => 'How Does PCS Global Work With Australian Clients? ',
            'text' => 'Working with PCS Global follows a clear, structured process designed to make accounting outsourcing simple and secure. These five steps take you from the initial discussion to a dedicated team working as an extension of your own. ',
            'steps' => $processSteps,
        ]],

        ['type' => 'cert-tools', 'props' => [
            'certs' => $certs,
        ]],

        ['type' => 'overlay-cards', 'props' => [
            'title' => 'Your Data Security. Our Responsibility.',
            'text' => 'Entrusting your financial information to an external team is a significant decision. As an offshore accounting company trusted by Australian firms, we treat security and confidentiality as fundamental to how we operate. ',
            'icon' => $img('common/security-icon.svg'),
            'cards' => $securityCards,
        ]],

        ['type' => 'region-map', 'props' => [
            'id' => 'ausMap',
            'title' => 'PCS Global Serves Clients Across Australia',
            'size' => [865.8, 661.17],
            'map' => ['src' => $img('australia/map-australia.svg'), 'x' => 0, 'y' => 0, 'w' => 786.63, 'opacity' => 0.7],
            'logo' => ['src' => $img('common/map-logo.svg'), 'x' => 282.84, 'y' => 159.78, 'w' => 248.21],
            'photos' => [
                [$img('australia/city-5.png'), 601.96, 176.1, 216.13],
                [$img('australia/city-2.png'), -20.98, 247.8, 195.39],
                [$img('australia/city-3.png'), 359.57, 327.77, 178.31],
                [$img('australia/city-4.png'), 623.62, 342.36, 166],
                [$img('australia/city-1.png'), 479, 442.95, 151.54],
            ],
            'pins' => [[475.76, 454.68, 25.96], [73.23, 397.8, 25.96], [730.24, 432.28, 25.96], [773.19, 312.05, 25.96], [541.45, 527.42, 25.96]],
            'labels' => [['Adelaide', 295.46, 434.04], ['Perth', 52.42, 427.39], ['Melbourne', 485.26, 560], ['Sydney', 710.02, 461.54], ['Brisbane', 756.2, 275.63]],
        ]],

        ['type' => 'cta-dark', 'props' => [
            'title' => 'Ready to Streamline Your Accounting work with PCS Global?',
            'buttonText' => 'Book a Free Consultation',
            'bg' => $img('common/cta-bg.png'),
            'phone' => '+61399980494',
        ]],

        ['type' => 'team-slider', 'props' => [
            'title' => 'Meet the PCS Global Australia Team',
            'members' => $team,
            'experts' => $ourexpert,
        ]],

        ['type' => 'clients-slider', 'props' => [
            'images' => $images,
            'title' => 'Trusted by Australian Businesses &amp; Professional Firms',
        ]],

        ['type' => 'testimonials', 'props' => [
            'title' => 'What Our Aussie Clients Say',
            'items' => $testimonials,
        ]],

        ['type' => 'blog-cards', 'props' => [
            'title' => 'Insights for Australian Accounting &amp; Business',
            'blogs' => $blogs,
            'newTab' => true,
        ]],

        ['type' => 'faq-list', 'props' => [
            'id' => 'ausFaq',
            'items' => $faqs,
        ]],

        ['type' => 'contact-form', 'props' => [
            'title' => 'Ready to Scale With the Right Outsourcing Support?',
            'text' => 'Whether you need accounting, bookkeeping, tax, payroll, strata management or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.',
            'cities' => ['Sydney', 'Melbourne', 'Brisbane', 'Perth', 'Adelaide', 'Other'],
            'services' => array_column($serviceCards, 'title'),
        ]],
    ];
};

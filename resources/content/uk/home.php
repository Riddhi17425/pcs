<?php

// UK home page ka saara content (text, images, links).
// - Neeche 'return' me sections usi order me hain jaise page par dikhte hain.
// - 'type' = component: resources/views/components/sections/<type>.blade.php
// - 'props' = us section ka data. Text badalna ho to yahin badlo.
// $db: images (Trusted by logos), blogs, ourexpert (team) - admin panel / database se aate hain.

return function (array $db) {
    ['images' => $images, 'blogs' => $blogs, 'ourexpert' => $ourexpert] = $db;

    $img = fn ($file) => asset('public/front/images/' . $file);
    $uk = fn ($path) => url('uk/' . $path);
    $consult = url('uk') . '#consultation';   // jin services ka page abhi nahi hai, wo form par jaati hain

    $serviceCards = [
        ['title' => 'Accounting Outsourcing', 'img' => $img('figma-precision/accounting-outsourcing.png'), 'url' => $uk('accounting-outsourcing-services'),
         'text' => 'Producing accurate, up-to-date accounts requires ongoing time and attention that in-house teams often cannot spare. We manage the complete cycle for you, including reconciliations, ledgers and both the month-end and year-end close, prepared to UK standards. This gives you a clear and current view of your financial position at any time. Because there is no permanent team on your payroll, this expertise comes at a lower cost.'],
        ['title' => 'Small Business Accounting', 'img' => $img('common/services/bookkeeping-team.jpg'), 'url' => $uk('small-business-accounting-services'),
         'text' => 'Startup UK businesses require a full finance function but rarely can justify a permanent team to run it. PCS Global provides that function on an outsourced basis, managing your day-to-day accounts, reporting and compliance so nothing is overlooked. You receive accurate records, clear figures and consistent support, all aligned with how your business operates.'],
        ['title' => 'Bookkeeping Outsourcing', 'img' => $img('common/services/tax-team.jpg'), 'url' => $uk('accounting-outsourcing-services'),
         'text' => 'Reliable financial information begins with well-maintained bookkeeping, as every report and return depends on it. Our team records and reconciles transactions on an ongoing basis, so your records remain current and your figures reliable. We work within your existing software, leaving your systems unchanged. The outcome is a complete and accurate set of books maintained throughout the year.'],
        ['title' => 'Tax Preparation Outsourcing', 'img' => $img('uk/service-tax.jpg'), 'url' => $uk('outsource-tax-preparation-services'),
         'text' => 'For UK businesses, tax is one of the most demanding areas of compliance, particularly as filing deadlines approach. We prepare and review your returns to HMRC requirements and submit them before the deadline. Our specialists remain updated with the rules that apply to your circumstances, which minimises errors and prevents late submissions.'],
        ['title' => 'Payroll Outsourcing', 'img' => $img('figma-precision/payroll-outsourcing.png'), 'url' => $consult,
         'text' => 'Payroll allows no margin for error, as employees rightly expect to be paid correctly and on time. We manage the entire process, including pay runs, PAYE, Real Time Information submissions to HMRC and workplace pension contributions. Each cycle is verified and completed on schedule. This ensures your staff are paid accurately and on time.'],
        ['title' => 'VAT Outsourcing', 'img' => $img('uk/service-vat-b3d697.jpg'), 'url' => $consult,
         'text' => 'VAT is one of the more error-prone areas of UK tax, and mistakes can prove costly. We manage the process from calculation to submission, determining what is due, reconciling it against your records, and filing under Making Tax Digital ahead of the deadline. Every return is reviewed before it is submitted to HMRC. This removes a demanding recurring task and reduces the risk of penalties.'],
    ];

    // Figma me in cards ka text Australia wala tha (AASB / GST / ATO); UK ke hisab se likha gaya hai
    $clientCards = [
        ['title' => 'Outsourcing for UK Accounting Firms', 'img' => $img('uk/client-1-2a4bc9.jpg'),
         'button' => ['Explore Accounting Outsourcing', $uk('accounting-outsourcing-services')],
         'text' => 'For accounting practices, we operate as a discreet extension of your team, completing client work under your own brand. Our support covers client bookkeeping, accounts preparation, management accounts, tax preparation support, VAT, payroll, audit support and wider back-office accounting. All work is completed to your standards and returned ready for review, so your clients deal only with your firm.'],
        ['title' => 'Outsourcing for UK Businesses & SMEs', 'img' => $img('uk/client-2-372b2d.jpg'),
         'button' => ['Explore Small Business Accounting', $uk('small-business-accounting-services')],
         'text' => 'When finance administration draws your team away from running the business, outsourcing restores that focus. We manage bookkeeping, financial reporting, payroll, VAT, tax preparation, accounts payable and receivable, and management accounting, in whatever combination you require. The work is accurate, compliant and aligned with your operations. As an effective route to accounting outsourcing for UK SMEs, it provides the financial capability of a far larger organisation without the cost of building one in-house.'],
    ];

    $standards = [
        ['title' => 'UK GAAP & IFRS',
         'text' => 'Accurate reporting depends on applying the correct accounting framework. We prepare your accounts under UK GAAP and IFRS where applicable, ensuring each set is properly structured and ready for review, filing or audit. As these standards are updated, our team keeps pace, so your reporting remains up to date. You receive accurate, consistent financial statements that you and your stakeholders can depend on.'],
        ['title' => 'HMRC Requirements',
         'text' => 'Your obligations to HMRC are detailed and subject to frequent change, which makes them easy to fall behind on. We ensure every filing is accurate and submitted on time, across tax, payroll and VAT, so you remain compliant throughout the year. Our experts monitor the requirements relevant to your business, so nothing is missed. This removes a considerable source of risk from your operations.'],
        ['title' => 'VAT Compliance',
         'text' => 'VAT is governed by strict rules, and errors can carry real cost. We calculate your VAT accurately, reconcile it against your records, and ensure each return is prepared and submitted in line with current requirements. Every return is reviewed before it reaches HMRC. This maintains your compliance, reduces the risk of penalties, and removes a demanding recurring task from your team.'],
        ['title' => 'Making Tax Digital',
         'text' => 'Making Tax Digital has changed how UK businesses maintain records and submit returns. We ensure your processes meet MTD requirements, keeping digital records and filing through compatible software. This keeps you compliant with current rules and prepared for future changes. You benefit from a clear, digital-first approach to compliance without managing the detail yourself.'],
        ['title' => 'PAYE & Payroll',
         'text' => 'UK payroll obligations are strict and carry real consequences for errors. We manage PAYE, Real Time Information submissions to HMRC, workplace pensions and the associated reporting, processing each cycle accurately and on time. Your employees are paid correctly, and your business remains fully compliant. Managed properly in the background, payroll ceases to be a source of risk.'],
        ['title' => 'Companies House',
         'text' => 'UK companies hold ongoing obligations to Companies House, and missed deadlines result in penalties. We help you meet them, maintaining accurate records and preparing and filing the required accounts and returns on time. Nothing is left to the last minute, and nothing is overlooked. It is consistent support that keeps your company compliant and in good standing.'],
    ];

    $ind = fn ($name) => $img("common/industries/$name.svg");
    $industries = [
        [[$ind('accounting'), 'Accounting & Auditing Firms'], [$ind('professional-services'), 'Professional Services'], [$ind('construction'), 'Construction'], [$ind('real-estate'), 'Property & Real Estate']],
        [[$ind('ecommerce'), 'E-commerce'], [$ind('manufacturing'), 'Manufacturing'], [$ind('healthcare'), 'Healthcare'], [$ind('strata'), 'Technology']],
    ];

    $certs = [
        [$img('figma-footer-badges/iso-9001.png'), 'ISO 9001'],
        [$img('figma-footer-badges/iso-27001.png'), 'ISO 27001'],
        [$img('figma-footer-badges/gdpr.png'), 'GDPR'],
    ];

    $securityCards = [
        ['title' => 'Secure Data Handling', 'img' => $img('uk/security-1-5e658a.jpg'),
         'text' => 'Your financial information is stored and processed securely, with access limited to specialists working on your account. Strict procedures control how data is managed, retained and removed throughout the engagement. '],
        ['title' => 'Confidentiality & Privacy', 'img' => $img('uk/security-2-188afb.jpg'),
<<<<<<< HEAD
         'text' => 'Confidentiality underpins every engagement. Signed non-disclosure agreements and firm confidentiality practices protect your data and your clients information. Your information is never used beyond the engagement. '],
        ['title' => 'Quality & Process Controls', 'img' => $img('uk/security-3-7ba02f.jpg'),
         'text' => 'Every piece of work follows a defined process and review stage before reaching you. This helps identify and address errors early, maintaining accuracy even during periods of high volume. '],
=======
         'text' => 'Confidentiality underpins everything we do. Firm confidentiality practices and signed non-disclosure agreements cover every engagement, safeguarding both your data and your clients\'. Our role stays wholly private, and your information is never used beyond the engagement itself. That protects your standing and ensures your client relationships remain entirely yours.'],
        ['title' => 'Quality & Process Controls', 'img' => $img('uk/security-3-7ba02f.jpg'),
         'text' => 'Rather than relying on chance, we design accuracy directly into our workflow. Each piece of work moves through a set procedure and a review stage before it reaches you, so any error is caught and addressed early. This standard is maintained even during periods of high volume. You can therefore submit our work or hand it to clients knowing it has already passed a thorough check.'],
        ['title' => 'Certified Security Standards', 'img' => $img('uk/security-1-5e658a.jpg'),
         'text' => 'Genuine security is based on evidence, not simply on reassurances. Our practices align with recognised standards and certifications that establish clear requirements for protecting, accessing and managing data. That gives you independent proof your information is managed to a professional benchmark. It reflects the standard of protection any established business or practice is right to expect from an outsourcing partner.'],
        ['title' => 'Secure Technology & Communication', 'img' => $img('uk/security-2-188afb.jpg'),
         'text' => 'A significant share of data risk originates in routine activities such as unprotected email. As part of our offshore accounting support, we address this using secure, monitored systems and encrypted channels for every file and communication. Confidential material is never sent by unsecured routes, and entry to our systems is tightly restricted. Whether it is a short message or a full set of records, every exchange stays secure.'],
>>>>>>> 143a62160b2bd03ce3a3b1a6a9b2dc626ab0eca0
    ];

    // core team (Malay, Prithvi, Umesh) config/home.php se aati hai; yahan sirf UK ka member
    $team = [
        ['name' => 'Alisha Manchanda', 'role' => 'Operations - UK', 'image' => $img('common/team/alisha-manchanda.png')],
    ];

    // Figma me sirf pehle sawal ka answer tha (wo bhi Australia wala); answers page ke content se likhe gaye hain
    $faqs = [
        ['q' => 'Why do UK accounting firms outsource accounting work?',
         'a' => 'To increase capacity, manage busy periods such as year-end and self-assessment season, and take on additional clients without recruiting. Outsourcing provides skilled support under the firm\'s own brand, at a lower cost than hiring in-house.'],
        ['q' => 'What accounting functions can UK businesses outsource?',
         'a' => 'Most functions, including bookkeeping, payroll, VAT, tax preparation, financial reporting, and accounts payable and receivable. You can hand over one function alone or your whole finance operation.'],
        ['q' => 'Can PCS Global support UK accounting firms?',
         'a' => 'Yes. We act as an extension of your practice, managing client bookkeeping, accounts, tax, VAT, payroll and back-office work under your brand and to your standards.'],
        ['q' => 'Can I outsource bookkeeping for my UK business?',
         'a' => 'Yes. We keep your books accurate and up to date, recording and reconciling every transaction within the software you already use.'],
        ['q' => 'Can PCS Global work with our existing accounting software?',
         'a' => 'Yes. We operate from within the platforms you already use, such as Xero, QuickBooks and Sage, meaning there is no need to change your current systems.'],
        ['q' => 'How does PCS Global protect financial data?',
         'a' => 'We get to work on your data in our secure environment, with access levels controlled, confidentiality agreements in place and complying with recognised security standards.'],
        ['q' => 'Can I scale my outsourced accounting team?',
         'a' => 'Yes. Your team can expand as workloads increase and reduce as they ease, so your support consistently matches your requirements.'],
        ['q' => 'How does PCS Global work with UK clients?',
         'a' => 'The process is straightforward: we assess what you need, assign a dedicated team, work within your existing systems, manage the day-to-day, and adjust the level of support as your requirements change.'],
    ];

    return [
        ['type' => 'hero-dark', 'props' => [
            'title' => 'Accounting Outsourcing Company for',
            'mark' => 'UK Businesses & Accounting Firms',
            'text' => 'PCS Global is a trusted accounting outsourcing company supporting businesses and accounting firms across the UK with accounting, bookkeeping, payroll, tax and VAT services. Our experienced professionals, efficient processes and scalable support help you reduce costs, maintain compliance and grow with confidence.',
            'features' => ['UK-focused accounting support', 'Experienced accounting professionals', 'UK GAAP & IFRS expertise', 'HMRC-compliant processes'],
            'primaryText' => 'Book a Free Consultation',
            'secondaryText' => 'Talk to Our Expert',
            'secondaryUrl' => 'tel:+441134034334',
            'bg' => $img('common/hero-bg.png'),
            'person' => $img('uk/hero-person-5cb7ed.png'),
        ]],

        ['type' => 'partner-stats', 'props' => [
            'image' => $img('uk/partner-5a2efa.jpg'),
            'alt' => 'Why Partner With PCS Global',
            'title' => 'Why Partner with PCS Global?',
            'paragraphs' => [
                'Selecting an outsourcing partner is not an easy decision, and the right choice becomes a team you can trust without close supervision. This is the standard PCS Global works for every UK business and firm it supports, acting as your UK accounting outsourcing partner rather than a supplier that requires managing.',
                'We provide outsourcing for UK accounting firms and prioritise skilled professionals and structured processes over sheer volume. For a growing number of UK firms, the decision to outsource accounting to India brings expert support and lowers overhead costs in a single step, and we make that move both simple and secure.',
                'What sets us apart from many accounting outsourcing firms in the UK is the depth of the working relationship, as we take the time to understand your business rather than simply process it. In practice, that means more capacity, reduced overheads and most importantly you get quality time to concentrate on growing your business.',
            ],
            'stats' => [[60, 'Clients'], [800, 'Projects Completed'], [100, 'Combined Years of Team Experience']],
        ]],

        ['type' => 'service-cards', 'props' => [
            'title' => 'Outsourcing Financial Services We Provide in the United Kingdom',
            'text' => 'When routine finance tasks take up more of your team\'s time than they should, outsourcing returns that time to higher-value work. PCS Global manages the full range of outsourced finance and accounting functions UK businesses and firms require, available as a single service or a complete solution.',
            'cards' => $serviceCards,
        ]],

        ['type' => 'trust-slider', 'props' => [
            'layout' => 'grid',
            'title' => 'Outsourcing Accounting Solutions for UK Businesses &amp; Firms',
            'text' => 'No two organisations manage their finances in precisely the same way, so a standardised package rarely suits. PCS Global structures its support around your specific circumstances, whether you operate an accounting practice or a growing business with distinct priorities.',
            'slides' => $clientCards,
        ]],

        ['type' => 'split-accordion', 'props' => [
            'id' => 'standardsAcc',
            'title' => 'UK Accounting Standards &amp; Compliance Expertise',
            'text' => 'UK compliance carries strict requirements, and errors can quickly become costly, so accuracy in this area is essential. Our teams understand UK regulations and prepare all work to the applicable standards, removing a significant concern from your operations.',
            'image' => $img('uk/standards.jpg'),
            'items' => $standards,
        ]],

        ['type' => 'industry-pills', 'props' => [
            'title' => 'Industries We Support Across the United Kingdom',
            'rows' => $industries,
        ]],

        ['type' => 'process-steps', 'props' => [
            'title' => 'How Does PCS Global Work With UK Clients?',
            'text' => 'Beginning a partnership with PCS Global is a clear and structured process, designed to be simple and low-risk for you. Outsourcing accounting work to India is often assumed to be complex, yet our structured onboarding makes it straightforward and secure. In five stages, you move from a first conversation to a fully embedded team working alongside your own.',
            'steps' => config('home.process_steps'),
        ]],

        ['type' => 'cert-tools', 'props' => [
            'certs' => $certs,
        ]],

        ['type' => 'overlay-cards', 'props' => [
            'title' => 'Your Data Security. Our Responsibility.',
            'text' => 'PCS Global treats the security and confidentiality of your financial information as a fundamental part of our UK accounting outsourcing services. Your data is protected through secure systems, controlled access, strict processes and confidential communication. ',
            'icon' => $img('common/security-icon.svg'),
            'cards' => $securityCards,
        ]],

        ['type' => 'region-map', 'props' => [
            'id' => 'ukMap',
            'title' => 'PCS Global Serves Clients Across the United Kingdom',
            'size' => [1189.58, 955.61],
            'map' => ['src' => $img('uk/map-uk.svg'), 'x' => 0, 'y' => 0, 'w' => 1189.58],
            'logo' => ['src' => $img('common/map-logo.svg'), 'x' => 470.79, 'y' => 126, 'w' => 248.21],
            'photos' => [
                [$img('uk/city-leeds-15685b.png'), 563.79, 316, 182],
                [$img('uk/city-manchester-40651d.png'), 805.79, 342, 98],
                [$img('uk/city-liverpool-2001c9.png'), 495.79, 499, 175],
                [$img('uk/city-birmingham-2cb757.png'), 655.79, 640, 203],
                [$img('uk/city-london.png'), 772.79, 747, 248],
            ],
            'pins' => [[720.31, 436.42, 25.96], [759.78, 529.42, 25.96], [644.81, 598.42, 25.96], [846.78, 664.42, 25.96], [882.5, 756.3, 25.96]],
            'labels' => [['Leeds', 713.79, 400], ['Manchester', 742.79, 493], ['Liverpool', 624.79, 562], ['Birmingham', 829.79, 628], ['London', 864.79, 719]],
            'label' => ['font' => 18, 'py' => 7.13, 'px' => 20.2],
        ]],

        ['type' => 'cta-dark', 'props' => [
            'title' => 'Ready to Strengthen Your Accounting Support?',
            'buttonText' => 'Book a Free Consultation',
            'bg' => $img('common/cta-bg.png'),
            'phone' => '+441134034334',
        ]],

        ['type' => 'team-slider', 'props' => [
            'title' => 'Meet the PCS Global UK Team',
            'members' => $team,
            'experts' => $ourexpert,
        ]],

        ['type' => 'clients-slider', 'props' => [
            'images' => $images,
            'title' => 'Trusted by UK Businesses &amp; Accountancy Firms',
        ]],

        ['type' => 'testimonials', 'props' => [
            'title' => 'What Our UK-Based Clients Say',
            'items' => config('home.testimonials'),
        ]],

        ['type' => 'blog-cards', 'props' => [
            'title' => 'Insights for UK Accounting &amp; Businesses',
            'blogs' => $blogs,
            'newTab' => true,
        ]],

        ['type' => 'faq-list', 'props' => [
            'id' => 'ukFaq',
            'items' => $faqs,
        ]],

        ['type' => 'contact-form', 'props' => [
            'title' => 'Ready to Build a Smarter Outsourcing Team?',
            'text' => 'Whether you need accounting, bookkeeping, tax, payroll, VAT or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.',
            'cities' => ['London', 'Birmingham', 'Manchester', 'Leeds', 'Liverpool', 'Other'],
            'services' => array_column($serviceCards, 'title'),
            'country' => 'United Kingdom',
            'phoneCountry' => 'gb',
        ]],
    ];
};

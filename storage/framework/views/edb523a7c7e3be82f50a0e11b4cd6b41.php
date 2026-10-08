<?php echo $__env->make('countries.uk.layouts.frontheader-uk', ['header_overlay' => true], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php
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
        [[$ind('construction'), 'Construction'], [$ind('accounting'), 'Accounting & Auditing Firms'], [$ind('construction'), 'Construction'], [$ind('real-estate'), 'Property & Real Estate'], [$ind('strata'), 'Technology'], [$ind('construction'), 'Accounting & Auditing']],
        [[$ind('construction'), 'Construction'], [$ind('manufacturing'), 'Manufacturing'], [$ind('professional-services'), 'Professional Services'], [$ind('healthcare'), 'Healthcare'], [$ind('ecommerce'), 'E-commerce & Retail']],
    ];

    $certs = [
        [$img('figma-footer-badges/iso-9001.png'), 'ISO 9001'],
        [$img('figma-footer-badges/iso-27001.png'), 'ISO 27001'],
        [$img('figma-footer-badges/gdpr.png'), 'GDPR'],
    ];

    $securityCards = [
        ['title' => 'Secure Data Handling', 'img' => $img('uk/security-1-5e658a.jpg'),
         'text' => 'Your financial information requires rigorous protection at every stage. Your data is held and processed in secure systems, with access limited to the specialists working directly on your account. '],
        ['title' => 'Confidentiality & Privacy', 'img' => $img('uk/security-2-188afb.jpg'),
         'text' => 'Confidentiality underpins everything we do. Firm confidentiality practices and signed non-disclosure agreements cover every engagement, safeguarding both your data and your clients\'. '],
        ['title' => 'Quality & Process Controls', 'img' => $img('uk/security-3-7ba02f.jpg'),
         'text' => 'Rather than relying on chance, we design accuracy directly into our workflow. Each piece of work moves through a set procedure and a review stage before it reaches you, so any error is caught and addressed early. '],
    ];
    foreach (config('home.security_extra') as $i => $card) {
        $securityCards[] = $card + ['img' => $securityCards[$i]['img']];
    }

    // core team (Malay, Prithvi, Umesh) config/home.php se aati hai; yahan sirf UK ka member
    $team = [
        ['name' => 'Alisha Manchanda', 'role' => 'Operations - UK', 'image' => $img('common/team/alisha-manchanda.png')],
    ];

    // Figma me sirf pehle sawal ka answer tha (wo bhi Australia wala); answers page ke content se likhe gaye hain
    $faqs = [
        ['q' => 'Why do UK accounting firms outsource accounting work?',
         'a' => 'Outsourcing gives UK firms qualified accounting support at a lower cost, adds capacity for busy periods, and frees your own team to focus on client relationships and growth.'],
        ['q' => 'What accounting functions can UK businesses outsource?',
         'a' => 'Accounting, bookkeeping, payroll, tax preparation, VAT returns and reporting. You can outsource a single task or your complete accounting function.'],
        ['q' => 'Can PCS Global support UK accounting firms?',
         'a' => 'Yes. We work discreetly under your firm\'s brand, completing work to your standards and returning it ready for review, so you can take on more clients without immediate recruitment.'],
        ['q' => 'Can I outsource bookkeeping for my UK business?',
         'a' => 'Yes. We record and reconcile your transactions on an ongoing basis within your existing software, so your books stay current and accurate throughout the year.'],
        ['q' => 'Can PCS Global work with our existing accounting software?',
         'a' => 'Yes. We work directly in the accounting software, file-sharing tools and reporting formats you already use, so your team adopts nothing new.'],
        ['q' => 'How does PCS Global protect financial data?',
         'a' => 'Your data is held and processed in secure systems, access is limited to the specialists working on your account, and every engagement is covered by confidentiality practices and signed non-disclosure agreements.'],
        ['q' => 'Can I scale my outsourced accounting team?',
         'a' => 'Yes. Our support is scalable, so it can grow with your workload, from busy periods to long-term growth, without the overheads of in-house hiring.'],
        ['q' => 'How does PCS Global work with UK clients?',
         'a' => 'We start by understanding your requirements, build a team around your work, and then integrate with your existing workflow, software and reporting formats, with secure access and agreed ways of communicating.'],
    ];
?>

<?php if (isset($component)) { $__componentOriginala5a5a13e1717720bc44f83285b549fb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5a5a13e1717720bc44f83285b549fb3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero-dark','data' => ['title' => 'Accounting Outsourcing Company for','mark' => 'UK Businesses & Accountancy Firms','text' => 'PCS Global is a trusted accounting outsourcing company that takes on this work for businesses and accounting firms across the UK, spanning accounting, bookkeeping, payroll, tax and VAT. As an established accounting outsourcing company in the UK, we bring together experienced professionals, efficient processes and scalable support suited to your needs. Working as an extension of your team, we help you reduce costs, maintain compliance and grow with confidence.','features' => ['UK-focused accounting support', 'Experienced accounting professionals', 'UK GAAP & IFRS expertise', 'HMRC-compliant processes'],'primaryText' => 'Book a Free Consultation','secondaryText' => 'Talk to Our Expert','secondaryUrl' => $uk('contact-us'),'bg' => $img('common/hero-bg.png'),'person' => $img('uk/hero-person-5cb7ed.png')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero-dark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Accounting Outsourcing Company for','mark' => 'UK Businesses & Accountancy Firms','text' => 'PCS Global is a trusted accounting outsourcing company that takes on this work for businesses and accounting firms across the UK, spanning accounting, bookkeeping, payroll, tax and VAT. As an established accounting outsourcing company in the UK, we bring together experienced professionals, efficient processes and scalable support suited to your needs. Working as an extension of your team, we help you reduce costs, maintain compliance and grow with confidence.','features' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['UK-focused accounting support', 'Experienced accounting professionals', 'UK GAAP & IFRS expertise', 'HMRC-compliant processes']),'primary-text' => 'Book a Free Consultation','secondary-text' => 'Talk to Our Expert','secondary-url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($uk('contact-us')),'bg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/hero-bg.png')),'person' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('uk/hero-person-5cb7ed.png'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5a5a13e1717720bc44f83285b549fb3)): ?>
<?php $attributes = $__attributesOriginala5a5a13e1717720bc44f83285b549fb3; ?>
<?php unset($__attributesOriginala5a5a13e1717720bc44f83285b549fb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5a5a13e1717720bc44f83285b549fb3)): ?>
<?php $component = $__componentOriginala5a5a13e1717720bc44f83285b549fb3; ?>
<?php unset($__componentOriginala5a5a13e1717720bc44f83285b549fb3); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalebbfaaa766e4290e856d58b2e23a8193 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalebbfaaa766e4290e856d58b2e23a8193 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.partner-stats','data' => ['image' => $img('uk/partner-5a2efa.jpg'),'alt' => 'Why Partner With PCS Global','title' => 'Why Partner with PCS Global?','paragraphs' => [
        'Selecting an outsourcing partner is not an easy decision, and the right choice becomes a team you can trust without close supervision. This is the standard PCS Global works for every UK business and firm it supports, acting as your UK accounting outsourcing partner rather than a supplier that requires managing.',
        'We provide outsourcing for UK accounting firms and prioritise skilled professionals and structured processes over sheer volume. For a growing number of UK firms, the decision to outsource accounting to India brings expert support and lowers overhead costs in a single step, and we make that move both simple and secure.',
        'What sets us apart from many accounting outsourcing firms in the UK is the depth of the working relationship, as we take the time to understand your business rather than simply process it. In practice, that means more capacity, reduced overheads and most importantly you get quality time to concentrate on growing your business.',
    ],'stats' => [[60, 'Clients'], [800, 'Projects Completed'], [100, 'Combined Years of Team Experience']]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.partner-stats'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('uk/partner-5a2efa.jpg')),'alt' => 'Why Partner With PCS Global','title' => 'Why Partner with PCS Global?','paragraphs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        'Selecting an outsourcing partner is not an easy decision, and the right choice becomes a team you can trust without close supervision. This is the standard PCS Global works for every UK business and firm it supports, acting as your UK accounting outsourcing partner rather than a supplier that requires managing.',
        'We provide outsourcing for UK accounting firms and prioritise skilled professionals and structured processes over sheer volume. For a growing number of UK firms, the decision to outsource accounting to India brings expert support and lowers overhead costs in a single step, and we make that move both simple and secure.',
        'What sets us apart from many accounting outsourcing firms in the UK is the depth of the working relationship, as we take the time to understand your business rather than simply process it. In practice, that means more capacity, reduced overheads and most importantly you get quality time to concentrate on growing your business.',
    ]),'stats' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([[60, 'Clients'], [800, 'Projects Completed'], [100, 'Combined Years of Team Experience']])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalebbfaaa766e4290e856d58b2e23a8193)): ?>
<?php $attributes = $__attributesOriginalebbfaaa766e4290e856d58b2e23a8193; ?>
<?php unset($__attributesOriginalebbfaaa766e4290e856d58b2e23a8193); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalebbfaaa766e4290e856d58b2e23a8193)): ?>
<?php $component = $__componentOriginalebbfaaa766e4290e856d58b2e23a8193; ?>
<?php unset($__componentOriginalebbfaaa766e4290e856d58b2e23a8193); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginaled90c0794af0fe26a04068da9a958190 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled90c0794af0fe26a04068da9a958190 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.service-cards','data' => ['title' => 'Outsourcing Financial Services We Provide in the United Kingdom','text' => 'When routine finance tasks take up more of your team\'s time than they should, outsourcing returns that time to higher-value work. PCS Global manages the full range of outsourced finance and accounting functions UK businesses and firms require, available as a single service or a complete solution.','cards' => $serviceCards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.service-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Outsourcing Financial Services We Provide in the United Kingdom','text' => 'When routine finance tasks take up more of your team\'s time than they should, outsourcing returns that time to higher-value work. PCS Global manages the full range of outsourced finance and accounting functions UK businesses and firms require, available as a single service or a complete solution.','cards' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($serviceCards)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled90c0794af0fe26a04068da9a958190)): ?>
<?php $attributes = $__attributesOriginaled90c0794af0fe26a04068da9a958190; ?>
<?php unset($__attributesOriginaled90c0794af0fe26a04068da9a958190); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled90c0794af0fe26a04068da9a958190)): ?>
<?php $component = $__componentOriginaled90c0794af0fe26a04068da9a958190; ?>
<?php unset($__componentOriginaled90c0794af0fe26a04068da9a958190); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginald682b08f43eff5f1990161ddba395ef1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald682b08f43eff5f1990161ddba395ef1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.trust-slider','data' => ['layout' => 'grid','title' => 'Outsourcing Accounting Solutions for UK Businesses &amp; Firms','text' => 'No two organisations manage their finances in precisely the same way, so a standardised package rarely suits. PCS Global structures its support around your specific circumstances, whether you operate an accounting practice or a growing business with distinct priorities.','slides' => $clientCards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.trust-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['layout' => 'grid','title' => 'Outsourcing Accounting Solutions for UK Businesses &amp; Firms','text' => 'No two organisations manage their finances in precisely the same way, so a standardised package rarely suits. PCS Global structures its support around your specific circumstances, whether you operate an accounting practice or a growing business with distinct priorities.','slides' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clientCards)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald682b08f43eff5f1990161ddba395ef1)): ?>
<?php $attributes = $__attributesOriginald682b08f43eff5f1990161ddba395ef1; ?>
<?php unset($__attributesOriginald682b08f43eff5f1990161ddba395ef1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald682b08f43eff5f1990161ddba395ef1)): ?>
<?php $component = $__componentOriginald682b08f43eff5f1990161ddba395ef1; ?>
<?php unset($__componentOriginald682b08f43eff5f1990161ddba395ef1); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal203059af38fc2bb29e6304e0ae6e910d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal203059af38fc2bb29e6304e0ae6e910d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.split-accordion','data' => ['id' => 'standardsAcc','title' => 'UK Accounting Standards &amp; Compliance Expertise','text' => 'UK compliance carries strict requirements, and errors can quickly become costly, so accuracy in this area is essential. Our teams understand UK regulations and prepare all work to the applicable standards, removing a significant concern from your operations.','image' => $img('uk/standards.jpg'),'items' => $standards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.split-accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'standardsAcc','title' => 'UK Accounting Standards &amp; Compliance Expertise','text' => 'UK compliance carries strict requirements, and errors can quickly become costly, so accuracy in this area is essential. Our teams understand UK regulations and prepare all work to the applicable standards, removing a significant concern from your operations.','image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('uk/standards.jpg')),'items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($standards)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal203059af38fc2bb29e6304e0ae6e910d)): ?>
<?php $attributes = $__attributesOriginal203059af38fc2bb29e6304e0ae6e910d; ?>
<?php unset($__attributesOriginal203059af38fc2bb29e6304e0ae6e910d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal203059af38fc2bb29e6304e0ae6e910d)): ?>
<?php $component = $__componentOriginal203059af38fc2bb29e6304e0ae6e910d; ?>
<?php unset($__componentOriginal203059af38fc2bb29e6304e0ae6e910d); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal4291b6497587e3258ccb9a75891f4e8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4291b6497587e3258ccb9a75891f4e8b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.industry-pills','data' => ['title' => 'Industries We Support Across the United Kingdom','rows' => $industries]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.industry-pills'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Industries We Support Across the United Kingdom','rows' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($industries)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4291b6497587e3258ccb9a75891f4e8b)): ?>
<?php $attributes = $__attributesOriginal4291b6497587e3258ccb9a75891f4e8b; ?>
<?php unset($__attributesOriginal4291b6497587e3258ccb9a75891f4e8b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4291b6497587e3258ccb9a75891f4e8b)): ?>
<?php $component = $__componentOriginal4291b6497587e3258ccb9a75891f4e8b; ?>
<?php unset($__componentOriginal4291b6497587e3258ccb9a75891f4e8b); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal79815bba11b19ff1e335d1c8b0e33435 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal79815bba11b19ff1e335d1c8b0e33435 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.process-steps','data' => ['title' => 'How Does PCS Global Work With UK Clients?','text' => 'Beginning a partnership with PCS Global is a clear and structured process, designed to be simple and low-risk for you. Outsourcing accounting work to India is often assumed to be complex, yet our structured onboarding makes it straightforward and secure. In five stages, you move from a first conversation to a fully embedded team working alongside your own.','steps' => config('home.process_steps')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.process-steps'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'How Does PCS Global Work With UK Clients?','text' => 'Beginning a partnership with PCS Global is a clear and structured process, designed to be simple and low-risk for you. Outsourcing accounting work to India is often assumed to be complex, yet our structured onboarding makes it straightforward and secure. In five stages, you move from a first conversation to a fully embedded team working alongside your own.','steps' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('home.process_steps'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal79815bba11b19ff1e335d1c8b0e33435)): ?>
<?php $attributes = $__attributesOriginal79815bba11b19ff1e335d1c8b0e33435; ?>
<?php unset($__attributesOriginal79815bba11b19ff1e335d1c8b0e33435); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal79815bba11b19ff1e335d1c8b0e33435)): ?>
<?php $component = $__componentOriginal79815bba11b19ff1e335d1c8b0e33435; ?>
<?php unset($__componentOriginal79815bba11b19ff1e335d1c8b0e33435); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal066ce320e9008bfb01984077e5e46704 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal066ce320e9008bfb01984077e5e46704 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.cert-tools','data' => ['certs' => $certs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.cert-tools'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['certs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($certs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal066ce320e9008bfb01984077e5e46704)): ?>
<?php $attributes = $__attributesOriginal066ce320e9008bfb01984077e5e46704; ?>
<?php unset($__attributesOriginal066ce320e9008bfb01984077e5e46704); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal066ce320e9008bfb01984077e5e46704)): ?>
<?php $component = $__componentOriginal066ce320e9008bfb01984077e5e46704; ?>
<?php unset($__componentOriginal066ce320e9008bfb01984077e5e46704); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal71a2dcc7c594f559375122952ab3c65c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal71a2dcc7c594f559375122952ab3c65c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.overlay-cards','data' => ['title' => 'Your Data Security. Our Responsibility.','text' => 'Placing your financial information in the hands of an external team is an important decision, and one we treat with full seriousness. As a UK accounting outsourcing company trusted by businesses and firms, we regard security and confidentiality as fundamental to our work rather than as an addition to it.','icon' => $img('common/security-icon.svg'),'cards' => $securityCards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.overlay-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Your Data Security. Our Responsibility.','text' => 'Placing your financial information in the hands of an external team is an important decision, and one we treat with full seriousness. As a UK accounting outsourcing company trusted by businesses and firms, we regard security and confidentiality as fundamental to our work rather than as an addition to it.','icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/security-icon.svg')),'cards' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($securityCards)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal71a2dcc7c594f559375122952ab3c65c)): ?>
<?php $attributes = $__attributesOriginal71a2dcc7c594f559375122952ab3c65c; ?>
<?php unset($__attributesOriginal71a2dcc7c594f559375122952ab3c65c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71a2dcc7c594f559375122952ab3c65c)): ?>
<?php $component = $__componentOriginal71a2dcc7c594f559375122952ab3c65c; ?>
<?php unset($__componentOriginal71a2dcc7c594f559375122952ab3c65c); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginaldb92281e4cf1dcbd8f6e408112e328ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldb92281e4cf1dcbd8f6e408112e328ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.region-map','data' => ['id' => 'ukMap','title' => 'PCS Global Serves Clients Across UK','size' => [1189.58, 955.61],'map' => ['src' => $img('uk/map-uk.svg'), 'x' => 0, 'y' => 0, 'w' => 1189.58],'logo' => ['src' => $img('common/map-logo.svg'), 'x' => 470.79, 'y' => 126, 'w' => 248.21],'photos' => [
        [$img('uk/city-leeds-15685b.png'), 563.79, 316, 182],
        [$img('uk/city-manchester-40651d.png'), 805.79, 342, 98],
        [$img('uk/city-liverpool-2001c9.png'), 495.79, 499, 175],
        [$img('uk/city-birmingham-2cb757.png'), 655.79, 640, 203],
        [$img('uk/city-london.png'), 772.79, 747, 248],
    ],'pins' => [[720.31, 436.42, 25.96], [759.78, 529.42, 25.96], [644.81, 598.42, 25.96], [846.78, 664.42, 25.96], [882.5, 756.3, 25.96]],'labels' => [['Leeds', 713.79, 400], ['Manchester', 742.79, 493], ['Liverpool', 624.79, 562], ['Birmingham', 829.79, 628], ['London', 864.79, 719]],'label' => ['font' => 18, 'py' => 7.13, 'px' => 20.2]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.region-map'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'ukMap','title' => 'PCS Global Serves Clients Across UK','size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([1189.58, 955.61]),'map' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['src' => $img('uk/map-uk.svg'), 'x' => 0, 'y' => 0, 'w' => 1189.58]),'logo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['src' => $img('common/map-logo.svg'), 'x' => 470.79, 'y' => 126, 'w' => 248.21]),'photos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        [$img('uk/city-leeds-15685b.png'), 563.79, 316, 182],
        [$img('uk/city-manchester-40651d.png'), 805.79, 342, 98],
        [$img('uk/city-liverpool-2001c9.png'), 495.79, 499, 175],
        [$img('uk/city-birmingham-2cb757.png'), 655.79, 640, 203],
        [$img('uk/city-london.png'), 772.79, 747, 248],
    ]),'pins' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([[720.31, 436.42, 25.96], [759.78, 529.42, 25.96], [644.81, 598.42, 25.96], [846.78, 664.42, 25.96], [882.5, 756.3, 25.96]]),'labels' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['Leeds', 713.79, 400], ['Manchester', 742.79, 493], ['Liverpool', 624.79, 562], ['Birmingham', 829.79, 628], ['London', 864.79, 719]]),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['font' => 18, 'py' => 7.13, 'px' => 20.2])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldb92281e4cf1dcbd8f6e408112e328ca)): ?>
<?php $attributes = $__attributesOriginaldb92281e4cf1dcbd8f6e408112e328ca; ?>
<?php unset($__attributesOriginaldb92281e4cf1dcbd8f6e408112e328ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb92281e4cf1dcbd8f6e408112e328ca)): ?>
<?php $component = $__componentOriginaldb92281e4cf1dcbd8f6e408112e328ca; ?>
<?php unset($__componentOriginaldb92281e4cf1dcbd8f6e408112e328ca); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalff885cf64f389a673435f97fd5103569 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff885cf64f389a673435f97fd5103569 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.cta-dark','data' => ['title' => 'Ready to Strengthen Your Accounting Support?','buttonText' => 'Book a Free Consultation','bg' => $img('common/cta-bg.png'),'icon' => $img('common/icon-phone.svg')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.cta-dark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Ready to Strengthen Your Accounting Support?','button-text' => 'Book a Free Consultation','bg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/cta-bg.png')),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/icon-phone.svg'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff885cf64f389a673435f97fd5103569)): ?>
<?php $attributes = $__attributesOriginalff885cf64f389a673435f97fd5103569; ?>
<?php unset($__attributesOriginalff885cf64f389a673435f97fd5103569); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff885cf64f389a673435f97fd5103569)): ?>
<?php $component = $__componentOriginalff885cf64f389a673435f97fd5103569; ?>
<?php unset($__componentOriginalff885cf64f389a673435f97fd5103569); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalafbf7f87ae4ef94ca7b0bc5d48f8d55f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalafbf7f87ae4ef94ca7b0bc5d48f8d55f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.team-slider','data' => ['title' => 'Meet the PCS Global UK Team','members' => $team,'experts' => $ourexpert]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.team-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Meet the PCS Global UK Team','members' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($team),'experts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ourexpert)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalafbf7f87ae4ef94ca7b0bc5d48f8d55f)): ?>
<?php $attributes = $__attributesOriginalafbf7f87ae4ef94ca7b0bc5d48f8d55f; ?>
<?php unset($__attributesOriginalafbf7f87ae4ef94ca7b0bc5d48f8d55f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalafbf7f87ae4ef94ca7b0bc5d48f8d55f)): ?>
<?php $component = $__componentOriginalafbf7f87ae4ef94ca7b0bc5d48f8d55f; ?>
<?php unset($__componentOriginalafbf7f87ae4ef94ca7b0bc5d48f8d55f); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal48054dc71d2a171ab136376609eecf4d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48054dc71d2a171ab136376609eecf4d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.clients-slider','data' => ['images' => $images,'title' => 'Trusted by UK Businesses &amp; Professional Firms']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.clients-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['images' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($images),'title' => 'Trusted by UK Businesses &amp; Professional Firms']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48054dc71d2a171ab136376609eecf4d)): ?>
<?php $attributes = $__attributesOriginal48054dc71d2a171ab136376609eecf4d; ?>
<?php unset($__attributesOriginal48054dc71d2a171ab136376609eecf4d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48054dc71d2a171ab136376609eecf4d)): ?>
<?php $component = $__componentOriginal48054dc71d2a171ab136376609eecf4d; ?>
<?php unset($__componentOriginal48054dc71d2a171ab136376609eecf4d); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal1cdf8eefbfe7c8f0f09e9766a6770c85 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1cdf8eefbfe7c8f0f09e9766a6770c85 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.testimonials','data' => ['title' => 'What Our UK-Based Clients Say','items' => config('home.testimonials')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.testimonials'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'What Our UK-Based Clients Say','items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('home.testimonials'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1cdf8eefbfe7c8f0f09e9766a6770c85)): ?>
<?php $attributes = $__attributesOriginal1cdf8eefbfe7c8f0f09e9766a6770c85; ?>
<?php unset($__attributesOriginal1cdf8eefbfe7c8f0f09e9766a6770c85); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1cdf8eefbfe7c8f0f09e9766a6770c85)): ?>
<?php $component = $__componentOriginal1cdf8eefbfe7c8f0f09e9766a6770c85; ?>
<?php unset($__componentOriginal1cdf8eefbfe7c8f0f09e9766a6770c85); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal039a8328c6747c740130063377761407 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal039a8328c6747c740130063377761407 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.blog-cards','data' => ['title' => 'Insights for UK Accounting &amp; Businesses','blogs' => $blogs,'newTab' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.blog-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Insights for UK Accounting &amp; Businesses','blogs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blogs),'new-tab' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal039a8328c6747c740130063377761407)): ?>
<?php $attributes = $__attributesOriginal039a8328c6747c740130063377761407; ?>
<?php unset($__attributesOriginal039a8328c6747c740130063377761407); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039a8328c6747c740130063377761407)): ?>
<?php $component = $__componentOriginal039a8328c6747c740130063377761407; ?>
<?php unset($__componentOriginal039a8328c6747c740130063377761407); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginala1e31dd752ebb867ce167e03e103d48c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala1e31dd752ebb867ce167e03e103d48c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.faq-list','data' => ['id' => 'ukFaq','items' => $faqs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.faq-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'ukFaq','items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala1e31dd752ebb867ce167e03e103d48c)): ?>
<?php $attributes = $__attributesOriginala1e31dd752ebb867ce167e03e103d48c; ?>
<?php unset($__attributesOriginala1e31dd752ebb867ce167e03e103d48c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala1e31dd752ebb867ce167e03e103d48c)): ?>
<?php $component = $__componentOriginala1e31dd752ebb867ce167e03e103d48c; ?>
<?php unset($__componentOriginala1e31dd752ebb867ce167e03e103d48c); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginale40460429ab75486fd2a30ec9f73434e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale40460429ab75486fd2a30ec9f73434e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.contact-form','data' => ['title' => 'Ready to Build a Smarter Outsourcing Team?','text' => 'Whether you need accounting, bookkeeping, tax, payroll, VAT or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.','cities' => ['London', 'Birmingham', 'Manchester', 'Leeds', 'Liverpool', 'Other'],'services' => array_column($serviceCards, 'title'),'country' => 'United Kingdom','phoneCountry' => 'gb']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.contact-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Ready to Build a Smarter Outsourcing Team?','text' => 'Whether you need accounting, bookkeeping, tax, payroll, VAT or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.','cities' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['London', 'Birmingham', 'Manchester', 'Leeds', 'Liverpool', 'Other']),'services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(array_column($serviceCards, 'title')),'country' => 'United Kingdom','phone-country' => 'gb']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale40460429ab75486fd2a30ec9f73434e)): ?>
<?php $attributes = $__attributesOriginale40460429ab75486fd2a30ec9f73434e; ?>
<?php unset($__attributesOriginale40460429ab75486fd2a30ec9f73434e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale40460429ab75486fd2a30ec9f73434e)): ?>
<?php $component = $__componentOriginale40460429ab75486fd2a30ec9f73434e; ?>
<?php unset($__componentOriginale40460429ab75486fd2a30ec9f73434e); ?>
<?php endif; ?>
<?php echo $__env->make('countries.uk.layouts.frontfooter-uk', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/countries/uk/pages/home.blade.php ENDPATH**/ ?>
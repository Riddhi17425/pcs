<?php echo $__env->make('countries.australia.layouts.frontheader-au', ['header_overlay' => true], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php
    $img = fn ($file) => asset('public/front/images/' . $file);
    $au = fn ($path) => url('australia/' . $path);

    $serviceCards = [
        ['title' => 'Accounting Outsourcing', 'img' => $img('figma-precision/accounting-outsourcing.png'), 'url' => $au('bookkeeping-accounting-services'),
         'text' => 'Running and maintaining real-time, accurate accounts requires time and effort, which many teams cannot afford. We take care of all of this for you: reconciliations, ledgers, month-end closing, all fast and accurate so you know exactly where you stand at all times, at a fraction of the cost of having your own team do it.'],
        ['title' => 'Bookkeeping Outsourcing', 'img' => $img('figma-precision/bookkeeping-outsourcing-5d38e9.png'), 'url' => $au('bookkeeping-accounting-services'),
         'text' => 'Sound financial decisions require updated and accurate records. We record and reconcile every transaction the moment it occurs - you never get caught out or have doubts about the figures. We work within the software you already use, so your systems remain unchanged. The result is precise, well-maintained books you can rely on throughout the year.'],
        ['title' => 'Tax Preparation Outsourcing', 'img' => $img('figma-precision/tax-preparation-outsourcing.png'), 'url' => $au('taxation-services'),
         'text' => 'Tax obligations place real demands on any business, particularly as deadlines approach. We prepare and review your returns in line with Australian requirements, verify the details, and lodge them on time. Our specialists remain updated with the rules that apply to your business, reducing errors and preventing missed deadlines. You receive accurate, compliant returns without the pressure.'],
        ['title' => 'BAS/IAS Return Services', 'img' => $img('figma-precision/bas-ias-return-services.png'), 'url' => $au('taxation-services'),
         'text' => 'Activity statements are a recurring obligation that leaves little room for error. We manage your Business and Instalment Activity Statements in full, calculating your GST and PAYG, reconciling them against your records, and lodging ahead of the deadline. Every statement is reviewed before submission. The result is accurate statements, lodged on time, without the recurring pressure on your team'],
        ['title' => 'Payroll Outsourcing', 'img' => $img('figma-precision/payroll-outsourcing.png'), 'url' => url('australia') . '#consultation',
         'text' => 'Payroll is among the most sensitive functions in any business, and accuracy is not optional. We manage the entire process, including pay runs, PAYG, superannuation, leave and Single Touch Payroll reporting to the ATO. Each cycle is calculated carefully and processed on schedule. Your employees are paid correctly, and your business remains compliant, without the administrative burden falling on you.'],
        ['title' => 'Strata Management Services', 'img' => $img('figma-precision/strata-management-services-ae35ad.png'), 'url' => $au('strata-management'),
         'text' => 'Strata finances are detailed and heavily governed by deadlines. Our specialists manage the financial side of your schemes and portfolios, from budgets and levies through to invoicing and owner reporting. Records are kept accurate, and reporting remains clear, so owners and committees always have a clear view of the finances. '],
    ];

    $clientSlides = [
        ['title' => 'Accounting & Finance Firms', 'img' => $img('figma-trust-slider/accounting-finance-firms.png'),
         'text' => 'Declining work because your team has reached capacity is a costly constraint. We provide qualified support that operates discreetly under your own brand, enabling you to take on more clients and manage peak periods without immediate recruitment. All work is completed to your standards and returned ready for review. Your clients see only your firm, while you gain the capacity to grow.'],
        ['title' => 'Small & Medium-Sized Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'Many small and medium businesses require a complete finance function but cannot justify the cost of an in-house team. This is precisely where we add value. We manage the full scope of everyday work, from bookkeeping and payroll to BAS and reporting, at a fraction of the cost of employing staff. It provides your business with the financial capability of a far larger organisation, without the overheads.'],
         ['title' => 'Small & Medium-Sized Businesses', 'img' => $img('figma-trust-slider/small-medium-businesses.png'),
         'text' => 'Many small and medium businesses require a complete finance function but cannot justify the cost of an in-house team. This is precisely where we add value. We manage the full scope of everyday work, from bookkeeping and payroll to BAS and reporting, at a fraction of the cost of employing staff. It provides your business with the financial capability of a far larger organisation, without the overheads.'],
    ];

    $standards = [
        ['title' => 'Australian Accounting Standards',
         'text' => 'Financial statements must adhere to the correct standards to be both accurate and accepted. We prepare your accounts in accordance with AASB requirements, ensuring they are properly structured and ready for review, lodgement or audit. As the standards evolve, our team remains current, so your reporting never falls behind. '],
        ['title' => 'BAS & GST Support',
         'text' => 'Activity statements leave little room for error. We calculate your GST and PAYG, reconcile them against your records, and lodge your BAS and IAS ahead of the deadline, with every statement reviewed before submission.'],
        ['title' => 'PAYG & Payroll Requirements',
         'text' => 'We manage pay runs, PAYG withholding, superannuation, leave and Single Touch Payroll reporting to the ATO, so your employees are paid correctly and your business remains compliant.'],
        ['title' => 'ASIC Compliance Support',
         'text' => 'We keep your financial records accurate and properly structured, so your business is ready for ASIC-related reporting, review and lodgement.'],
        ['title' => 'Australian Tax Requirements',
         'text' => 'We prepare and review your returns in line with Australian requirements, verify the details, and lodge them on time, staying current with the rules that apply to your business.'],
        ['title' => 'Strata Accounting Requirements',
         'text' => 'We manage the financial side of strata schemes and portfolios, from budgets and levies to invoicing and owner reporting, so owners and committees always have a clear view of the finances.'],
    ];

    $ind = fn ($name) => $img("common/industries/$name.svg");
    $industries = [
        [[$ind('construction'), 'Construction'], [$ind('accounting'), 'Accounting & Auditing'], [$ind('construction'), 'Construction'], [$ind('real-estate'), 'Real Estate & Property'], [$ind('strata'), 'Strata Management'], [$ind('construction'), 'Accounting & Auditing']],
        [[$ind('construction'), 'Construction'], [$ind('manufacturing'), 'Manufacturing'], [$ind('professional-services'), 'Professional Services'], [$ind('legal'), 'Legal Services'], [$ind('healthcare'), 'Healthcare'], [$ind('ecommerce'), 'E-commerce & Retail']],
    ];

    $processSteps = config('home.process_steps');

    $certs = [
        [$img('figma-footer-badges/iso-9001.png'), 'ISO 9001'],
        [$img('figma-footer-badges/sca-vic-member.png'), 'Strata Community Association VIC'],
        [$img('figma-footer-badges/iso-27001.png'), 'ISO 27001'],
        [$img('figma-footer-badges/sca-wa-member.png'), 'Strata Community Association WA'],
        [$img('figma-footer-badges/gdpr.png'), 'GDPR'],
    ];

    $securityCards = [
        ['title' => 'Secure Data Handling', 'img' => $img('australia/security-1.jpg'),
         'text' => 'Your financial information warrants proper protection at every stage. We store and manage your data within secure systems and restrict access strictly to the professionals assigned to your account. '],
        ['title' => 'Confidentiality & Privacy', 'img' => $img('australia/security-2.jpg'),
         'text' => 'Discretion is central to how we work. Every engagement is governed by strict confidentiality practices and signed non-disclosure agreements that protect both your information and that of your clients. '],
        ['title' => 'Quality & Process Controls', 'img' => $img('australia/security-3.jpg'),
         'text' => 'Accuracy is built into our processes. Every task follows a defined procedure and is reviewed before it reaches you, so errors are identified and corrected early. '],
    ];
    foreach (config('home.security_extra') as $i => $card) {
        $securityCards[] = $card + ['img' => $securityCards[$i]['img']];
    }

    // core team (Malay, Prithvi, Umesh) config/home.php se aati hai; yahan sirf Australia ka member
    $team = [
        ['name' => 'Pratik Devmurari', 'role' => 'Operations - Australia', 'image' => $img('common/team/pratik-devmurari.png')],
    ];

    $testimonials = config('home.testimonials');

    $faqs = [
        ['q' => 'What services does PCS Global provide in Australia?',
         'a' => 'We provide accounting, bookkeeping, tax preparation, BAS and IAS returns, payroll and strata management, all delivered by a dedicated team that works as an extension of yours.'],
        ['q' => 'Does PCS Global provide accounting outsourcing in Australia?',
         'a' => 'Yes. PCS Global is an accounting outsourcing company supporting Australian businesses and accounting firms with reliable accounting, bookkeeping, tax, payroll and financial support.'],
        ['q' => 'Does PCS Global work with Australian accounting firms?',
         'a' => 'Yes. We provide qualified support that operates discreetly under your own brand, so your firm can take on more clients and manage peak periods without immediate recruitment. Your clients see only your firm.'],
        ['q' => 'Can PCS Global provide dedicated accounting professionals?',
         'a' => 'Yes. Our dedicated team works as an extension of yours, and we help you build the right team around your workload and requirements.'],
        ['q' => 'Can I outsource only specific accounting processes?',
         'a' => 'Yes. You can outsource a single function such as bookkeeping, BAS/IAS returns or payroll, or a complete set of accounting services. We work out which work to take on and how best to sit alongside your team.'],
        ['q' => 'Can outsourcing support scale as my business grows?',
         'a' => 'Yes. Our outsourcing solutions are scalable, so support can grow with your workload, from peak periods to long-term growth, without the overheads of in-house hiring.'],
        ['q' => 'How does PCS Global work with Australian businesses?',
         'a' => 'We start by understanding your requirements, build your team, and then integrate with your existing workflow, software and reporting formats, with secure access and agreed ways of communicating.'],
        ['q' => 'How do I get started with PCS Global?',
         'a' => 'Book a free consultation with us. We will learn how your business runs, identify the work to take on, and recommend the best way to work alongside your team.'],
    ];
?>

<?php if (isset($component)) { $__componentOriginala5a5a13e1717720bc44f83285b549fb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5a5a13e1717720bc44f83285b549fb3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero-dark','data' => ['title' => 'Accounting Outsourcing Company for','mark' => 'Australian Businesses & Firms','text' => 'PCS Global is a trusted Australian accounting outsourcing company supporting Australian businesses and accounting firms with reliable accounting, bookkeeping, tax, payroll, and financial support. Our dedicated team works as an extension of yours, helping you reduce costs, maintain compliance, and scale with confidence.','features' => ['Australian Accounting Expertise', 'Dedicated Professional Teams', 'Scalable Outsourcing Solutions', 'Secure & Confidential Delivery'],'primaryText' => 'Book a Free Consultation','secondaryText' => 'Talk to Our Accounting Expert','secondaryUrl' => $au('contact-us'),'bg' => $img('common/hero-bg.png'),'person' => $img('australia/hero-person.png')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero-dark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Accounting Outsourcing Company for','mark' => 'Australian Businesses & Firms','text' => 'PCS Global is a trusted Australian accounting outsourcing company supporting Australian businesses and accounting firms with reliable accounting, bookkeeping, tax, payroll, and financial support. Our dedicated team works as an extension of yours, helping you reduce costs, maintain compliance, and scale with confidence.','features' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['Australian Accounting Expertise', 'Dedicated Professional Teams', 'Scalable Outsourcing Solutions', 'Secure & Confidential Delivery']),'primary-text' => 'Book a Free Consultation','secondary-text' => 'Talk to Our Accounting Expert','secondary-url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($au('contact-us')),'bg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/hero-bg.png')),'person' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('australia/hero-person.png'))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.partner-stats','data' => ['image' => $img('australia/partner.jpg'),'alt' => 'Why Partner With PCS Global','title' => 'Why Partner with PCS Global?','paragraphs' => [
        'The right partner does more than just take care of your accounting. They\'re an extension of your team, someone you can count on without having to follow up consistently. That\'s the quality PCS Global brings to every Australian business and accounting firm we serve - functioning as an authentic accounting outsourcing partner.',
        'As a finance and outsourcing accounting company in Australia built on skilled professionals and disciplined processes, we deliver work you can rely on. For many Australian firms, accounting outsourcing to India has become an effective way to access expertise and reduce overheads at once, and we make that transition straightforward and secure. The outcome is greater capacity, lower costs, and more time for your team to focus on growth.',
    ],'stats' => [[60, 'Happy Clients'], [100, 'Years of Team Experience'], [800, 'Projects Completed']]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.partner-stats'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('australia/partner.jpg')),'alt' => 'Why Partner With PCS Global','title' => 'Why Partner with PCS Global?','paragraphs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        'The right partner does more than just take care of your accounting. They\'re an extension of your team, someone you can count on without having to follow up consistently. That\'s the quality PCS Global brings to every Australian business and accounting firm we serve - functioning as an authentic accounting outsourcing partner.',
        'As a finance and outsourcing accounting company in Australia built on skilled professionals and disciplined processes, we deliver work you can rely on. For many Australian firms, accounting outsourcing to India has become an effective way to access expertise and reduce overheads at once, and we make that transition straightforward and secure. The outcome is greater capacity, lower costs, and more time for your team to focus on growth.',
    ]),'stats' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([[60, 'Happy Clients'], [100, 'Years of Team Experience'], [800, 'Projects Completed']])]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.service-cards','data' => ['title' => 'Outsourcing Financial Services We Provide in Australia','text' => 'When everyday accounting work takes up too much of your employees\' working hours, support is what you need. PCS Global offers a full spectrum of accounting services that Australian businesses and practices depend on, from everyday bookkeeping through to specialist compliance, both as an individual service and as a complete service.','cards' => $serviceCards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.service-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Outsourcing Financial Services We Provide in Australia','text' => 'When everyday accounting work takes up too much of your employees\' working hours, support is what you need. PCS Global offers a full spectrum of accounting services that Australian businesses and practices depend on, from everyday bookkeeping through to specialist compliance, both as an individual service and as a complete service.','cards' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($serviceCards)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.trust-slider','data' => ['title' => 'Outsourcing Accounting Solutions for Australian Businesses & Firms','text' => 'No two organisations operate in exactly the same way, so we do not apply a standard template. As an experienced accounting outsourcing firm, PCS Global tailors its support to your structure, your workload and your objectives. The following are the clients we most commonly support.','slides' => $clientSlides]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.trust-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Outsourcing Accounting Solutions for Australian Businesses & Firms','text' => 'No two organisations operate in exactly the same way, so we do not apply a standard template. As an experienced accounting outsourcing firm, PCS Global tailors its support to your structure, your workload and your objectives. The following are the clients we most commonly support.','slides' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clientSlides)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.split-accordion','data' => ['id' => 'standardsAcc','title' => 'Australian Accounting Standards &amp; Compliance Expertise','text' => 'When everyday accounting work takes up too much of your employees\' working hours, support is what you need. PCS Global offers a full spectrum of accounting services that Australian businesses and practices depend on, from everyday bookkeeping through to specialist compliance, both as an individual service and as a complete service.','image' => $img('australia/standards.jpg'),'items' => $standards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.split-accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'standardsAcc','title' => 'Australian Accounting Standards &amp; Compliance Expertise','text' => 'When everyday accounting work takes up too much of your employees\' working hours, support is what you need. PCS Global offers a full spectrum of accounting services that Australian businesses and practices depend on, from everyday bookkeeping through to specialist compliance, both as an individual service and as a complete service.','image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('australia/standards.jpg')),'items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($standards)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.industry-pills','data' => ['title' => 'Industries We Support Across Australia','rows' => $industries]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.industry-pills'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Industries We Support Across Australia','rows' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($industries)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.process-steps','data' => ['title' => 'How Does PCS Global Work With Australia Clients?','text' => 'Beginning a partnership with PCS Global is a clear and structured process, designed to be simple and low-risk for you. Outsourcing accounting work to India is often assumed to be complex, yet our structured onboarding makes it straightforward and secure. In five stages, you move from a first conversation to a fully embedded team working alongside your own.','steps' => $processSteps]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.process-steps'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'How Does PCS Global Work With Australia Clients?','text' => 'Beginning a partnership with PCS Global is a clear and structured process, designed to be simple and low-risk for you. Outsourcing accounting work to India is often assumed to be complex, yet our structured onboarding makes it straightforward and secure. In five stages, you move from a first conversation to a fully embedded team working alongside your own.','steps' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($processSteps)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.overlay-cards','data' => ['title' => 'Your Data Security. Our Responsibility','text' => 'Entrusting your financial information to an external team is a significant decision, and we treat that responsibility with the seriousness it deserves. As an offshore accounting company trusted by Australian firms, we regard security and confidentiality as fundamental to how we operate','icon' => $img('common/security-icon.svg'),'cards' => $securityCards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.overlay-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Your Data Security. Our Responsibility','text' => 'Entrusting your financial information to an external team is a significant decision, and we treat that responsibility with the seriousness it deserves. As an offshore accounting company trusted by Australian firms, we regard security and confidentiality as fundamental to how we operate','icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/security-icon.svg')),'cards' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($securityCards)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.region-map','data' => ['id' => 'ausMap','title' => 'PCS Global Serves Clients Across Australia','size' => [865.8, 661.17],'map' => ['src' => $img('australia/map-australia.svg'), 'x' => 0, 'y' => 0, 'w' => 786.63, 'opacity' => 0.7],'logo' => ['src' => $img('common/map-logo.svg'), 'x' => 282.84, 'y' => 159.78, 'w' => 248.21],'photos' => [
        [$img('australia/city-5.png'), 601.96, 176.1, 216.13],
        [$img('australia/city-2.png'), -20.98, 247.8, 195.39],
        [$img('australia/city-3.png'), 359.57, 327.77, 178.31],
        [$img('australia/city-4.png'), 623.62, 342.36, 166],
        [$img('australia/city-1.png'), 479, 442.95, 151.54],
    ],'pins' => [[475.76, 454.68, 25.96], [73.23, 397.8, 25.96], [730.24, 432.28, 25.96], [773.19, 312.05, 25.96], [541.45, 527.42, 25.96]],'labels' => [['Adelaide', 295.46, 434.04], ['Perth', 52.42, 427.39], ['Melbourne', 485.26, 560], ['Sydney', 710.02, 461.54], ['Brisbane', 756.2, 275.63]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.region-map'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'ausMap','title' => 'PCS Global Serves Clients Across Australia','size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([865.8, 661.17]),'map' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['src' => $img('australia/map-australia.svg'), 'x' => 0, 'y' => 0, 'w' => 786.63, 'opacity' => 0.7]),'logo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['src' => $img('common/map-logo.svg'), 'x' => 282.84, 'y' => 159.78, 'w' => 248.21]),'photos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        [$img('australia/city-5.png'), 601.96, 176.1, 216.13],
        [$img('australia/city-2.png'), -20.98, 247.8, 195.39],
        [$img('australia/city-3.png'), 359.57, 327.77, 178.31],
        [$img('australia/city-4.png'), 623.62, 342.36, 166],
        [$img('australia/city-1.png'), 479, 442.95, 151.54],
    ]),'pins' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([[475.76, 454.68, 25.96], [73.23, 397.8, 25.96], [730.24, 432.28, 25.96], [773.19, 312.05, 25.96], [541.45, 527.42, 25.96]]),'labels' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['Adelaide', 295.46, 434.04], ['Perth', 52.42, 427.39], ['Melbourne', 485.26, 560], ['Sydney', 710.02, 461.54], ['Brisbane', 756.2, 275.63]])]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.cta-dark','data' => ['title' => 'Ready to Streamline Your Accounting work with PCS Global?','buttonText' => 'Book a Free Consultation','bg' => $img('common/cta-bg.png'),'icon' => $img('common/icon-phone.svg')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.cta-dark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Ready to Streamline Your Accounting work with PCS Global?','button-text' => 'Book a Free Consultation','bg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/cta-bg.png')),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/icon-phone.svg'))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.team-slider','data' => ['title' => 'Meet the PCS Global Australia Team','members' => $team,'experts' => $ourexpert]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.team-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Meet the PCS Global Australia Team','members' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($team),'experts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ourexpert)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.clients-slider','data' => ['images' => $images,'title' => 'Trusted by Australian Businesses &amp; Professional Firms']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.clients-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['images' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($images),'title' => 'Trusted by Australian Businesses &amp; Professional Firms']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.testimonials','data' => ['title' => 'What Our Aussie Clients Say','items' => $testimonials]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.testimonials'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'What Our Aussie Clients Say','items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonials)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.blog-cards','data' => ['title' => 'Insights for Australian Accounting &amp; Business','blogs' => $blogs,'newTab' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.blog-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Insights for Australian Accounting &amp; Business','blogs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blogs),'new-tab' => true]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.faq-list','data' => ['id' => 'ausFaq','items' => $faqs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.faq-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'ausFaq','items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqs)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.contact-form','data' => ['title' => 'Ready to Build a Smarter Outsourcing Team?','text' => 'Whether you need accounting, bookkeeping, tax, payroll, strata management or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.','cities' => ['Sydney', 'Melbourne', 'Brisbane', 'Perth', 'Adelaide', 'Other'],'services' => array_column($serviceCards, 'title')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.contact-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Ready to Build a Smarter Outsourcing Team?','text' => 'Whether you need accounting, bookkeeping, tax, payroll, strata management or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.','cities' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['Sydney', 'Melbourne', 'Brisbane', 'Perth', 'Adelaide', 'Other']),'services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(array_column($serviceCards, 'title'))]); ?>
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
<?php echo $__env->make('countries.australia.layouts.frontfooter-au', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/countries/australia/pages/home.blade.php ENDPATH**/ ?>
<?php echo $__env->make('countries.us.layouts.frontheader-us', ['header_overlay' => true], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php
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
        ['title' => 'Accounting Outsourcing for US Accounting & CPA Firms', 'img' => $img('us/client-1-182ac9.jpg'),
         'text' => 'We handle bookkeeping, accounting back-office work, tax preparation support, and audit support, along with overflow and seasonal workloads when demand spikes. For firms that prefer it, we also provide white-label accounting and dedicated offshore accounting teams that operate under your brand. A growing number of US accounting firms outsourcing to India do so to grow steadily while keeping quality and client relationships firmly in their own hands.'],
        ['title' => 'Accounting Outsourcing for US Businesses', 'img' => $img('us/client-2.jpg'),
         'text' => 'We work with small and mid-sized companies, to fast-growing companies and those with slender finance teams, providing the extra support your business needs. For businesses with seasonal accounting cycles, we ramp up during the accounting high seasons, and ease down as those high seasons wrap up. It is a smart, scalable way to manage a larger in-house team. '],
    ];

    $standards = [
        ['title' => 'US GAAP Accounting Support',
         'text' => 'Accurate accounts depend on applying US GAAP correctly and consistently. We handle your accounting to US GAAP, so your financial statements are correctly formatted and hold up under reporting, review, or audit. As guidance and standards are updated, our team stays updated. The result is dependable, standards-based accounting you can build decisions on.'],
        ['title' => 'Financial Reporting',
         'text' => 'We prepare clear, accurate financial statements and management reports to US GAAP, so you always have a reliable view of your business and a sound basis for decisions.'],
        ['title' => 'General Ledger & Reconciliation',
         'text' => 'We maintain your general ledger and reconcile your accounts every month, keeping your records accurate, current and ready for reporting.'],
        ['title' => 'Month-End & Year-End Closing',
         'text' => 'We close your books on schedule each month and at year-end, with adjustments and reconciliations completed and reviewed.'],
        ['title' => 'Audit Preparation & Documentation',
         'text' => 'We get your schedules, reconciliations and backup documentation ready, so your auditor finds what they need and the audit runs smoothly.'],
        ['title' => 'Accounting Process & Internal Controls',
         'text' => 'Every task follows a defined procedure with a review stage before it reaches you, so errors are caught early and your processes stay consistent.'],
    ];

    $ind = fn ($name) => $img("common/industries/$name.svg");
    $industries = [
        [[$ind('construction'), 'Construction'], [$ind('accounting'), 'Accounting & CPA Firms'], [$ind('construction'), 'Construction'], [$ind('real-estate'), 'Real Estate'], [$ind('strata'), 'Financial Services'], [$ind('construction'), 'Accounting & Auditing']],
        [[$ind('construction'), 'Construction'], [$ind('manufacturing'), 'Manufacturing'], [$ind('professional-services'), 'Professional Services'], [$ind('legal'), 'Law Firms'], [$ind('healthcare'), 'Healthcare'], [$ind('ecommerce'), 'E-commerce & Retail']],
    ];

    $processSteps = [
        ['title' => 'Understand Your Requirements',
         'text' => 'We start by learning about your business, what you are doing now, and which tasks you want to delegate to us. We use this initial consultation to demonstrate how we can provide value and the best way to complement your current workflow. We then customise the support based on your business needs.'],
        ['title' => 'Build Your Team',
         'text' => 'Next, we put together a team with the skills to carry out the work you require. The same team members stay involved with your account, so they understand your business, your financial and administrative systems, and your expectations - resulting in a reduced learning curve and consistent results.'],
        ['title' => 'Integrate With Your Workflow',
         'text' => 'We then set up to work the way you already do. Our team uses your accounting software, your file-sharing, and your reporting formats, so there is nothing new for your staff to learn. We establish protected access and settle on the channels we will use to talk and share files. The switch is handled carefully, and we quickly become part of your day-to-day tasks.'],
    ];

    $certs = [
        [$img('figma-footer-badges/iso-9001.png'), 'ISO 9001'],
        [$img('figma-footer-badges/iso-27001.png'), 'ISO 27001'],
        [$img('figma-footer-badges/gdpr.png'), 'GDPR'],
    ];

    $securityCards = [
        ['title' => 'Secure Data Handling', 'img' => $img('us/security-1.jpg'),
         'text' => 'Your financial information requires rigorous protection at every stage. Your data is held and processed in secure systems, with access limited to the specialists working directly on your account. '],
        ['title' => 'Confidentiality & Privacy', 'img' => $img('us/security-2.jpg'),
         'text' => 'Confidentiality underpins everything we do. Firm confidentiality practices and signed non-disclosure agreements cover every engagement, safeguarding both your data and your clients\'. '],
        ['title' => 'Quality & Process Controls', 'img' => $img('us/security-3.jpg'),
         'text' => 'Rather than relying on chance, we design accuracy directly into our workflow. Each piece of work moves through a set procedure and a review stage before it reaches you, so any error is caught and addressed early. '],
    ];
    foreach (config('home.security_extra') as $i => $card) {
        $securityCards[] = $card + ['img' => $securityCards[$i]['img']];
    }

    // core team (Malay, Prithvi, Umesh) config/home.php se aati hai; yahan sirf US ka member
    $team = [
        ['name' => 'Parth Parekh', 'role' => 'Advisor Partner US', 'image' => $img('common/team/parth-parekh.png')],
    ];

    $faqs = [
        ['q' => 'What accounting services can US businesses outsource?',
         'a' => 'Most finance functions, including bookkeeping, payroll, tax preparation support, financial reporting, general ledger and reconciliation, and audit support. You might hand over just one task, or your whole accounting function, whichever fits.'],
        ['q' => 'Why should a US business outsource accounting?',
         'a' => 'Outsourcing gives you skilled accounting professionals at a considerably lower cost than a full in-house team, adds capacity when you need it, and frees your people to focus on growth.'],
        ['q' => 'Can PCS Global provide a dedicated accounting team?',
         'a' => 'Yes. We put together a team with the skills your work requires, and the same team members stay on your account, so they understand your business, your systems and your expectations.'],
        ['q' => 'Does PCS Global support US GAAP accounting?',
         'a' => 'Yes. We handle your accounting to US GAAP, so your financial statements are correctly formatted and hold up under reporting, review or audit.'],
        ['q' => 'What accounting software does PCS Global support?',
         'a' => 'We work inside the accounting software, file-sharing tools and reporting formats your business already uses, so nothing about your setup has to change.'],
        ['q' => 'How does PCS Global protect financial data?',
         'a' => 'Your data is held and processed in secure systems, access is limited to the specialists working on your account, and every engagement is covered by confidentiality practices and signed non-disclosure agreements.'],
        ['q' => 'How does the accounting outsourcing process work?',
         'a' => 'We start by understanding your requirements, build a team around your work, and then integrate with your existing workflow, software and reporting formats, with secure access and agreed communication channels.'],
        ['q' => 'How can I get started with PCS Global?',
         'a' => 'Book a free consultation. We will learn about your business and the tasks you want to delegate, and show you how we can add value.'],
    ];
?>

<?php if (isset($component)) { $__componentOriginala5a5a13e1717720bc44f83285b549fb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5a5a13e1717720bc44f83285b549fb3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero-dark','data' => ['title' => 'Accounting Outsourcing Company for','mark' => 'US Businesses & CPA Firms','text' => 'US businesses and CPA firms turn to PCS Global, a trusted accounting outsourcing company, for their dedicated and scalable teams in accounting, bookkeeping, tax, payroll, and audit support. Companies choose us for accounting outsourcing for US firms because we function as a seamless extension of your team-not a far-away vendor. With dependable accounting outsourcing in the USA, we lower your costs and drive growth.','features' => ['US Accounting Expertise', 'Scalable Outsourcing Solutions', 'Dedicated Accounting Teams', 'US GAAP Support'],'primaryText' => 'Book a Free Consultation','secondaryText' => 'Talk to Our Accounting Expert','secondaryUrl' => $us('contact-us'),'bg' => $img('common/hero-bg.png'),'person' => $img('us/hero-person.png')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero-dark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Accounting Outsourcing Company for','mark' => 'US Businesses & CPA Firms','text' => 'US businesses and CPA firms turn to PCS Global, a trusted accounting outsourcing company, for their dedicated and scalable teams in accounting, bookkeeping, tax, payroll, and audit support. Companies choose us for accounting outsourcing for US firms because we function as a seamless extension of your team-not a far-away vendor. With dependable accounting outsourcing in the USA, we lower your costs and drive growth.','features' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['US Accounting Expertise', 'Scalable Outsourcing Solutions', 'Dedicated Accounting Teams', 'US GAAP Support']),'primary-text' => 'Book a Free Consultation','secondary-text' => 'Talk to Our Accounting Expert','secondary-url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($us('contact-us')),'bg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/hero-bg.png')),'person' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('us/hero-person.png'))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.partner-stats','data' => ['image' => $img('us/partner.jpg'),'alt' => 'Why Partner With PCS Global','title' => 'Why Partner with PCS Global?','paragraphs' => [
        'Choosing an outsourcing provider comes down to trust: you want work done well and a team you do not have to supervise closely. With every US business and CPA firm we serve, our aim is the same: to be a genuine accounting outsourcing partner you can trust to get on with the work, not a vendor you have to keep in check.',
        'Our model depends on talented people and efficient procedures; quality comes before quantity. Most US businesses outsource accounting to India for obvious reasons: skills combined with considerable savings; we help you to make that transition seamless, safe, and well worth it. Putting it into perspective, we offer additional capacity, a reduced cost base, and a big room for your people to focus on growth.',
    ],'stats' => [[60, 'Clients'], [800, 'Projects Completed'], [100, 'Combined Years of Team Experience']]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.partner-stats'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('us/partner.jpg')),'alt' => 'Why Partner With PCS Global','title' => 'Why Partner with PCS Global?','paragraphs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        'Choosing an outsourcing provider comes down to trust: you want work done well and a team you do not have to supervise closely. With every US business and CPA firm we serve, our aim is the same: to be a genuine accounting outsourcing partner you can trust to get on with the work, not a vendor you have to keep in check.',
        'Our model depends on talented people and efficient procedures; quality comes before quantity. Most US businesses outsource accounting to India for obvious reasons: skills combined with considerable savings; we help you to make that transition seamless, safe, and well worth it. Putting it into perspective, we offer additional capacity, a reduced cost base, and a big room for your people to focus on growth.',
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.service-cards','data' => ['title' => 'Outsourcing Financial Services We Provide in the United States','text' => 'Day-to-day finance work can take hours that your people could use elsewhere-and the right accounting partner puts those hours to better use. From the basics to the sophisticated, PCS Global handles the accounting work your US business or firm counts on, whether you want one service or an end-to-end solution. ','cards' => $serviceCards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.service-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Outsourcing Financial Services We Provide in the United States','text' => 'Day-to-day finance work can take hours that your people could use elsewhere-and the right accounting partner puts those hours to better use. From the basics to the sophisticated, PCS Global handles the accounting work your US business or firm counts on, whether you want one service or an end-to-end solution. ','cards' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($serviceCards)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.trust-slider','data' => ['layout' => 'grid','title' => 'Outsourcing Accounting Solutions for USA Businesses &amp; CPA Firms','text' => 'No two businesses manage their finances the same way, so an off-the-shelf package rarely fits. We tailor the support to suit your situation, whether you\'re a rapidly expanding business or an established accountancy firm.','slides' => $clientCards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.trust-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['layout' => 'grid','title' => 'Outsourcing Accounting Solutions for USA Businesses &amp; CPA Firms','text' => 'No two businesses manage their finances the same way, so an off-the-shelf package rarely fits. We tailor the support to suit your situation, whether you\'re a rapidly expanding business or an established accountancy firm.','slides' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clientCards)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.split-accordion','data' => ['id' => 'standardsAcc','title' => 'US Accounting Standards &amp; Compliance Expertise','text' => 'US compliance leaves little room for error, and mistakes can quickly become expensive, so accuracy here is essential. Our people know US requirements thoroughly and complete every task to the standards that apply, which removes a major worry for you.','image' => $img('us/standards-6f1a69.jpg'),'items' => $standards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.split-accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'standardsAcc','title' => 'US Accounting Standards &amp; Compliance Expertise','text' => 'US compliance leaves little room for error, and mistakes can quickly become expensive, so accuracy here is essential. Our people know US requirements thoroughly and complete every task to the standards that apply, which removes a major worry for you.','image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('us/standards-6f1a69.jpg')),'items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($standards)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.industry-pills','data' => ['title' => 'Industries We Support Across US','rows' => $industries]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.industry-pills'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Industries We Support Across US','rows' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($industries)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.process-steps','data' => ['title' => 'How Does PCS Global Work With US Clients?','text' => 'Getting started with PCS Global is simple, and the process is built to keep risk and disruption to a minimum. In these five stages, you go from an opening conversation to a team that functions as part of your own.','steps' => $processSteps]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.process-steps'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'How Does PCS Global Work With US Clients?','text' => 'Getting started with PCS Global is simple, and the process is built to keep risk and disruption to a minimum. In these five stages, you go from an opening conversation to a team that functions as part of your own.','steps' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($processSteps)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.overlay-cards','data' => ['title' => 'Your Data Security. Our Responsibility.','text' => 'Trusting an outside team with your finances is not a step to take lightly, and the way we work reflects that. Security and confidentiality are core to how we operate, not features added on afterward, which is why US businesses and firms trust us with sensitive information.','icon' => $img('common/security-icon.svg'),'cards' => $securityCards]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.overlay-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Your Data Security. Our Responsibility.','text' => 'Trusting an outside team with your finances is not a step to take lightly, and the way we work reflects that. Security and confidentiality are core to how we operate, not features added on afterward, which is why US businesses and firms trust us with sensitive information.','icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/security-icon.svg')),'cards' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($securityCards)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.region-map','data' => ['id' => 'usMap','title' => 'PCS Global Serves Clients Across the US','size' => [1241, 726],'map' => ['src' => $img('us/map-us.svg'), 'x' => 0, 'y' => 0, 'w' => 1241],'logo' => ['src' => $img('common/map-logo.svg'), 'x' => 390, 'y' => 134, 'w' => 248.21],'photos' => [
        [$img('us/city-california.png'), 23, 311, 242],
        [$img('us/city-texas-e7cd96.png'), 422, 365, 190],
        [$img('us/city-florida.png'), 860, 461, 272],
        [$img('us/city-greatlakes-7ab03f.png'), 677, 134, 283],
        [$img('us/city-newyork-5be5d2.png'), 917, -19, 211],
    ],'pins' => [[130.29, 444.57, 43.17], [562.29, 583.57, 43.17], [906, 611.57, 43.17], [815, 323.57, 43.17], [987, 220.57, 43.17]],'labels' => [['California', 134, 384], ['Texas', 583, 523], ['Florida', 921.21, 551], ['Illinois', 830.21, 263], ['New York', 987, 160]],'label' => ['font' => 18, 'py' => 15.4, 'px' => 20]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.region-map'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'usMap','title' => 'PCS Global Serves Clients Across the US','size' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([1241, 726]),'map' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['src' => $img('us/map-us.svg'), 'x' => 0, 'y' => 0, 'w' => 1241]),'logo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['src' => $img('common/map-logo.svg'), 'x' => 390, 'y' => 134, 'w' => 248.21]),'photos' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        [$img('us/city-california.png'), 23, 311, 242],
        [$img('us/city-texas-e7cd96.png'), 422, 365, 190],
        [$img('us/city-florida.png'), 860, 461, 272],
        [$img('us/city-greatlakes-7ab03f.png'), 677, 134, 283],
        [$img('us/city-newyork-5be5d2.png'), 917, -19, 211],
    ]),'pins' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([[130.29, 444.57, 43.17], [562.29, 583.57, 43.17], [906, 611.57, 43.17], [815, 323.57, 43.17], [987, 220.57, 43.17]]),'labels' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['California', 134, 384], ['Texas', 583, 523], ['Florida', 921.21, 551], ['Illinois', 830.21, 263], ['New York', 987, 160]]),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['font' => 18, 'py' => 15.4, 'px' => 20])]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.cta-dark','data' => ['title' => 'Need More Capacity Without Increasing Headcount?','buttonText' => 'Book a Free Consultation','bg' => $img('common/cta-bg.png'),'icon' => $img('common/icon-phone.svg')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.cta-dark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Need More Capacity Without Increasing Headcount?','button-text' => 'Book a Free Consultation','bg' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/cta-bg.png')),'icon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($img('common/icon-phone.svg'))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.team-slider','data' => ['title' => 'Meet the PCS Global US Team','members' => $team,'experts' => $ourexpert]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.team-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Meet the PCS Global US Team','members' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($team),'experts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ourexpert)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.clients-slider','data' => ['images' => $images,'title' => 'Trusted by US Businesses &amp; Professional Firms']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.clients-slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['images' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($images),'title' => 'Trusted by US Businesses &amp; Professional Firms']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.testimonials','data' => ['title' => 'What Our US-Based Clients Say','items' => config('home.testimonials')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.testimonials'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'What Our US-Based Clients Say','items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(config('home.testimonials'))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.blog-cards','data' => ['title' => 'Insights for US Accounting &amp; Businesses','blogs' => $blogs,'newTab' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.blog-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Insights for US Accounting &amp; Businesses','blogs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blogs),'new-tab' => true]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.faq-list','data' => ['id' => 'usFaq','title' => 'Frequently Asked Questions','items' => $faqs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.faq-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'usFaq','title' => 'Frequently Asked Questions','items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqs)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.contact-form','data' => ['title' => 'Ready to Build a Smarter Outsourcing Team?','text' => 'Whether you need accounting, bookkeeping, tax, payroll or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.','cities' => ['New York', 'California', 'Texas', 'Florida', 'Illinois', 'Other'],'services' => array_column($serviceCards, 'title'),'country' => 'United States','phoneCountry' => 'us']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.contact-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Ready to Build a Smarter Outsourcing Team?','text' => 'Whether you need accounting, bookkeeping, tax, payroll or additional business support, PCS Global can help you build a dedicated outsourcing solution around your requirements.','cities' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['New York', 'California', 'Texas', 'Florida', 'Illinois', 'Other']),'services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(array_column($serviceCards, 'title')),'country' => 'United States','phone-country' => 'us']); ?>
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
<?php echo $__env->make('countries.us.layouts.frontfooter-us', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/countries/us/pages/home.blade.php ENDPATH**/ ?>
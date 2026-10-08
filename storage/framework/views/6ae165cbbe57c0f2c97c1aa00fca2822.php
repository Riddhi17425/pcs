
<?php
    $usUrl = fn ($path) => url('us/' . $path);
    $badgeDir = asset('public/front/images/figma-footer-badges');
?>
<?php if (isset($component)) { $__componentOriginal222c87a019257fb1d70ae0ff46ab02e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site-footer','data' => ['homeUrl' => $usUrl(''),'quickLinks' => [
        ['Home', $usUrl('')],
        ['About Us', $usUrl('about')],
        ['Data Security', route('datasecurity'), true],   // sab countries ka ek hi page, naye tab me
        ['Contact Us', $usUrl('contact-us')],
        ['Blogs', route('blog'), true],                   // sab countries ka ek hi page, naye tab me
    ],'services' => [
        ['Accounting Outsourcing', $usUrl('bookkeeping-and-accounting-services')],
        ['Bookkeeping Outsourcing', $usUrl('bookkeeping-and-accounting-services')],
        ['Tax Preparation Outsourcing', $usUrl('taxation-services')],
        ['Payroll Outsourcing', url('us') . '#consultation'],
        ['Audit Support', url('us') . '#consultation'],
    ],'address' => '225 Cherry Street, 52K<br>New York, NY, 10002','phones' => [['number' => '(+1) 347 801 8715']],'badges' => [
        [$badgeDir . '/iso-9001.png', 'ISO 9001', 'circle'],
        [$badgeDir . '/iso-27001.png', 'ISO 27001', 'circle'],
        [$badgeDir . '/gdpr.png', 'GDPR', 'circle'],
    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['home-url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usUrl('')),'quick-links' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        ['Home', $usUrl('')],
        ['About Us', $usUrl('about')],
        ['Data Security', route('datasecurity'), true],   // sab countries ka ek hi page, naye tab me
        ['Contact Us', $usUrl('contact-us')],
        ['Blogs', route('blog'), true],                   // sab countries ka ek hi page, naye tab me
    ]),'services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        ['Accounting Outsourcing', $usUrl('bookkeeping-and-accounting-services')],
        ['Bookkeeping Outsourcing', $usUrl('bookkeeping-and-accounting-services')],
        ['Tax Preparation Outsourcing', $usUrl('taxation-services')],
        ['Payroll Outsourcing', url('us') . '#consultation'],
        ['Audit Support', url('us') . '#consultation'],
    ]),'address' => '225 Cherry Street, 52K<br>New York, NY, 10002','phones' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['number' => '(+1) 347 801 8715']]),'badges' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        [$badgeDir . '/iso-9001.png', 'ISO 9001', 'circle'],
        [$badgeDir . '/iso-27001.png', 'ISO 27001', 'circle'],
        [$badgeDir . '/gdpr.png', 'GDPR', 'circle'],
    ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1)): ?>
<?php $attributes = $__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1; ?>
<?php unset($__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal222c87a019257fb1d70ae0ff46ab02e1)): ?>
<?php $component = $__componentOriginal222c87a019257fb1d70ae0ff46ab02e1; ?>
<?php unset($__componentOriginal222c87a019257fb1d70ae0ff46ab02e1); ?>
<?php endif; ?>

<?php echo $__env->make('components.footer-scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/countries/us/layouts/frontfooter-us.blade.php ENDPATH**/ ?>
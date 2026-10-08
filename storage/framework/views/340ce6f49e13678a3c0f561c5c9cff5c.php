
<?php
    $auUrl = fn ($path) => url('australia/' . $path);
?>
<?php if (isset($component)) { $__componentOriginal222c87a019257fb1d70ae0ff46ab02e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site-footer','data' => ['homeUrl' => $auUrl(''),'quickLinks' => [
        ['Home', $auUrl('')],
        ['About Us', $auUrl('about')],
        ['Data Security', route('datasecurity'), true],   // sab countries ka ek hi page, naye tab me
        ['Contact Us', $auUrl('contact-us')],
        ['Blogs', route('blog'), true],                   // sab countries ka ek hi page, naye tab me
    ],'services' => [
        ['Accounting Outsourcing', $auUrl('bookkeeping-accounting-services')],
        ['Bookkeeping Outsourcing', $auUrl('bookkeeping-accounting-services')],
        ['Tax Preparation Outsourcing', $auUrl('taxation-services')],
        ['BAS/IAS Return Services', $auUrl('taxation-services')],
        ['Payroll Outsourcing', url('australia') . '#consultation'],      // page abhi nahi hai, form par
        ['Strata Management Services', $auUrl('strata-management')],
    ],'address' => '22A Mort Street Blacktown<br>NSW 2148 Australia.','phones' => [['number' => '(+613) 9998 0494']]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['home-url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($auUrl('')),'quick-links' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        ['Home', $auUrl('')],
        ['About Us', $auUrl('about')],
        ['Data Security', route('datasecurity'), true],   // sab countries ka ek hi page, naye tab me
        ['Contact Us', $auUrl('contact-us')],
        ['Blogs', route('blog'), true],                   // sab countries ka ek hi page, naye tab me
    ]),'services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        ['Accounting Outsourcing', $auUrl('bookkeeping-accounting-services')],
        ['Bookkeeping Outsourcing', $auUrl('bookkeeping-accounting-services')],
        ['Tax Preparation Outsourcing', $auUrl('taxation-services')],
        ['BAS/IAS Return Services', $auUrl('taxation-services')],
        ['Payroll Outsourcing', url('australia') . '#consultation'],      // page abhi nahi hai, form par
        ['Strata Management Services', $auUrl('strata-management')],
    ]),'address' => '22A Mort Street Blacktown<br>NSW 2148 Australia.','phones' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['number' => '(+613) 9998 0494']])]); ?>
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
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/countries/australia/layouts/frontfooter-au.blade.php ENDPATH**/ ?>

<?php
    $flag = fn ($file) => asset('public/front/images/contry-icon/' . $file);
?>
<?php if (isset($component)) { $__componentOriginal222c87a019257fb1d70ae0ff46ab02e1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal222c87a019257fb1d70ae0ff46ab02e1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site-footer','data' => ['quickLinks' => [
        ['Home', url('/')],
        ['About Us', route('about')],
        ['Data Security', route('datasecurity')],
        ['Contact Us', route('contact')],
        ['Blogs', route('blog')],
    ],'services' => [
        ['Accounting & Bookkeeping', route('pcs.global.bookkeeping')],
        ['Strata Property Management', route('strata.management')],
        ['Payroll Outsourcing Services', route('payroll.services')],
        ['Taxation Services', route('taxation.services')],
        ['Recruitment Outsourcing Services', route('recruitment.services')],
        ['IT Automation Services', route('it.automation')],
    ],'address' => '22A Mort Street Blacktown<br>NSW 2148 Australia.','phones' => [
        ['number' => '(+613) 9998 0494', 'label' => 'AUS', 'icon' => $flag('australia-icon.png'), 'alt' => 'Australia'],
        ['number' => '(+1) 347 801 8715', 'label' => 'USA', 'icon' => $flag('us-icon.png'), 'alt' => 'USA'],
        ['number' => '(+91) 796 826 0121', 'label' => 'IND', 'icon' => $flag('india-icon.svg'), 'alt' => 'India'],
        ['number' => '(+44) 113 4034334', 'label' => 'UK', 'icon' => $flag('uk-icon.png'), 'alt' => 'UK'],
    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['quick-links' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        ['Home', url('/')],
        ['About Us', route('about')],
        ['Data Security', route('datasecurity')],
        ['Contact Us', route('contact')],
        ['Blogs', route('blog')],
    ]),'services' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        ['Accounting & Bookkeeping', route('pcs.global.bookkeeping')],
        ['Strata Property Management', route('strata.management')],
        ['Payroll Outsourcing Services', route('payroll.services')],
        ['Taxation Services', route('taxation.services')],
        ['Recruitment Outsourcing Services', route('recruitment.services')],
        ['IT Automation Services', route('it.automation')],
    ]),'address' => '22A Mort Street Blacktown<br>NSW 2148 Australia.','phones' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        ['number' => '(+613) 9998 0494', 'label' => 'AUS', 'icon' => $flag('australia-icon.png'), 'alt' => 'Australia'],
        ['number' => '(+1) 347 801 8715', 'label' => 'USA', 'icon' => $flag('us-icon.png'), 'alt' => 'USA'],
        ['number' => '(+91) 796 826 0121', 'label' => 'IND', 'icon' => $flag('india-icon.svg'), 'alt' => 'India'],
        ['number' => '(+44) 113 4034334', 'label' => 'UK', 'icon' => $flag('uk-icon.png'), 'alt' => 'UK'],
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
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/countries/india/layouts/frontfooter.blade.php ENDPATH**/ ?>

<?php
    $isAu = request()->is('australia', 'australia/*');
    $home = $isAu ? url('australia') : url('/');
    $contact = $isAu ? url('australia/contact-us') : route('contact');
    $links = $isAu
        ? [
            ['About Us', url('australia/about')],
            ['Accounting & Bookkeeping', url('australia/bookkeeping-accounting-services')],
            ['Taxation Services', url('australia/taxation-services')],
            ['Strata Management', url('australia/strata-management')],
        ]
        : [
            ['About Us', route('about')],
            ['Accounting & Bookkeeping', route('pcs.global.bookkeeping')],
            ['Taxation Services', route('taxation.services')],
            ['Strata Management', route('strata.management')],
            ['Blogs', route('blog')],
        ];
    $meta = ['meta_title' => 'Page Not Found | PCS Global', 'meta_description' => 'The page you are looking for could not be found.'];
?>

<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/front/css/common/buttons.css')); ?>?v=<?php echo e(filemtime(public_path('front/css/common/buttons.css'))); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/front/css/common/error-page.css')); ?>?v=<?php echo e(filemtime(public_path('front/css/common/error-page.css'))); ?>">
    <meta name="robots" content="noindex, follow">
<?php $__env->stopPush(); ?>

<?php echo $__env->make($isAu ? 'countries.australia.layouts.frontheader-au' : 'countries.india.layouts.frontheader', $meta, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="error_page">
    <div class="container">
        <div class="error_page_in">
            <span class="error_code">404</span>
            <span class="error_tag">Page not found</span>
            <h1>Oops! This page took a different route</h1>
            <p>The page you are looking for doesn't exist, has been moved, or is temporarily unavailable. Let's get you back on track.</p>

            <div class="error_btns">
                <a class="com_btn2" href="<?php echo e($home); ?>">Back to Home</a>
                <a class="com_btn_outline com_btn_outline_light" href="<?php echo e($contact); ?>">Contact Us</a>
            </div>

            <div class="error_links">
                <span>Or try one of these pages</span>
                <ul>
                    <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $url]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($url); ?>"><?php echo e($label); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make($isAu ? 'countries.australia.layouts.frontfooter-au' : 'countries.india.layouts.frontfooter', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/errors/404.blade.php ENDPATH**/ ?>
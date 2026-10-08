
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'blogs', 'detailRoute' => 'blogs.detail', 'newTab' => false]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title', 'blogs', 'detailRoute' => 'blogs.detail', 'newTab' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section class="card_main mt-100 ">
    <div class="container">
        <div class="com_sec_head_top">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="row g-4 g-xl-5">
            <?php $__currentLoopData = $blogs->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-img-home">
                        <img class="img-fluid" src="<?php echo e(asset('/' . $blog->front_image)); ?>" alt="image" loading="lazy">
                    </div>
                    <div class="ins_card">
                        <p><?php echo e(\Carbon\Carbon::parse($blog->date)->format('F j, Y')); ?></p>
                        <a href="<?php echo e(route($detailRoute, $blog->url)); ?>"<?php if($newTab): ?> target="_blank" rel="noopener"<?php endif; ?>><h4 class="sub_head"><?php echo e($blog->title); ?></h4></a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/blog-cards.blade.php ENDPATH**/ ?>
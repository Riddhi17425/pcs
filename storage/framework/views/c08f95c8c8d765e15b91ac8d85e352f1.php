
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'items' => []]));

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

foreach (array_filter((['title', 'items' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section class="mt-80">
    <div class="container">
        <div class="mb-5 text-center">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="our_experts_cen row align-items-center">
            <div class="col-md-12">
                <div class="testimonial_slider" data-slider data-slider-controls="slider3" data-slider-show="2">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="testimonial_card">
                            <img class="quote_icon" src="<?php echo e(asset('public/front/images/quotation-icon.svg')); ?>" loading="lazy" alt="quotation-icon">
                            <p><?php echo $item['text']; ?></p>
                            <hr>
                            <div class="testimonial_author">
                                <h4><?php echo e($item['name']); ?></h4>
                                <p><?php echo e($item['role']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <?php if (isset($component)) { $__componentOriginal2b88da7a5309947c0f1e600f4a5bdfe5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b88da7a5309947c0f1e600f4a5bdfe5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.slider-controls','data' => ['prefix' => 'slider3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.slider-controls'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['prefix' => 'slider3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b88da7a5309947c0f1e600f4a5bdfe5)): ?>
<?php $attributes = $__attributesOriginal2b88da7a5309947c0f1e600f4a5bdfe5; ?>
<?php unset($__attributesOriginal2b88da7a5309947c0f1e600f4a5bdfe5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b88da7a5309947c0f1e600f4a5bdfe5)): ?>
<?php $component = $__componentOriginal2b88da7a5309947c0f1e600f4a5bdfe5; ?>
<?php unset($__componentOriginal2b88da7a5309947c0f1e600f4a5bdfe5); ?>
<?php endif; ?>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/testimonials.blade.php ENDPATH**/ ?>
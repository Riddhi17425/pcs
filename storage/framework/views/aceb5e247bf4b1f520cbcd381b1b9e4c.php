
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'text' => '', 'cards' => [], 'icon' => null]));

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

foreach (array_filter((['title', 'text' => '', 'cards' => [], 'icon' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4"><?php echo $title; ?></h2>
            <?php if($text): ?>
                <p><?php echo $text; ?></p>
            <?php endif; ?>
        </div>

        <div class="our_experts_cen">
            <div class="ov_slider" data-slider data-slider-controls="slider5" data-slider-show="3">
                <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <div class="ov_card">
                            <img src="<?php echo e($card['img']); ?>" loading="lazy" alt="<?php echo e($card['title']); ?>">
                            <div class="ov_card_body">
                                <div class="ov_card_head">
                                    <h3><?php echo $card['title']; ?></h3>
                                    <?php if($icon): ?>
                                        <img src="<?php echo e($icon); ?>" width="33" height="30" alt="">
                                    <?php endif; ?>
                                </div>
                                <p><?php echo $card['text']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <?php if (isset($component)) { $__componentOriginal2b88da7a5309947c0f1e600f4a5bdfe5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b88da7a5309947c0f1e600f4a5bdfe5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.slider-controls','data' => ['prefix' => 'slider5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.slider-controls'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['prefix' => 'slider5']); ?>
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
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/overlay-cards.blade.php ENDPATH**/ ?>
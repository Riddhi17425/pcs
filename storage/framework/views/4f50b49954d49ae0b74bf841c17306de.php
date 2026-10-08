
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'text' => '', 'cards' => []]));

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

foreach (array_filter((['title', 'text' => '', 'cards' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section class="comp_bus mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2 class="mb-2 mb-xxl-4"><?php echo $title; ?></h2>
            <?php if($text): ?>
                <p><?php echo $text; ?></p>
            <?php endif; ?>
        </div>

        
        <div class="precision_grid <?php echo e(count($cards) % 3 ? 'precision_grid_center' : ''); ?>">
            <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($card['url']); ?>" class="precision_card">
                    <div class="precision_card_img">
                        <img src="<?php echo e($card['img']); ?>" loading="lazy" alt="<?php echo e($card['title']); ?>">
                    </div>
                    <span class="precision_card_arrow">
                        <img src="<?php echo e(asset('public/front/images/figma-precision/precision-arrow.svg')); ?>" alt="">
                    </span>
                    <div class="precision_card_body">
                        <h3><?php echo $card['title']; ?></h3>
                        <p><?php echo $card['text']; ?></p>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/service-cards.blade.php ENDPATH**/ ?>
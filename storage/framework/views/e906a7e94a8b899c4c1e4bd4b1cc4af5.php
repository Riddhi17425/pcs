
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'text' => '', 'image', 'items' => [], 'id' => 'splitAcc']));

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

foreach (array_filter((['title', 'text' => '', 'image', 'items' => [], 'id' => 'splitAcc']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
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

        <div class="split_acc">
            <div class="split_acc_img">
                <img src="<?php echo e($image); ?>" loading="lazy" alt="<?php echo e(strip_tags($title)); ?>">
            </div>
            <div class="split_acc_list accordion" id="<?php echo e($id); ?>">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="split_acc_item">
                        <button type="button" class="split_acc_head <?php echo e($i === 0 ? '' : 'collapsed'); ?>" <?php if(!empty($item['text'])): ?> data-bs-toggle="collapse" <?php endif; ?>
                            data-bs-target="#<?php echo e($id); ?><?php echo e($i); ?>" aria-expanded="<?php echo e($i === 0 ? 'true' : 'false'); ?>"
                            aria-controls="<?php echo e($id); ?><?php echo e($i); ?>">
                            <span><?php echo $item['title']; ?></span>
                            <img src="<?php echo e(asset('public/front/images/common/icon-plus.svg')); ?>" width="32" height="32" alt="">
                        </button>
                        <?php if(!empty($item['text'])): ?>
                            <div id="<?php echo e($id); ?><?php echo e($i); ?>" class="split_acc_body collapse <?php echo e($i === 0 ? 'show' : ''); ?>" data-bs-parent="#<?php echo e($id); ?>">
                                <p><?php echo $item['text']; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/split-accordion.blade.php ENDPATH**/ ?>
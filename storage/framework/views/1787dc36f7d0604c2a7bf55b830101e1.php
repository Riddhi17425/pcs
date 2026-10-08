
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'mark' => null,
    'text' => '',
    'features' => [],
    'primaryText' => null,
    'primaryAttrs' => 'href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"',
    'secondaryText' => null,
    'secondaryUrl' => '#',
    'bg' => null,
    'person' => null,
]));

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

foreach (array_filter(([
    'title',
    'mark' => null,
    'text' => '',
    'features' => [],
    'primaryText' => null,
    'primaryAttrs' => 'href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal"',
    'secondaryText' => null,
    'secondaryUrl' => '#',
    'bg' => null,
    'person' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section class="hero_dark">
    <?php if($bg): ?>
        <img class="hero_dark_bg" src="<?php echo e($bg); ?>" alt="" aria-hidden="true">
    <?php endif; ?>
    <?php if($person): ?>
        <img class="hero_dark_person" src="<?php echo e($person); ?>" alt="">
    <?php endif; ?>
    <div class="container">
        <div class="hero_dark_content">
            <div class="hero_dark_text">
                <div>
                    <h1><?php echo e($title); ?><?php if($mark): ?> <span class="hero_dark_mark"><?php echo e($mark); ?></span><?php endif; ?></h1>
                    <p class="hero_dark_para"><?php echo e($text); ?></p>
                </div>
                <?php if(count($features)): ?>
                    <ul class="hero_dark_features">
                        <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><img src="<?php echo e(asset('public/front/images/common/icon-check.svg')); ?>" width="16" height="16" alt=""><?php echo e($feature); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="hero_dark_btns">
                <?php if($primaryText): ?>
                    <a class="com_btn2" <?php echo $primaryAttrs; ?>><?php echo e($primaryText); ?></a>
                <?php endif; ?>
                <?php if($secondaryText): ?>
                    <a class="com_btn_outline com_btn_outline_light" href="<?php echo e($secondaryUrl); ?>"><?php echo e($secondaryText); ?>

                        <img src="<?php echo e(asset('public/front/images/common/icon-arrow-right.svg')); ?>" width="20" height="20" alt=""></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/hero-dark.blade.php ENDPATH**/ ?>

<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'buttonText', 'bg' => null, 'icon' => null]));

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

foreach (array_filter((['title', 'buttonText', 'bg' => null, 'icon' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section class="mt-100">
    <div class="container">
        <div class="cta_dark">
            <?php if($bg): ?>
                <img class="cta_dark_bg" src="<?php echo e($bg); ?>" alt="" aria-hidden="true">
            <?php endif; ?>
            <div class="cta_dark_in">
                <h2><?php echo $title; ?></h2>
                <a class="com_btn_outline com_btn_outline_light" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <?php if($icon): ?>
                        <img src="<?php echo e($icon); ?>" width="24" height="24" alt="">
                    <?php endif; ?>
                    <?php echo e($buttonText); ?>

                </a>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/cta-dark.blade.php ENDPATH**/ ?>
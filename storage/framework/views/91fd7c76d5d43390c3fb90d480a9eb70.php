
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Frequently asked questions', 'items' => [], 'id' => 'faqAccordion']));

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

foreach (array_filter((['title' => 'Frequently asked questions', 'items' => [], 'id' => 'faqAccordion']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section class="mt-80">
    <div class="container">
        <div class="com_sec_head_top">
            <h4 class="faq-head mb-2 mb-xxl-4"><?php echo $title; ?></h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="fre_ques accordion" id="<?php echo e($id); ?>">
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="fre_que">
                            <h5 class="sub_head <?php echo e($i === 0 ? '' : 'collapsed'); ?>" data-bs-toggle="collapse" data-bs-target="#<?php echo e($id); ?><?php echo e($i); ?>"
                                aria-expanded="<?php echo e($i === 0 ? 'true' : 'false'); ?>" aria-controls="<?php echo e($id); ?><?php echo e($i); ?>">
                                <?php echo e($item['q']); ?>

                            </h5>
                            <div id="<?php echo e($id); ?><?php echo e($i); ?>" class="accordion-collapse collapse <?php echo e($i === 0 ? 'show' : ''); ?>" data-bs-parent="#<?php echo e($id); ?>">
                                <p><?php echo $item['a']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/faq-list.blade.php ENDPATH**/ ?>
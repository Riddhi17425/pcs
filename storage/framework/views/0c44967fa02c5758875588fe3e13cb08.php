
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['certs' => [], 'toolsCount' => 29]));

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

foreach (array_filter((['certs' => [], 'toolsCount' => 29]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<section class="clients cert_tools_sec mt-100">
    <div class="container">
        <div class="cert_tools_tabs">
            <button type="button" class="cert_tools_tab active" data-tab="certifications">Certifications</button>
            <button type="button" class="cert_tools_tab" data-tab="tools">Tools & Technology</button>
        </div>
    </div>

    <div class="cert_tools_panel active" data-panel="certifications">
        <div class="container">
            <div class="cert_badges_row">
                <?php $__currentLoopData = $certs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$img, $alt]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="cert_badge"><img src="<?php echo e($img); ?>" alt="<?php echo e($alt); ?>" loading="lazy"></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="cert_tools_panel" data-panel="tools">
        <div class="client_slider_full">
            <div class="client_slider">
                <?php for($i = 1; $i <= $toolsCount; $i++): ?>
                    <?php $tool = sprintf('Homepage_%02d', $i); ?>
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('public/front/images/' . $tool . '.png')); ?>" loading="lazy" alt="<?php echo e($tool); ?>">
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<?php if (! $__env->hasRenderedOnce('9989fb5e-4f4a-4e0f-bc37-9a82ce28dd7f')): $__env->markAsRenderedOnce('9989fb5e-4f4a-4e0f-bc37-9a82ce28dd7f'); ?>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll('.cert_tools_tab');
    const panels = document.querySelectorAll('.cert_tools_panel');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-tab');

            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            panels.forEach(p => p.classList.toggle('active', p.getAttribute('data-panel') === target));
        });
    });
});
</script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/cert-tools.blade.php ENDPATH**/ ?>
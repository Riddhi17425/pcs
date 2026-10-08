
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'size', 'map', 'logo' => null, 'photos' => [], 'pins' => [], 'labels' => [], 'label' => [], 'id' => 'regionMap']));

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

foreach (array_filter((['title', 'size', 'map', 'logo' => null, 'photos' => [], 'pins' => [], 'labels' => [], 'label' => [], 'id' => 'regionMap']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    [$W, $H] = $size;
    $x = fn ($v) => round($v / $W * 100, 3) . '%';
    $y = fn ($v) => round($v / $H * 100, 3) . '%';
    $label += ['font' => 18, 'py' => 9.5, 'px' => 26.8];
    // map bahut bada na lage: height ~540px aur width ~860px se zyada nahi
    $maxW = (int) round(min($W, 540 * $W / $H, 860));
    $pin = asset('public/front/images/common/pin.png');
?>
<section class="mt-100">
    <div class="container">
        <div class="com_sec_head_top">
            <h2><?php echo $title; ?></h2>
        </div>

        <div class="region_map" id="<?php echo e($id); ?>"
            style="max-width:<?php echo e($maxW); ?>px;aspect-ratio:<?php echo e($W); ?> / <?php echo e($H); ?>;--rm-w:<?php echo e($W); ?>;--rm-font:<?php echo e($label['font']); ?>;--rm-py:<?php echo e($label['py']); ?>;--rm-px:<?php echo e($label['px']); ?>;--rm-land:<?php echo e($map['opacity'] ?? 1); ?>">
            <img class="region_map_land" src="<?php echo e($map['src']); ?>" style="left:<?php echo e($x($map['x'])); ?>;top:<?php echo e($y($map['y'])); ?>;width:<?php echo e($x($map['w'])); ?>" loading="lazy" alt="<?php echo e(strip_tags($title)); ?>">
            <?php if($logo): ?>
                <img class="region_map_logo" src="<?php echo e($logo['src']); ?>" style="left:<?php echo e($x($logo['x'])); ?>;top:<?php echo e($y($logo['y'])); ?>;width:<?php echo e($x($logo['w'])); ?>" loading="lazy" alt="PCS Global">
            <?php endif; ?>
            <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => [$src, $px, $py, $pw]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="region_map_photo" style="left:<?php echo e($x($px)); ?>;top:<?php echo e($y($py)); ?>;width:<?php echo e($x($pw)); ?>;--d:<?php echo e($i); ?>">
                    <img src="<?php echo e($src); ?>" loading="lazy" alt="">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $pins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => [$px, $py, $pw]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="region_map_pin" style="left:<?php echo e($x($px)); ?>;top:<?php echo e($y($py)); ?>;width:<?php echo e($x($pw)); ?>;--d:<?php echo e($i); ?>">
                    <img src="<?php echo e($pin); ?>" loading="lazy" alt="">
                </span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => [$name, $px, $py]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <span class="region_map_label" style="left:<?php echo e($x($px)); ?>;top:<?php echo e($y($py)); ?>;--d:<?php echo e($i); ?>"><?php echo e($name); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php if (! $__env->hasRenderedOnce('671146e4-2bda-43fa-a42b-ce58be8d1521')): $__env->markAsRenderedOnce('671146e4-2bda-43fa-a42b-ce58be8d1521'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.region_map').forEach(function (map) {
        // JS na chale to map normal dikhega; JS hone par hi entry animation lagti hai
        map.classList.add('region_map_anim');
        if (!('IntersectionObserver' in window)) { map.classList.add('is-in'); return; }
        const io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { map.classList.add('is-in'); io.disconnect(); }
            });
        }, { threshold: 0.25 });
        io.observe(map);
    });
});
</script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/region-map.blade.php ENDPATH**/ ?>
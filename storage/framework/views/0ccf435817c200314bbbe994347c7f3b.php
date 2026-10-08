
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'members' => [], 'experts' => [], 'core' => true]));

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

foreach (array_filter((['title', 'members' => [], 'experts' => [], 'core' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $team = $core
        ? array_map(fn ($m) => ['name' => $m['name'], 'role' => $m['role'], 'image' => asset('public/front/images/common/team/' . $m['image'])], config('home.core_team'))
        : [];
    $team = array_merge($team, $members);
    $names = array_column($team, 'name');
    foreach ($experts as $expert) {
        if (!in_array($expert->name, $names)) {
            $team[] = ['name' => $expert->name, 'role' => $expert->designation, 'image' => asset('/' . $expert->image)];
        }
    }
?>
<section class="our_experts mt-100 ">
    <div class="container">
        <div class="com_sec_head_top">
            <h2><?php echo $title; ?></h2>
        </div>

        <div class="our_experts_cen">
            <div class="experts_slider team-slider" data-slider data-slider-controls="slider1" data-slider-show="4">
                <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="experts_card team-card">
                        <img class="img-fluid" src="<?php echo e($member['image']); ?>" loading="lazy" alt="<?php echo e($member['name'] ?? 'expert'); ?>">
                        <div class="experts_card_bt">
                            <h4 class="sub_head"><?php echo e($member['name']); ?></h4>
                            <p class="mb-0"><?php echo e($member['role']); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <?php if (isset($component)) { $__componentOriginal2b88da7a5309947c0f1e600f4a5bdfe5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b88da7a5309947c0f1e600f4a5bdfe5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home.slider-controls','data' => ['prefix' => 'slider1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home.slider-controls'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['prefix' => 'slider1']); ?>
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
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/team-slider.blade.php ENDPATH**/ ?>
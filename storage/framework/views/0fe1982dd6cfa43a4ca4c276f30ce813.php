
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title', 'text', 'slides' => [], 'layout' => 'slider']));

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

foreach (array_filter((['title', 'text', 'slides' => [], 'layout' => 'slider']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $card = function ($slide) {
        $cert = !empty($slide['certificate']) ? 'trust_slide_img_certificate' : '';
        $text = !empty($slide['text']) ? '<p>' . $slide['text'] . '</p>' : '';
        $btn = !empty($slide['button']) ? '<div class="trust_slide_btn"><a class="com_btn_outline com_btn_outline_light" href="' . e($slide['button'][1]) . '">' . e($slide['button'][0]) . '</a></div>' : '';
        return '<div class="trust_slide"><div class="trust_slide_img ' . $cert . '"><img src="' . e($slide['img']) . '" loading="lazy" alt="' . e(strip_tags($slide['title'])) . '"></div>'
            . '<div class="trust_slide_body"><h3>' . $slide['title'] . '</h3>' . $text . '</div>' . $btn . '</div>';
    };
?>
<?php if($layout === 'grid'): ?>
<section class="trust_slider_sec trust_grid_sec mt-100">
    <div class="container">
        <div class="trust_grid_head">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $text; ?></p>
        </div>
        <div class="trust_grid">
            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $card($slide); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php else: ?>
<section class="trust_slider_sec mt-100">
    <div class="trust_slider_wrap">
        <div class="trust_slider_lt">
            <div class="trust_slider_head">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
            <div class="trust_slider_arrows">
                <button type="button" class="trust_slider_arrow trust_slider_prev" aria-label="Previous">
                    <img src="<?php echo e(asset('public/front/images/figma-trust-slider/arrow-left.svg')); ?>" alt="">
                </button>
                <button type="button" class="trust_slider_arrow trust_slider_next" aria-label="Next">
                    <img src="<?php echo e(asset('public/front/images/figma-trust-slider/arrow-left.svg')); ?>" alt="">
                </button>
            </div>
        </div>

        <div class="trust_slider_rt">
            <div class="trust_slider_track" id="trustSliderTrack">
                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $card($slide); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="trust_slider_progress" id="trustSliderProgress">
                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" class="trust_slider_seg" aria-label="Go to card <?php echo e($i + 1); ?>"></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if (! $__env->hasRenderedOnce('28a45325-dbe6-4021-a9a1-b812180c8d85')): $__env->markAsRenderedOnce('28a45325-dbe6-4021-a9a1-b812180c8d85'); ?>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById('trustSliderTrack');
    const prevBtn = document.querySelector('.trust_slider_prev');
    const nextBtn = document.querySelector('.trust_slider_next');
    const segs = document.querySelectorAll('#trustSliderProgress .trust_slider_seg');
    if (!track || !segs.length) return;

    const cards = () => Array.from(track.querySelectorAll('.trust_slide'));
    const cardLeft = (card) => card.offsetLeft - track.firstElementChild.offsetLeft;

    // jo card track ke left edge ke sabse paas hai wahi active; end tak scroll ho gaya ho to aakhri card
    function updateProgress() {
        const list = cards();
        const maxScroll = track.scrollWidth - track.clientWidth;
        let active = 0;
        if (maxScroll > 0 && track.scrollLeft >= maxScroll - 2) {
            active = list.length - 1;
        } else {
            let best = Infinity;
            list.forEach((card, i) => {
                const d = Math.abs(cardLeft(card) - track.scrollLeft);
                if (d < best) { best = d; active = i; }
            });
        }
        segs.forEach((seg, i) => seg.classList.toggle('active', i === active));
    }

    function scrollByCard(direction) {
        const card = track.querySelector('.trust_slide');
        if (!card) return;
        const gap = parseFloat(getComputedStyle(track).gap) || 0;
        track.scrollBy({ left: direction * (card.offsetWidth + gap), behavior: 'smooth' });
    }

    segs.forEach((seg, i) => seg.addEventListener('click', () => {
        const card = cards()[i];
        if (card) track.scrollTo({ left: cardLeft(card), behavior: 'smooth' });
    }));

    prevBtn && prevBtn.addEventListener('click', () => scrollByCard(-1));
    nextBtn && nextBtn.addEventListener('click', () => scrollByCard(1));
    track.addEventListener('scroll', updateProgress);
    updateProgress();
});
</script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/home/trust-slider.blade.php ENDPATH**/ ?>
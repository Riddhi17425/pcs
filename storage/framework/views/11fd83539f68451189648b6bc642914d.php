
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'homeUrl' => url('/'),
    'quickLinks' => [],
    'services' => [],
    'address' => '',
    'phones' => [],
    'email' => 'info@pcsglobalgroup.com',
    'privacyUrl' => route('privacy-policy'),
    'logo' => asset('public/front/images/footer-log.svg'),
    'about' => 'PCS Global is committed to delivering reliable and quality accounting service and is driven by long-term partnerships with clients, and employees based on strong values of integrity and trust.',
    'copyright' => 'Progressive Corporate Services Pvt. Ltd., All Rights Reserved.',
    'social' => null,
    'badges' => null,
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
    'homeUrl' => url('/'),
    'quickLinks' => [],
    'services' => [],
    'address' => '',
    'phones' => [],
    'email' => 'info@pcsglobalgroup.com',
    'privacyUrl' => route('privacy-policy'),
    'logo' => asset('public/front/images/footer-log.svg'),
    'about' => 'PCS Global is committed to delivering reliable and quality accounting service and is driven by long-term partnerships with clients, and employees based on strong values of integrity and trust.',
    'copyright' => 'Progressive Corporate Services Pvt. Ltd., All Rights Reserved.',
    'social' => null,
    'badges' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $social ??= [
        ['https://www.linkedin.com/company/pcs-global-group/', asset('public/front/images/linkedin.svg'), 'linkedin'],
        ['https://www.facebook.com/PCSGlobalGroup/', asset('public/front/images/facebook.svg'), 'facebook'],
        ['https://www.instagram.com/pcsglobalgroup/', asset('public/front/images/insta.svg'), 'insta'],
    ];
    $badgeDir = asset('public/front/images/figma-footer-badges');
    // [file, alt, shape]
    $badges ??= [
        ["$badgeDir/iso-9001.png", 'ISO 9001', 'circle'],
        ["$badgeDir/sca-vic-member.png", 'Strata Community Association VIC', 'box'],
        ["$badgeDir/iso-27001.png", 'ISO 27001', 'circle'],
        ["$badgeDir/sca-wa-member.png", 'Strata Community Association WA', 'box'],
        ["$badgeDir/gdpr.png", 'GDPR', 'circle'],
    ];
?>
<footer class="mt-100 footer">
    <div class="container">
        <div class="footer_top">
            <div class="footer_top_flex">
                <div class="foot_lt">
                    <a href="<?php echo e($homeUrl); ?>"><img class="ft_logo" src="<?php echo e($logo); ?>" alt="logo" loading="lazy"></a>
                    <p class="foot_lt_para"><?php echo e($about); ?></p>
                    <div class="foot_social">
                        <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$url, $icon, $alt]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e($url); ?>" target="_blank"><img src="<?php echo e($icon); ?>" alt="<?php echo e($alt); ?>" loading="lazy"></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="foot_links_group">
                    <div class="foot_rt">
                        <h4 class="sub_head">Quick Links</h4>
                        <ul>
                            <?php $__currentLoopData = $quickLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($link[1]); ?>"<?php if(!empty($link[2])): ?> target="_blank" rel="noopener"<?php endif; ?>><?php echo e($link[0]); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="foot_rt">
                        <h4 class="sub_head">Our Services</h4>
                        <ul>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $url]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($url); ?>"><?php echo $label; ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>

                    <div class="foot_rt border-end-0">
                        <h4 class="sub_head">Contact Us</h4>

                        <div class="foot_contact_block">
                            <h6 class="foot_contact_label">Address:</h6>
                            <p class="foot_contact_value"><?php echo $address; ?></p>
                        </div>

                        <div class="foot_contact_block">
                            <h6 class="foot_contact_label">Call Us:</h6>
                            <ul class="foot_call_list">
                                <?php $__currentLoopData = $phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="tel:<?php echo e($phone['number']); ?>">
                                            <?php if(!empty($phone['icon'])): ?>
                                                <img src="<?php echo e($phone['icon']); ?>" alt="<?php echo e($phone['alt'] ?? ''); ?>" loading="lazy">
                                            <?php endif; ?>
                                            <span><?php if(!empty($phone['label'])): ?><b><?php echo e($phone['label']); ?> :</b> <?php endif; ?><?php echo e($phone['number']); ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                        <div class="foot_contact_block mb-0">
                            <h6 class="foot_contact_label">Email Us:</h6>
                            <p class="foot_contact_value">
                                <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_badges_wrap">
            <div class="footer_badges">
                <?php $__currentLoopData = $badges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$img, $alt, $shape]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="badge_<?php echo e($shape); ?>"><img src="<?php echo e($img); ?>" alt="<?php echo e($alt); ?>" loading="lazy"></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="footer_bot">
            <p>©<span><?php echo e(date('Y')); ?></span> <?php echo e($copyright); ?></p>

            <p class="Privacy_link"><a href="<?php echo e($privacyUrl); ?>">Privacy Policy</a></p>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/components/site-footer.blade.php ENDPATH**/ ?>
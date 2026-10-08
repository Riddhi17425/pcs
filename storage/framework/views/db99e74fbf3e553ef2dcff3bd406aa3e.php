
<?php
    $nav = [
        'home' => url('australia'),
        'about' => url('australia/about'),
        'contact' => url('australia/contact-us'),
        'services' => [
            ['Accounting & Bookkeeping', url('australia/bookkeeping-accounting-services')],
            ['Taxation Services', url('australia/taxation-services')],
            ['Strata Property Management', url('australia/strata-management')],
        ],
        'country' => ['name' => 'Australia', 'flag' => 'australia-icon.png'],
        'phone' => ['tel' => '+61399980494', 'label' => '(+613) 9998 0494'],
    ];
?>
<?php echo $__env->make('shared.site-header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/countries/australia/layouts/frontheader-au.blade.php ENDPATH**/ ?>
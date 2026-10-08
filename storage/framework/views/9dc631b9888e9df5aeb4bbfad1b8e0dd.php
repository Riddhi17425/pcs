
<?php
    $nav = [
        'home' => url('us'),
        'about' => url('us/about'),
        'contact' => url('us/contact-us'),
        'services' => [
            ['Accounting & Bookkeeping', url('us/bookkeeping-and-accounting-services')],
            ['Taxation Services', url('us/taxation-services')],
        ],
        'country' => ['name' => 'US', 'flag' => 'us-icon.png'],
        'phone' => ['tel' => '+13478018715', 'label' => '(+1) 347 801 8715'],
    ];
?>
<?php echo $__env->make('shared.site-header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/countries/us/layouts/frontheader-us.blade.php ENDPATH**/ ?>
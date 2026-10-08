
<?php
    $nav = [
        'home' => url('uk'),
        'about' => url('uk/about'),
        'contact' => url('uk/contact-us'),
        'services' => [
            ['Accounting Outsourcing', url('uk/accounting-outsourcing-services')],
            ['Small Business Accounting', url('uk/small-business-accounting-services')],
            ['Tax Preparation Outsourcing', url('uk/outsource-tax-preparation-services')],
        ],
        'country' => ['name' => 'UK', 'flag' => 'uk-icon.png'],
        'phone' => ['tel' => '+441134034334', 'label' => '(+44) 113 4034334'],
    ];
?>
<?php echo $__env->make('shared.site-header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/countries/uk/layouts/frontheader-uk.blade.php ENDPATH**/ ?>
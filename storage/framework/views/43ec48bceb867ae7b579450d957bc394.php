<?php echo $__env->make('layouts.frontheader', [
    'og_image' => asset('public/admin/blogs/what-are-the-duties-of-a-strata-manager-in-australia-6982d986039b2.jpg')
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="com_hero" style="background-image: url(' <?php echo e(asset('public/front/images/blog-hero-bg.png')); ?>'); ">
    <div class="container">
        <div class="com_hero_child">
            <h1>Blogs</h1>
            <p>Insights That Drive Smarter Business Decisions</p>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row g-4 g-lg-5">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-lg-4">
                    <div>
                        <img class="img-fluid" src="<?php echo e(asset('/'.$blog->front_image)); ?>" alt="imah3ge">
                    </div>
                    <div class="ins_card">
                        <p><?php echo e(\Carbon\Carbon::parse($blog->date)->format('F j, Y')); ?></p>
                        <a href="<?php echo e(route('blogs.detail', $blog->url)); ?>">
                            <h4 class="sub_head"><?php echo e($blog->title); ?></h4>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php echo $__env->make('layouts.frontfooter', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pcs\resources\views/front/blogs.blade.php ENDPATH**/ ?>
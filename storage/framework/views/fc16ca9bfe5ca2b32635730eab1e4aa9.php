    

    <?php $__env->startSection('content'); ?>
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row align-items-center">
                    <div id="message-pop-up" class="alert  alert-dismissible fade show"  role="alert" style="display: none">
                        <span id="success-message"></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="border-0 mb-4">
                        <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Blogs</h3>
                            <div class="col-auto d-flex w-sm-100">
                                <a href="<?php echo e(route('blogs.addBlogs')); ?>">
                                    <button type="button" class="btn btn-primary btn-set-task w-sm-100"><i class="icofont-plus-circle me-2 fs-6"></i>Add Blogs</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="message-pop-up" class="alert  alert-dismissible fade show"  role="alert" style="display: none">
                        <span id="success-message"></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" id="success-message" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                </div> <!-- Row end  -->
                <div class="row clearfix g-3">
                    <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="blogs_table" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Front Image</th>
                                            <th>Status</th>
                                            <th>Actions</th>  
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
            </div>
        </div>

        <script>
            window.APP_URLS = {
                getBlogsData: "<?php echo e(route('getBlogsData')); ?>",
                deleteblogs:"<?php echo e(route('blogs.delete' , [':id'])); ?>",
                csrfToken: "<?php echo e(csrf_token()); ?>",
                image_path: "<?php echo e(asset('/')); ?>"
            };
        </script>
        <script src="<?php echo e(asset('public/admin/js/blogs/blogs.js')); ?>" defer></script>
        <?php $__env->stopSection(); ?>
        

        
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pcs\resources\views/admin/blogs/index.blade.php ENDPATH**/ ?>
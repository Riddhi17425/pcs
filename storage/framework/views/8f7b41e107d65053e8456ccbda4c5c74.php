<?php $__env->startSection('content'); ?>
    <style>
        .required-star {
            color: red;
        }
    </style>

    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            
            <div class="row align-items-center">
                <div id="message-pop-up" class="alert alert-dismissible fade show" role="alert" style="display: none">
                    <span id="success-message"></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Add Blogs</h3>
                        <a href="<?php echo e(route('blogs')); ?>" class="btn btn-primary btn-set-task">Back</a>
                    </div>
                </div>
            </div>

            
            <div class="row clearfix g-3">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="<?php echo e(route('blogs.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                
                                <div class="card mb-4 border">
                                    <div class="card-header bg-light"><strong>Blogs Information</strong></div>
                                    <div class="card-body row">

                                        
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Title <span class="required-star">*</span></label>
                                            <input type="text" name="title"
                                                class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('title')); ?>" placeholder="Enter Title">
                                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Url <span class="required-star">*</span></label>
                                            <input type="text" name="url"
                                                class="form-control <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('url')); ?>" placeholder="Enter url">
                                            <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        

                                        <div class="col-md-12 mb-3">
                                            <label class="form-label">Short Description <span
                                                    class="required-star">*</span></label>
                                            <textarea name="short_description" id="short_description"
                                                class="form-control <?php $__errorArgs = ['short_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('short_description')); ?>"
                                                placeholder="Enter short description"><?php echo e(old('short_description')); ?></textarea>
                                            <?php $__errorArgs = ['short_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Front Image <span
                                                    class="required-star">*</span></label>
                                            <input type="file" name="front_image"
                                                class="form-control <?php $__errorArgs = ['front_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="blogs_front_image" onchange="validateAndPreviewFrontImage()">
                                            <?php $__errorArgs = ['front_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <img id="preview_front_image" src="#" alt="Preview" class="mt-2"
                                                style="max-width: 120px; height: auto; display: none;" />
                                                <label class="form-label mt-2 mb-1">Front Alt Text</label>
                                            <input type="text" name="front_image_alt"
                                                class="form-control mt-2 <?php $__errorArgs = ['front_image_alt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('front_image_alt')); ?>" placeholder="Front image alt text">
                                            <?php $__errorArgs = ['front_image_alt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Detail Image <span
                                                    class="required-star">*</span></label>
                                            <input type="file" name="detail_image"
                                                class="form-control <?php $__errorArgs = ['detail_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                id="blogs_detail_image" onchange="validateAndPreviewBannerImage()">
                                            <?php $__errorArgs = ['detail_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <img id="preview_detail_image" src="#" alt="Preview" class="mt-2"
                                                style="max-width: 120px; height: auto; display: none;" />
                                                <label class="form-label mt-2 mb-1">Detail Alt Text</label>
                                            <input type="text" name="detail_image_alt"
                                                class="form-control mt-2 <?php $__errorArgs = ['detail_image_alt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('detail_image_alt')); ?>" placeholder="Detail image alt text">
                                            <?php $__errorArgs = ['detail_image_alt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Status <span class="required-star">*</span></label>
                                            <select name="status"
                                                class="form-control <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                <option value="Active" <?php echo e(old('status') == 'Active' ? 'selected' : ''); ?>>
                                                    Active</option>
                                                <option value="In-Active"
                                                    <?php echo e(old('status') == 'In-Active' ? 'selected' : ''); ?>>Inactive</option>
                                            </select>
                                            <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="date" class="form-label">Date <span
                                                    class="required-star">*</span></label>
                                            <input type="date" id="date" name="date" class="form-control">
                                        </div>
                                        
                                        <div class="card mb-4 border">
                                            <div class="card-header bg-light"><strong>Detail Description</strong> <span
                                                    class="required-star">*</span></div>
                                            <div class="card-body">
                                                <textarea name="detail_description" class="form-control <?php $__errorArgs = ['detail_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    rows="4" id="detail_description"><?php echo e(old('detail_description')); ?></textarea>
                                                <?php $__errorArgs = ['detail_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        
                                        <div class="card mb-4 border">
                                            <div class="card-header bg-light"><strong>Conclusion</strong></div>
                                            <div class="card-body">
                                                <textarea name="conclusion" class="form-control <?php $__errorArgs = ['conclusion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="4"
                                                    id="conclusion"><?php echo e(old('conclusion')); ?></textarea>
                                                <?php $__errorArgs = ['conclusion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Cta Image</label>
                                            <input type="file" name="cta_image" id="cta_image"
                                                class="form-control <?php $__errorArgs = ['cta_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                onchange="validateAndPreviewCTAImage()">
                                            <?php $__errorArgs = ['cta_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <img id="preview_cta_image" src="#" alt="Preview" class="mt-2"
                                                style="max-width: 100%; height: auto; display: none;" />
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Cta Text</label>
                                            <input type="text" name="cta_text"
                                                class="form-control <?php $__errorArgs = ['cta_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                value="<?php echo e(old('cta_text')); ?>" placeholder="Enter cta text">
                                            <?php $__errorArgs = ['cta_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Meta Title</label>
                                            <input type="text" id="meta_title" name="meta_title" required
                                                class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="meta_description" class="form-label">Meta Description</label>
                                            <textarea id="meta_description" name="meta_description" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4 border">
                                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                        <strong>FAQ Title & Description</strong>
                                        <button type="button" id="addFaqBlock" class="btn btn-sm btn-success">+ Add
                                            More</button>
                                    </div>
                                    <div class="card-body" id="faqRepeater">
                                        
                                        <div class="faqGroup border rounded p-3 mb-3">
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" name="faq_title[]" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description </label>
                                                <textarea name="faq_description[]" class="form-control summernote" rows="4"></textarea>
                                            </div>
                                            <div class="text-end">
                                                <button type="button" class="btn btn-danger removeFaq">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary">Save Blogs</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="<?php echo e(asset('public/admin/js/blogs/blogs.js')); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#detail_description').summernote({
                placeholder: 'Enter Description here...',
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ]
            });
            $('#short_description').summernote({
                placeholder: 'Enter Description here...',
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ]
            });
            $('#conclusion').summernote({
                placeholder: 'Enter Conclusion here...',
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ]
            });
            $('#meta_description').summernote({
                placeholder: 'Enter Meta Description here...',
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ]
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Initialize Summernote
            $('.summernote').summernote({
                height: 200,
                placeholder: 'Enter Description here...'
            });

            // Add More
            $('#addFaqBlock').click(function() {
                let block = `
<div class="faqGroup border rounded p-3 mb-3">
<div class="mb-3">
<label class="form-label">Title </label>
<input type="text" name="faq_title[]" class="form-control" >
</div>
<div class="mb-3">
<label class="form-label">Description </label>
<textarea name="faq_description[]" class="form-control summernote" rows="4" ></textarea>
</div>
<div class="text-end">
<button type="button" class="btn btn-danger removeFaq">Remove</button>
</div>
</div>
            `;
                $('#faqRepeater').append(block);
                // Re-init summernote for new textareas
                $('.summernote').summernote({
                    height: 200,
                    placeholder: 'Enter Description here...'
                });
            });

            // Remove block
            $(document).on('click', '.removeFaq', function() {
                $(this).closest('.faqGroup').remove();
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pcs\resources\views/admin/blogs/create.blade.php ENDPATH**/ ?>
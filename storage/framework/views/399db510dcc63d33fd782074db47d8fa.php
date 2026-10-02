<!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="<?php echo e(route('dashboard')); ?>" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <span class="logo-text">PCS Global</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('dashboard')); ?>"><i class="icofont-home fs-5"></i> <span>Dashboard</span></a></li>

                   
                  
                    <li class="collapsed">
                        <a class="m-link <?php echo e(request()->routeIs('whychooseus') ? 'active' : ''); ?> <?php echo e(request()->routeIs('whychooseus.addWhychooseus') ? 'active' : ''); ?> <?php echo e(request()->routeIs('whychooseus.edit') ? 'active' : ''); ?>" data-bs-toggle="collapse" data-bs-target="#menu-whychooseus" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Why Choose Us</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-whychooseus">
                                <li><a class="ms-link <?php echo e(request()->routeIs('whychooseus') ? 'active' : ''); ?>" href="<?php echo e(route('whychooseus')); ?>">List</a></li>
                                <li><a class="ms-link <?php echo e(request()->routeIs('whychooseus.addWhychooseus') ? 'active' : ''); ?>" href="<?php echo e(route('whychooseus.addWhychooseus')); ?>">Add</a></li>
                  
                            </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link <?php echo e(request()->routeIs('ourteam') ? 'active' : ''); ?> <?php echo e(request()->routeIs('ourteam.addOurteam') ? 'active' : ''); ?> <?php echo e(request()->routeIs('ourteam.edit') ? 'active' : ''); ?>" data-bs-toggle="collapse" data-bs-target="#menu-ourteam" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Our Team</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-ourteam">
                                <li><a class="ms-link <?php echo e(request()->routeIs('ourteam') ? 'active' : ''); ?>" href="<?php echo e(route('ourteam')); ?>">List</a></li>
                                <li><a class="ms-link <?php echo e(request()->routeIs('ourteam.addOurteam') ? 'active' : ''); ?>" href="<?php echo e(route('ourteam.addOurteam')); ?>">Add</a></li>
                            </ul>
                    </li>

                   <li class="collapsed">
                        <a class="m-link <?php echo e(request()->routeIs('faq') ? 'active' : ''); ?> <?php echo e(request()->routeIs('faq.addfaq') ? 'active' : ''); ?> <?php echo e(request()->routeIs('faq.edit') ? 'active' : ''); ?>" data-bs-toggle="collapse" data-bs-target="#menu-faq" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Faq</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-faq">
                                <li><a class="ms-link <?php echo e(request()->routeIs('faq') ? 'active' : ''); ?>" href="<?php echo e(route('faq')); ?>">List</a></li>
                                <li><a class="ms-link <?php echo e(request()->routeIs('faq.addfaq') ? 'active' : ''); ?>" href="<?php echo e(route('faq.addfaq')); ?>">Add</a></li>
                  
                            </ul>
                    </li>
                    
                    <li class="collapsed">
                        <a class="m-link <?php echo e(request()->routeIs('blogs') ? 'active' : ''); ?> <?php echo e(request()->routeIs('blogs.addBlogs') ? 'active' : ''); ?> <?php echo e(request()->routeIs('blogs.edit') ? 'active' : ''); ?>" data-bs-toggle="collapse" data-bs-target="#menu-blogs" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Blogs</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                            <!-- Menu: Sub menu ul -->
                            <ul class="sub-menu collapse" id="menu-blogs">
                                <li><a class="ms-link <?php echo e(request()->routeIs('blogs') ? 'active' : ''); ?>" href="<?php echo e(route('blogs')); ?>">Blogs List</a></li>
                                <li><a class="ms-link <?php echo e(request()->routeIs('blogs.addBlogs') ? 'active' : ''); ?>" href="<?php echo e(route('blogs.addBlogs')); ?>">Blogs Add</a></li>
                  
                            </ul>
                    </li>

                    
                    <li class="collapsed">
                        <a class="m-link <?php echo e(request()->routeIs('ourexpert') ? 'active' : ''); ?>" href="<?php echo e(route('ourexpert')); ?>">
                            <i class="icofont-chart-flow fs-5"></i> <span>Our Expert</span></a>
                    </li>
                   
                    <li class="collapsed">
                        <a class="m-link <?php echo e(request()->routeIs('trustedpartner') ? 'active' : ''); ?>" href="<?php echo e(route('trustedpartner')); ?>">
                            <i class="icofont-chart-flow fs-5"></i> <span>Trusted Partner</span></a>
                    </li>
                </ul>
                <!-- Menu: menu collepce btn -->
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>                <?php /**PATH C:\xampp\htdocs\pcs\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>
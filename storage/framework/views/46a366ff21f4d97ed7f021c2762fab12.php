<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $meta_title ?? 'PCS-Global'; ?></title>
  <meta name="description" content="<?php echo $meta_description ?? ''; ?>">
  <meta name="base-url" content="<?php echo e(url('/')); ?>">
    <meta property="og:title" content="<?php echo e($meta_title ?? 'PCS-Global'); ?>">
    <meta property="og:description" content="<?php echo e($meta_description ?? ''); ?>">
    <meta property="og:image" content="<?php echo e($og_image ?? asset('public/front/images/fab_icon.png')); ?>" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="627">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:type" content="website">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>

  <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
  <link rel="icon" href="<?php echo e(asset('public/front/images/fab_icon.png')); ?>" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Sacramento&display=swap"
    rel="stylesheet">
  <!--favicon cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- scroll animation -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.css">

  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <!-- Fancybox CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('public/front/css/style.css')); ?>?v=<?php echo e(filemtime(public_path('front/css/style.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('public/front/css/responsive.css')); ?>?v=<?php echo e(filemtime(public_path('front/css/responsive.css'))); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/css/intlTelInput.css">

   <style>
    .offcanvas-body {
      padding: 0;
    }

    .menu-level {
      display: none;
      height: 100%;
      overflow-y: auto;
      transition: transform 0.3s ease;
    }

    .menu-level.active {
      display: block;
    }

    .menu-header {
      padding: 1rem;
      border-bottom: 1px solid #eee;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .menu-body ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .menu-body ul li {
      border-bottom: 1px solid #f0f0f0;
    }

    .menu-body ul li a {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem;
      color: #333;
      text-decoration: none;
    }

    .menu-body ul li a:hover {
      background: #f8f9fa;
    }

    .back-btn {
      display: flex;
      align-items: center;
      gap: 6px;
      background: none;
      border: none;
      font-size: 16px;
      color: #333;
    }
  </style>

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW87W9HP');</script>
<!-- End Google Tag Manager -->


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "PCS Global Group",
  "alternateName": "PCS Global Pvt Ltd.",
  "url": "https://pcsglobalgroup.com/",
  "logo": "https://pcsglobalgroup.com/public/front/images/logo.svg",
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "(+613) 9998 0494",
      "contactType": "customer service",
      "areaServed": "AU",
      "availableLanguage": "en"
    },
    {
      "@type": "ContactPoint",
      "telephone": "(+1) 347 801 8715",
      "contactType": "customer service",
      "areaServed": "US",
      "availableLanguage": "en"
    },
    {
      "@type": "ContactPoint",
      "telephone": "+44 113 4034334",
      "contactType": "customer service",
      "areaServed": "GB",
      "availableLanguage": "en"
    },
    {
      "@type": "ContactPoint",
      "telephone": "(+91) 796 826 0121",
      "contactType": "customer service",
      "areaServed": "IN",
      "availableLanguage": "en"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/PCSGlobalGroup/",
    "",
    "https://www.linkedin.com/company/pcs-global-group/"
  ]
}
</script>

  <style>
      nav{
          padding-top: 20px;
      }
  </style>
</head>

<body>

   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PW87W9HP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <header id="siteHeader">
    <div class="container">
      <nav>
        <div class="logo">
          <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('public/front/images/logo.svg')); ?>" loading="lazy" alt="logo" ></a>
        </div>


        <div class="menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="nav_links" id="navLinks">
          <ul class="nav_ul">
            <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>

            <li class="dropdown position-relative">
                           <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                aria-expanded="false">
                Services
                <svg class="ms-1" width="16" height="8" viewBox="0 0 18 10" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 1L9 9L1 1" stroke="#333" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </a>

                            <ul class="dropdown-menu mega-menu p-0 m-0">

                                <li class="mega-item">
                                    <a class="dropdown-item d-flex justify-content-between align-items-center"
                                       href="<?php echo e(route('white-label-accounting-services')); ?>">
                                        White Label Accounting Services
                                        <!--<span class="arrow">›</span>-->
                                    </a>

                                </li>
                                <li class="mega-item">
                                    <a class="dropdown-item d-flex justify-content-between align-items-center"
                                       href="<?php echo e(route('pcs.global.bookkeeping')); ?>">
                                        Accounting & Bookkeeping
                                        <!--<span class="arrow">›</span>-->
                                    </a>

                                </li>

                                <li class="mega-item">
                                    <a class="dropdown-item d-flex justify-content-between align-items-center"
                                       href="<?php echo e(route('taxation.services')); ?>">
                                        Taxation Services
                                        <!--<span class="arrow">›</span>-->
                                    </a>

                                </li>

                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('strata.management')); ?>">
                                        Strata Property Management
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('payroll.services')); ?>">
                                        Payroll Outsourcing Services
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('recruitment.services')); ?>">
                                        Recruitment Outsourcing Services
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo e(route('it.automation')); ?>">
                                        IT Automation Services
                                    </a>
                                </li>

</ul>
                        </li>

            <li><a href="<?php echo e(route('datasecurity')); ?>">Data Security</a></li>
            <li><a href="<?php echo e(route('blog')); ?>">Blogs</a></li>
            <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
          </ul>
        </div>

        <div class="nav_actions">
          <div class="dropdown country_select">
            <button class="country_select_btn dropdown-toggle" type="button" id="countrySelectBtn"
              data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
              <svg class="country_select_globe" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="9" stroke="#182653" stroke-width="1.5"/>
                <path d="M3 12H21" stroke="#182653" stroke-width="1.5"/>
                <path d="M12 3C14.5 5.5 15.75 8.5 15.75 12C15.75 15.5 14.5 18.5 12 21C9.5 18.5 8.25 15.5 8.25 12C8.25 8.5 9.5 5.5 12 3Z" stroke="#182653" stroke-width="1.5"/>
              </svg>
              <span>Global</span>
              <svg width="14" height="8" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 1L9 9L1 1" stroke="#182653" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
            <ul class="dropdown-menu country_select_menu" aria-labelledby="countrySelectBtn">
              <li>
                <a class="dropdown-item" href="https://australia.pcsglobalgroup.com" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo e(asset('public/front/images/contry-icon/australia-icon.png')); ?>" alt="Australia">
                  <span>Australia</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="https://uk.pcsglobalgroup.com" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo e(asset('public/front/images/contry-icon/uk-icon.png')); ?>" alt="UK">
                  <span>UK</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="https://us.pcsglobalgroup.com" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo e(asset('public/front/images/contry-icon/us-icon.png')); ?>" alt="US">
                  <span>US</span>
                </a>
              </li>
            </ul>
          </div>

          <a class="com_btn1 color-animated-button bubble-btn" href="<?php echo e(route('contact')); ?>" data-bs-toggle="modal"
            data-bs-target="#exampleModal"
            data-hover-colors='["#B074BC","#CF7C7C","#7496BC","#7B9993","#9F7159","#EAD1DC","#D7BDE2","#D7BDE2","#FFD1BA","#D1F2EB","#A4C8F0","#F7A1A1","#A0E6E0","#F9B7B7","#E6FFB3","#FFF4B3","#FFE4B5","#FFD4B8","#FFCBA4","#FFB399"]'>

            <!-- Bubble effect layers -->
            <span class="color-button__background"></span>
            <span class="color-button__bubble-container">
              <span class="color-button__bubble"></span>
            </span>

            <!-- Label and Icon -->
            <span class="color-button__label relative z-10 will-change-transform me-2">Request A
              Call</span>
            <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M2.51089 1L6.15002 1.13169C6.91653 1.15942 7.59676 1.64346 7.89053 2.3702L8.96656 5.03213C9.217 5.65159 9.1496 6.35837 8.78693 6.91634L7.40831 9.0375C8.22454 10.2096 10.4447 12.9558 12.7955 14.5633L14.5484 13.4845C14.9939 13.2103 15.5273 13.1289 16.0314 13.2581L19.5161 14.1517C20.4429 14.3894 21.0674 15.2782 20.9942 16.2552L20.7705 19.2385C20.6919 20.2854 19.8351 21.1069 18.818 20.9887C5.39245 19.4276 -2.48056 0.99997 2.51089 1Z"
                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </nav>
    </div>
  </header>

  <!------------------------------------------->

    <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

      <!-- LEVEL 1 -->
      <div class="menu-level active" id="menu-main">
        <div class="menu-body">
          <ul>
            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
            <li><a href="#" >Services <span class="next-menu" data-target="menu-services">&rsaquo;</span></a></li>
            <!--<li><a href="#" class="next-menu" data-target="menu-products">Products <span>&rsaquo;</span></a></li>-->
            <li><a href="<?php echo e(route('datasecurity')); ?>">Data Security</a></li>
            <li><a href="<?php echo e(route('blog')); ?>">Blogs</a></li>
            <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
            <li><a href="tel:+61399980494">📞 Call Us: (+613) 9998 0494</a></li>
          </ul>


             <div class="mt-4 text-center">
                  <a class="com_btn1 color-animated-button bubble-btn" href="<?php echo e(route('contact')); ?>"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="color-button__background"></span>
                <span class="color-button__bubble-container"><span class="color-button__bubble"></span></span>
                <span class="color-button__label relative z-10 me-2">Request A Call</span>
                <svg width="20" height="20" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M2.51 1L6.15 1.13C6.92 1.16 7.6 1.64 7.89 2.37L8.97 5.03C9.22 5.65 9.15 6.36 8.79 6.92L7.41 9.04C8.22 10.21 10.44 12.96 12.79 14.56L14.55 13.48C15 13.21 15.53 13.13 16.03 13.26L19.52 14.15C20.44 14.39 21.07 15.28 20.99 16.26L20.77 19.24C20.69 20.29 19.84 21.11 18.82 20.99C5.39 19.43 -2.48 1 2.51 1Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
             </div>

        </div>
      </div>

      <!-- LEVEL 2: SERVICES -->
      <div class="menu-level" id="menu-services">
        <div class="menu-header">
          <button class="back-btn" data-back="menu-main">&lsaquo; Back</button>
          <h6 class="m-0">Services</h6>
        </div>
        <div class="menu-body">
          <ul>
             <li><a href="<?php echo e(route('pcs.global.bookkeeping')); ?>">Accounting & Bookkeeping</a></li>
             <!-- <span class="next-menu" data-target="menu-accounting">&rsaquo;</span>-->
            <li><a href="<?php echo e(route('taxation.services')); ?>">Taxation Services</a></li>
            <!-- <span class="next-menu" data-target="menu-taxation">&rsaquo;</span>-->
             <li><a href="<?php echo e(route('strata.management')); ?>">Strata Property Management</a></li>
             <li><a href="<?php echo e(route('payroll.services')); ?>">Payroll Outsourcing Services</a></li>


          <li><a href="<?php echo e(route('recruitment.services')); ?>">Recruitment Outsourcing Services</a></li>
          <li><a href="<?php echo e(route('it.automation')); ?>">IT Automation Services</a></li>

          </ul>
        </div>
      </div>

    </div>
  </div>


 <script>
    // Next level navigation
    document.querySelectorAll('.next-menu').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const target = link.getAttribute('data-target');
        document.querySelectorAll('.menu-level').forEach(menu => menu.classList.remove('active'));
        document.getElementById(target).classList.add('active');
      });
    });

    // Back navigation
    document.querySelectorAll('.back-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const backTarget = btn.getAttribute('data-back');
        document.querySelectorAll('.menu-level').forEach(menu => menu.classList.remove('active'));
        document.getElementById(backTarget).classList.add('active');
      });
    });
  </script>

  <script>
    // Hide header on scroll down, show it on scroll up
    (function () {
      const header = document.getElementById('siteHeader');
      if (!header) return;

      let lastScrollY = window.scrollY;
      const hideThreshold = 80; // don't hide until scrolled past header height
      const delta = 5; // ignore tiny scroll jitters

      window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;

        if (Math.abs(currentScrollY - lastScrollY) < delta) return;

        if (currentScrollY > lastScrollY && currentScrollY > hideThreshold) {
          header.classList.add('header_hidden');
        } else {
          header.classList.remove('header_hidden');
        }

        lastScrollY = currentScrollY;
      }, { passive: true });
    })();
  </script>

  <script>
    // Open header dropdowns (Services, country select) on hover instead of click
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof bootstrap === 'undefined') return;

      document.querySelectorAll('header .dropdown').forEach(function (dropdown) {
        const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
        if (!toggle) return;

        const instance = bootstrap.Dropdown.getOrCreateInstance(toggle);
        let closeTimer;

        dropdown.addEventListener('mouseenter', function () {
          clearTimeout(closeTimer);
          instance.show();
        });

        dropdown.addEventListener('mouseleave', function () {
          closeTimer = setTimeout(function () {
            instance.hide();
          }, 150);
        });
      });
    });
  </script>
<?php /**PATH C:\xampp\htdocs\pcs\resources\views/layouts/frontheader.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{!! $meta_title ?? 'PCS-Global' !!}</title>
  <meta name="description" content="{!! $meta_description ?? '' !!}">
  <meta name="base-url" content="{{ url('/') }}">
      <!--<meta property="og:title" content="{!! $meta_title !!}">-->
    <meta property="og:title" content="{{ $meta_title ?? 'PCS-Global' }}">
    <meta property="og:description" content="{{ $meta_description }}">
    <meta property="og:image" content="{{ !empty($og_image) ? $og_image : asset('front/images/fab_icon.png') }}" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="627">
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="website">
    <meta name="robots" content="index, follow" />

         
  <link rel="canonical" href="{{ url()->current() }}" />
  <link rel="icon" href="{{asset('public/front/images/fab_icon.png')}}" type="image/x-icon">

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
  <link rel="stylesheet" href="{{asset('public/front/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/front/css/responsive.css')}}">
  
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



</head>

<body>
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PW87W9HP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 

  <header>
    <div class="container">
      <nav>
        <div class="logo">
          <a href="{{url('/')}}"><img src="{{asset('public/front/images/logo.svg')}}" loading="lazy" alt="logo" ></a>
        </div>


        <div class="menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="nav_links" id="navLinks">
          <ul class="nav_ul">
            <li><a href="{{route('about')}}">About Us</a></li>

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
                                       href="{{ route('pcs.global.bookkeeping') }}">
                                        Accounting & Bookkeeping
                                        <!--<span class="arrow">›</span>-->
                                    </a>
                          
                                </li>
                            
                                <li class="mega-item">
                                    <a class="dropdown-item d-flex justify-content-between align-items-center"
                                       href="{{ route('taxation.services') }}">
                                        Taxation Services
                                        <!--<span class="arrow">›</span>-->
                                    </a>
                            
                                </li>
                            
                                <li>
                                    <a class="dropdown-item" href="{{ route('strata.management') }}">
                                        Strata Property Management
                                    </a>
                                </li>
                            
                                <li>
                                    <a class="dropdown-item" href="{{ route('payroll.services') }}">
                                        Payroll Outsourcing Services
                                    </a>
                                </li>
                            
                                <li>
                                    <a class="dropdown-item" href="{{ route('recruitment.services') }}">
                                        Recruitment Outsourcing Services
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('it.automation') }}">
                                        IT Automation Services
                                    </a>
                                </li>

</ul>
                        </li>

            <li><a href="{{route('datasecurity')}}">Data Security</a></li>
            <li><a href="{{route('blog')}}">Blogs</a></li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
            <li>
              <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)" data-bs-toggle="modal"
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
            </li>
          </ul>
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
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="#" >Services <span class="next-menu" data-target="menu-services">&rsaquo;</span></a></li>
            <!--<li><a href="#" class="next-menu" data-target="menu-products">Products <span>&rsaquo;</span></a></li>-->
            <li><a href="{{route('datasecurity')}}">Data Security</a></li>
            <li><a href="{{route('blog')}}">Blogs</a></li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
           
          </ul>
          
          
             <div class="mt-4 text-center">
                  <a class="com_btn1 color-animated-button bubble-btn" href="javascript:void(0)"
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
             <li><a href="{{ route('pcs.global.bookkeeping') }}">Accounting & Bookkeeping</a></li>
             <!-- <span class="next-menu" data-target="menu-accounting">&rsaquo;</span>-->
            <li><a href="{{ route('taxation.services') }}">Taxation Services</a></li>
            <!-- <span class="next-menu" data-target="menu-taxation">&rsaquo;</span>-->
             <li><a href="{{ route('strata.management') }}">Strata Property Management</a></li>
             <li><a href="{{ route('payroll.services') }}">Payroll Outsourcing Services</a></li>
          
          
          <li><a href="{{ route('recruitment.services') }}">Recruitment Outsourcing Services</a></li>
          <li><a href="{{ route('it.automation') }}">IT Automation Services</a></li>
          
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



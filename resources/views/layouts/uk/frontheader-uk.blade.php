<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{!! $meta_title ?? 'PCS-Global' !!}</title>
      <meta name="description" content="{!! $meta_description ?? '' !!}">
      <meta name="base-url" content="{{ url('/') }}">
      <link rel="canonical" href="{{ url()->current() }}" />
      <!-- Favicon (ICO format, best for all browsers) -->
      <link rel="icon" href="{{asset('public/front/images/fab_icon.png')}}" type="image/x-icon">
      @php
      if (
      url()->current() == 'https://pcsglobalgroup.com/pcs-global-aus'
      || url()->current() == 'https://pcsglobalgroup.com/pcs-global-usa'
      || url()->current() == 'https://pcsglobalgroup.com/pcs-global-uk'
      || url()->current() == 'https://pcsglobalgroup.com/pcs-global-bookkeeping'
      ) {
      @endphp
      <meta name="robots" content="noindex">
      @php
      }
      @endphp
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
         .dropdown-menu
         {
         inset: 12px auto auto 0px !important;
         }
      </style>
      @verbatim
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
      @endverbatim
   </head>
   <body>
      <!--    <div id="loader">-->
      <!--       <div class="spinner-border" role="status">-->
      <!--<span class="visually-hidden">Loading...</span>-->
      <!--    </div>-->
      <header>
         <div class="container">
            <nav>
               <div class="logo">
                  <a href="/"><img src="{{asset('public/front/images/logo.svg')}}" alt="logo" loading="lazy"></a>
                  <!--<a href="{{route(name: 'front.home')}}"><img src="{{asset('public/front/images/logo.svg')}}" alt="logo" loading="lazy"></a>-->
               </div>
               <div class="menu-toggle" id="menuToggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                  aria-controls="offcanvasRight">
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
               <div class="nav_links" id="navLinks">
                  <ul class="nav_ul">
                     <!--<li>-->
                     <!--   <a href="{{ route('uk') }}"> Home </a>-->
                     <!--</li>-->
                     <li>
                        <a href="{{ route('uk.about') }}"> About</a>
                     </li>
                     <li>
                        <a href="{{ route('accounting.outsourcing.services') }}"> Accounting Services for Accountants </a>
                     </li>
                     <li>
                        <a href="{{ route('small.business.accounting.services') }}"> Accounting Services for SME's</a>
                     </li>
                     <!--<li class="dropdown position-relative">-->
                     <!--   <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"-->
                     <!--      aria-expanded="false">-->
                     <!--      Accounting Services-->
                     <!--      <svg class="ms-1" width="16" height="8" viewBox="0 0 18 10" fill="none" -->
                     <!--         xmlns="http://www.w3.org/2000/svg">-->
                     <!--         <path d="M17 1L9 9L1 1" stroke="#333" stroke-width="1.5" stroke-linecap="round" -->
                     <!--            stroke-linejoin="round" />-->
                     <!--      </svg>-->
                     <!--   </a>-->
                     <!--   <ul class="dropdown-menu mega-menu p-0 m-0">-->
                     <!--      <li class="mega-item">-->
                     <!--         <a class="dropdown-item d-flex justify-content-between align-items-center" -->
                     <!--            href="{{ route('accounting.outsourcing.services') }}">-->
                     <!--         For UK Accountancy Firms-->
                     <!--         </a>-->
                     <!--      </li>-->
                     <!--      <li class="mega-item">-->
                     <!--         <a class="dropdown-item d-flex justify-content-between align-items-center"-->
                     <!--            href="{{ route('small.business.accounting.services') }}">-->
                     <!--         For UK Small Businesses & SMEs-->
                     <!--         </a>-->
                     <!--      </li>-->
                     <!--   </ul>-->
                     <!--</li>-->
                     <li><a href="{{ route('outsource.tax.preparation.services') }}">Taxation Services</a></li>
                     <li><a href="{{ route('blog') }}">Blogs</a></li>
                     <li><a href="{{ route('contact') }}">Contact Us</a></li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
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
                     <li><a href="https://pcsglobalgroup.com/uk/">Home</a></li>
                     <li><a href="https://pcsglobalgroup.com/about">About Us</a></li>
                     <li><a href="#" >Accounting Services <span class="next-menu" data-target="menu-services">&rsaquo;</span></a></li>
                     <li><a href="https://pcsglobalgroup.com/uk/outsource-tax-preparation-services/">Taxation Services</a></li>
                     <li><a href="https://pcsglobalgroup.com/blog">Blogs</a></li>
                     <li><a href="https://pcsglobalgroup.com/contact-us">Contact Us</a></li>
                  </ul>
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
                     <li><a href="https://pcsglobalgroup.com/uk/accounting-outsourcing-services/">For UK Accountancy Firms</a></li>
                     <li><a href="https://pcsglobalgroup.com/uk/small-business-accounting-services/">For UK Small Businesses/SMEs</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <script>
         document.addEventListener("DOMContentLoaded", function() {

           // Force external links to open in new tab reliably
           document.querySelectorAll('.top-header a.external-link').forEach(link => {
             link.addEventListener('click', function(e) {
               e.preventDefault(); // Prevent any JS interception
               window.open(link.href, '_blank', 'noopener,noreferrer'); // Open in new tab
             });
           });

           // Force internal links (menu links) to navigate on first click
           document.querySelectorAll('nav a, .top-header a:not(.external-link)').forEach(link => {
             link.addEventListener('click', function(e) {
               e.preventDefault();
               window.location.href = this.href; // Full reload to ensure first-click navigation
             });
           });

         });
      </script>
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

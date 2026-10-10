{{-- <head> ka content (sab pages). Layout: layouts/app.blade.php --}}
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{!! $meta_title ?? 'PCS-Global' !!}</title>
  <meta name="description" content="{!! $meta_description ?? '' !!}">
  <meta name="base-url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ $meta_title ?? 'PCS-Global' }}">
    <meta property="og:description" content="{{ $meta_description ?? '' }}">
    <meta property="og:image" content="{{ $og_image ?? asset('public/front/images/fab_icon.png')}}" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="627">
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="website">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>

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
  {{-- Site ki CSS files (order zaroori hai): config/sites.php -> 'css' --}}
  @foreach ($site['css'] as $css)
  <link rel="stylesheet" href="{{ asset('public/front/css/' . $css) }}?v={{ filemtime(public_path('front/css/' . $css)) }}">
  @endforeach

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
  <style>
      nav{
          padding-top: 20px;
      }
  </style>
  @stack('styles')

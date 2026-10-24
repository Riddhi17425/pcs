{{-- Master layout (sab pages, sab countries).
     Page:  @extends('layouts.app')  +  @section('content') ... @endsection  (+ @push('styles') / @push('scripts'))
     Page se data: @extends('layouts.app', ['og_image' => ..., 'header_overlay' => true])
     $site = current country (config/sites.php), route middleware 'country:<key>' share karta hai.
     $meta_title / $meta_description controller se aate hain. --}}
@php($site ??= \App\Support\Site::get('india'))
<!DOCTYPE html>
<html lang="en">

<head>
@include('partials.head')
</head>

<body>

@include('partials.gtm-noscript')

@include('partials.header.' . $site['header'])

@include('partials.header-scripts')

@yield('content')

<x-footer
    :home-url="$site['footer']['home_url']"
    :quick-links="$site['footer']['quick_links']"
    :services="$site['footer']['services']"
    :address="$site['footer']['address']"
    :phones="$site['footer']['phones']"
    :badges="$site['footer']['badges']" />

@include('partials.whatsapp')

@include('partials.request-modal')

@include('partials.scripts')

@stack('scripts')

</body>

</html>

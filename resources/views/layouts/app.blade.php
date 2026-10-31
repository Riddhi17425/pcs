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

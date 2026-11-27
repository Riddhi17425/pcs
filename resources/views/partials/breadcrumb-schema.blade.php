{{-- BreadcrumbList schema for the AU / UK / US pages.
     Home page: Home.  Service pages: Home > <Service name + country>.
     The service name comes from the country's services list in config/sites.php (matched by route name). --}}
@php
    $bcShort     = ['australia' => 'Australia', 'uk' => 'UK', 'us' => 'US'];
    $bcHomeRoutes = ['australia.home', 'uk', 'us.home'];
    $bcKey       = $site['key'] ?? null;
    $bcRoute     = optional(request()->route())->getName();
    $bcItems     = null;

    if (isset($bcShort[$bcKey])) {
        $bcHome  = ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => rtrim($site['nav']['home'], '/')];

        if (in_array($bcRoute, $bcHomeRoutes, true)) {
            $bcItems = [$bcHome];
        } else {
            foreach ($site['services'] ?? [] as $bcService) {
                if ($bcService[1] === $bcRoute) {
                    $bcItems = [$bcHome, [
                        '@type' => 'ListItem', 'position' => 2,
                        'name' => $bcService[0] . ' ' . $bcShort[$bcKey],
                        'item' => rtrim(url()->current(), '/'),
                    ]];
                    break;
                }
            }
        }
    }
@endphp
@if ($bcItems)
<script type="application/ld+json">
{!! json_encode([
    '@@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $bcItems,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_PRETTY_PRINT) !!}
</script>
@endif

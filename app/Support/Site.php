<?php

namespace App\Support;

class Site
{
    public static function get(string $country): array
    {
        $site = config("sites.$country") ?? abort(404);
        $site['key'] = $country;

        if (isset($site['nav'])) {
            $site['nav'] = [
                'home' => route($site['nav']['home']),
                'about' => route($site['nav']['about']),
                'contact' => route($site['nav']['contact']),
                'services' => self::links($site['services']),
                'country' => $site['nav']['country'],
                'phone' => $site['phone'],
                'data_security' => route('datasecurity'),
                'blog' => route('blog'),
            ];
        }

        $footer = $site['footer'];
        $site['footer'] = [
            'home_url' => route($footer['home']),
            'quick_links' => self::links($footer['quick_links']),
            'services' => self::links($footer['services'] ?? $site['services']),
            'address' => $footer['address'],
            'phones' => array_map(function ($phone) {
                if (isset($phone['icon'])) {
                    $phone['icon'] = self::image($phone['icon']);
                }
                return $phone;
            }, $footer['phones']),
            'badges' => isset($footer['badges'])
                ? array_map(fn ($badge) => [self::image($badge[0]), $badge[1], $badge[2]], $footer['badges'])
                : null,
        ];

        return $site;
    }

    /**
     * Thank-you route name for the country the form was submitted from.
     * Uses the posted page_country, otherwise the referring page's URL prefix.
     */
    public static function thankYouRoute(\Illuminate\Http\Request $request): string
    {
        $map = [
            'au' => 'australia.thank.you', 'australia' => 'australia.thank.you',
            'gb' => 'uk.thank.you', 'uk' => 'uk.thank.you',
            'us' => 'us.thank.you',
        ];

        $country = strtolower((string) $request->input('page_country'));
        if (! isset($map[$country])) {
            $path    = (string) parse_url((string) $request->headers->get('referer'), PHP_URL_PATH);
            $country = strtolower(explode('/', trim($path, '/'))[0] ?? '');
        }

        return $map[$country] ?? 'thank.you';
    }

    private static function links(array $links): array
    {
        return array_map(function ($link) {
            $link[1] = route($link[1]);
            return $link;
        }, $links);
    }

    private static function image(string $path): string
    {
        return asset('public/front/images/' . $path);
    }
}

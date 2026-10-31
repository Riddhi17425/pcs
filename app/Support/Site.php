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

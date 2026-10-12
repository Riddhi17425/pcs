<?php

namespace App\Http\Middleware;

use App\Support\Site;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

/**
 * Route group ki country set karta hai: Route::middleware('country:australia')->...
 * - Views me $site (header, footer, menu, phone) share hota hai -> layouts/app.blade.php
 * - Controller me: $request->attributes->get('country')
 */
class SetCountry
{
    public function handle(Request $request, Closure $next, string $country): Response
    {
        $request->attributes->set('country', $country);
        View::share('site', Site::get($country));

        return $next($request);
    }
}

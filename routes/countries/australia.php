<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\CountryHomeController;

// Australia (/au/...). Middleware 'country:australia' -> views me $site = config('sites.australia')
Route::middleware('country:australia')->prefix('au')->group(function () {
    Route::get('/', [CountryHomeController::class, 'home'])->name('australia.home');
    Route::get('about', [AboutController::class, 'about'])->name('australia.about');
    Route::get('contact-us', [ContactController::class, 'contact'])->name('australia.contact');
    Route::get('strata-management', [ServiceController::class, 'strataManagement'])->name('australia.strata');
    Route::get('bookkeeping-accounting-services', [ServiceController::class, 'globalAus'])->name('pcs.global.aus');
    Route::get('taxation-services', [ServiceController::class, 'taxationaustralian'])->name('taxation-services-australian');
});

// Keep existing /aus/... links working while /au/... is the canonical prefix.
Route::get('aus/{path?}', fn ($path = '') => redirect(rtrim('au/' . $path, '/'), 301))->where('path', '.*');

// Purane /australia/... links (Google, bookmarks) naye /au/... par 301
Route::get('australia/{path?}', fn ($path = '') => redirect(rtrim('au/' . $path, '/'), 301))->where('path', '.*');

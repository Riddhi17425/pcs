<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\CountryHomeController;

// Australia (/aus/...). Middleware 'country:australia' -> views me $site = config('sites.australia')
Route::middleware('country:australia')->prefix('aus')->group(function () {
    Route::get('/', [CountryHomeController::class, 'home'])->name('australia.home');
    Route::get('about', [AboutController::class, 'about'])->name('australia.about');
    Route::get('contact-us', [ContactController::class, 'contact'])->name('australia.contact');
    Route::get('strata-management', [ServiceController::class, 'strataManagement'])->name('australia.strata');
    Route::get('bookkeeping-accounting-services', [ServiceController::class, 'globalAus'])->name('pcs.global.aus');
    Route::get('taxation-services', [ServiceController::class, 'taxationaustralian'])->name('taxation-services-australian');
});

// Purane /australia/... links (Google, bookmarks) naye /aus/... par 301
Route::get('australia/{path?}', fn ($path = '') => redirect(rtrim('aus/' . $path, '/'), 301))->where('path', '.*');

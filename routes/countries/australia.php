<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\CountryHomeController;

// Australia routes. Shared pages (home/about/contact/strata) ko ->defaults('country') se header/footer milta hai.
Route::get('aus', [CountryHomeController::class, 'home'])->defaults('country', 'australia')->name('australia.home');
Route::get('aus/about', [AboutController::class, 'about'])->defaults('country', 'australia')->name('australia.about');
Route::get('aus/contact-us', [ContactController::class, 'contact'])->defaults('country', 'australia')->name('australia.contact');
Route::get('aus/strata-management', [ServiceController::class, 'strataManagement'])->defaults('country', 'australia')->name('australia.strata');
Route::get('aus/bookkeeping-accounting-services', [ServiceController::class, 'globalAus'])->name('pcs.global.aus');
Route::get('aus/taxation-services', [ServiceController::class, 'taxationaustralian'])->name('taxation-services-australian');

// Purane /australia/... links (Google, bookmarks) naye /aus/... par 301
Route::get('australia/{path?}', fn ($path = '') => redirect(rtrim('aus/' . $path, '/'), 301))->where('path', '.*');

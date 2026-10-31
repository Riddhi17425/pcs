<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;use App\Http\Controllers\Web\CountryHomeController;

Route::middleware('country:australia')->prefix('au')->group(function () {
    Route::get('/', [CountryHomeController::class, 'home'])->name('australia.home');
    Route::get('about', [AboutController::class, 'about'])->name('australia.about');
    Route::get('contact-us', [ContactController::class, 'contact'])->name('australia.contact');
    Route::get('strata-management-services', [ServiceController::class, 'strataManagement'])->name('australia.strata');
    Route::get('accounting-outsourcing-services', [ServiceController::class, 'globalAus'])->name('pcs.global.aus');
     Route::get('tax-preparation-outsourcing-services', [ServiceController::class, 'taxationaustralian'])->name('taxation.services.australian');
});

Route::get('aus/{path?}', fn ($path = '') => redirect(rtrim('au/' . $path, '/'), 301))->where('path', '.*');

Route::get('australia/{path?}', fn ($path = '') => redirect(rtrim('au/' . $path, '/'), 301))->where('path', '.*');
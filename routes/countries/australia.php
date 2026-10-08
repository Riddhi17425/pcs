<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\CountryHomeController;

// Australia routes. Shared pages (home/about/contact/strata) ko ->defaults('country') se header/footer milta hai.
Route::get('australia', [CountryHomeController::class, 'home'])->defaults('country', 'australia')->name('australia.home');
Route::get('australia/about', [AboutController::class, 'about'])->defaults('country', 'australia')->name('australia.about');
Route::get('australia/contact-us', [ContactController::class, 'contact'])->defaults('country', 'australia')->name('australia.contact');
Route::get('australia/strata-management', [ServiceController::class, 'strataManagement'])->defaults('country', 'australia')->name('australia.strata');
Route::get('australia/bookkeeping-accounting-services', [ServiceController::class, 'globalAus'])->name('pcs.global.aus');
Route::get('australia/taxation-services', [ServiceController::class, 'taxationaustralian'])->name('taxation-services-australian');

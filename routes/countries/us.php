<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\CountryHomeController;

// US (/us/...). Middleware 'country:us' -> views me $site = config('sites.us')
Route::middleware('country:us')->prefix('us')->group(function () {
    Route::get('/', [CountryHomeController::class, 'home'])->name('us.home');
    Route::get('about', [AboutController::class, 'about'])->name('us.about');
    Route::get('contact-us', [ContactController::class, 'contact'])->name('us.contact');
    Route::get('bookkeeping-and-accounting-services', [ServiceController::class, 'globalUsa'])->name('pcs.global.usa');
    Route::get('taxation-services', [ServiceController::class, 'taxationservicesusa'])->name('taxation-services-usa');
});

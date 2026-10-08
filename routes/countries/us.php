<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\CountryHomeController;

// US routes. Shared pages (home/about/contact) ko ->defaults('country') se header/footer milta hai.
Route::get('us', [CountryHomeController::class, 'home'])->defaults('country', 'us')->name('us.home');
Route::get('us/about', [AboutController::class, 'about'])->defaults('country', 'us')->name('us.about');
Route::get('us/contact-us', [ContactController::class, 'contact'])->defaults('country', 'us')->name('us.contact');
Route::get('us/bookkeeping-and-accounting-services', [ServiceController::class, 'globalUsa'])->name('pcs.global.usa');
Route::get('us/taxation-services', [ServiceController::class, 'taxationservicesusa'])->name('taxation-services-usa');

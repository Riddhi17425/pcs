<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\BlogController;

// India / Global (main site, /). Middleware 'country:india' -> views me $site = config('sites.india')
Route::middleware('country:india')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('front.home');
    Route::get('/data-security', [HomeController::class, 'datasecurity'])->name('datasecurity');
    Route::get('/terms-and-condition', [HomeController::class, 'termsandcondition'])->name('terms-condition');
    Route::get('/privacy-policy', [HomeController::class, 'PrivacyPolicy'])->name('privacy-policy');
    Route::get('about', [AboutController::class, 'about'])->name('about');
    Route::get('contact-us', [ContactController::class, 'contact'])->name('contact');
    Route::post('contact-us/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('blog', [BlogController::class, 'blog'])->name('blog');
    Route::get('blogs/{url}', [BlogController::class, 'BlogsDetail'])->name('blogs.detail');
    Route::get('strata-management', [ServiceController::class, 'strataManagement'])->name('strata.management');
    Route::get('white-label-accounting-services', [ServiceController::class, 'whitelabelAccountingServices'])->name('white-label-accounting-services');


    // Route::get('test-taxation', [ServiceController::class, 'taxationservices'])->name('test.taxation'); // TEMP LINK

    // Route::get('bookkeeping-and-accounting-services', [ServiceController::class, 'accountingBookeeping'])->name('pcs.global.bookkeeping'); // OLD LINK
    Route::get('outsourced-accounting-bookkeeping-services', [ServiceController::class, 'accountingBookeeping'])->name('pcs.global.bookkeeping');

    // Route::get('taxation-services', [ServiceController::class, 'taxationservices'])->name('taxation.services'); // OLD LINK
    Route::get('outsourced-taxation-services', [ServiceController::class, 'taxationservices'])->name('taxation.services');

    // Route::get('payroll-services', [ServiceController::class, 'payrollService'])->name('payroll.services'); // OLD LINK
    Route::get('outsourced-payroll-services', [ServiceController::class, 'payrollService'])->name('payroll.services');

    Route::get('recruitment-services', [ServiceController::class, 'recruitmentService'])->name('recruitment.services');
    Route::get('payroll-outsourcing-services', [ServiceController::class, 'payrolloutsourcing'])->name('payroll-outsourcing-services');
    Route::get('thank-you', [ServiceController::class, 'thankyou'])->name('thank.you');
    Route::get('it-automation', [ServiceController::class, 'itautomation'])->name('it.automation');
    Route::post('/whatsaapinquiry', [HomeController::class, 'whatsaapinquiry'])->name('whatsaapinquiry');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\CountryHomeController;

// UK routes. Shared pages (home/contact) ko ->defaults('country') se header/footer milta hai.
// Pehle 'uk/' -> 'uk/about/' par 301 redirect tha; ab yahan UK home hai.
Route::get('uk', [CountryHomeController::class, 'home'])->defaults('country', 'uk')->name('uk');
Route::get('uk/contact-us', [ContactController::class, 'contact'])->defaults('country', 'uk')->name('uk.contact');
Route::get('uk/about/', [AboutController::class, 'ukAbout'])->name('uk.about');
Route::get('uk/accounting-outsourcing-services/', [ServiceController::class, 'accountingOutSourcingServices'])->name('accounting.outsourcing.services');
Route::get('uk/small-business-accounting-services/', [ServiceController::class, 'smallBusinessAccountingServices'])->name('small.business.accounting.services');
Route::get('uk/outsource-tax-preparation-services/', [ServiceController::class, 'outsourceTaxPreparationServices'])->name('outsource.tax.preparation.services');
Route::get('uk/taxation-services', [ServiceController::class, 'taxationservicesuk'])->name('taxation-services-uk');
// Route::get('uk/bookkeeping-accounting-services', [ServiceController::class, 'globalUk'])->name('pcs.global.uk');
Route::get('uk/bookkeeping-accounting-services', function () {
    return redirect('/uk/accounting-outsourcing-services/', 301);
})->name('pcs.global.uk');

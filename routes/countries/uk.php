<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\CountryHomeController;

// UK (/uk/...). Middleware 'country:uk' -> views me $site = config('sites.uk')
Route::middleware('country:uk')->prefix('uk')->group(function () {
    Route::get('/', [CountryHomeController::class, 'home'])->name('uk');
    Route::get('contact-us', [ContactController::class, 'contact'])->name('uk.contact');
    Route::get('about/', [AboutController::class, 'ukAbout'])->name('uk.about');
    Route::get('accounting-outsourcing-services/', [ServiceController::class, 'accountingOutSourcingServices'])->name('accounting.outsourcing.services');
    Route::get('small-business-accounting-services/', [ServiceController::class, 'smallBusinessAccountingServices'])->name('small.business.accounting.services');
    Route::get('outsource-tax-preparation-services/', [ServiceController::class, 'outsourceTaxPreparationServices'])->name('outsource.tax.preparation.services');
    Route::get('taxation-services', [ServiceController::class, 'taxationservicesuk'])->name('taxation-services-uk');
    // Route::get('bookkeeping-accounting-services', [ServiceController::class, 'globalUk'])->name('pcs.global.uk');
    Route::get('bookkeeping-accounting-services', function () {
        return redirect('/uk/accounting-outsourcing-services/', 301);
    })->name('pcs.global.uk');
});

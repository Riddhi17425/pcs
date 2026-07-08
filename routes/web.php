<?php

//=================Admin===============
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\OurExpertController;
use App\Http\Controllers\Admin\OurTeamController;
//use App\Http\Controllers\Admin\IndustriesController;
use App\Http\Controllers\Admin\TrustedPartnerController;
use App\Http\Controllers\Admin\WhyChooseUsController;
use App\Http\Controllers\Web\AboutController;

//=================WEB=================
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ServiceController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');
    return "Application cache cleared!";
});

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

Route::get('australia/bookkeeping-accounting-services', [ServiceController::class, 'globalAus'])->name('pcs.global.aus');
Route::get('us/bookkeeping-and-accounting-services', [ServiceController::class, 'globalUsa'])->name('pcs.global.usa');
// Route::get('uk/bookkeeping-accounting-services', [ServiceController::class, 'globalUk'])->name('pcs.global.uk');
Route::get('uk/bookkeeping-accounting-services', function () {
    return redirect('/uk/accounting-outsourcing-services/', 301);
})->name('pcs.global.uk');

Route::get('thank-you', [ServiceController::class, 'thankyou'])->name('thank.you');
Route::get('us/taxation-services', [ServiceController::class, 'taxationservicesusa'])->name('taxation-services-usa');
Route::get('australia/taxation-services', [ServiceController::class, 'taxationaustralian'])->name('taxation-services-australian');
Route::get('uk/taxation-services', [ServiceController::class, 'taxationservicesuk'])->name('taxation-services-uk');
Route::get('it-automation', [ServiceController::class, 'itautomation'])->name('it.automation');
Route::post('/whatsaapinquiry', [HomeController::class, 'whatsaapinquiry'])->name('whatsaapinquiry');

//UK DIRECTORY ROUTES
// Route::get('uk/', [ServiceController::class, 'ukLanding'])->name('uk');
Route::get('uk/', function () {
    return redirect('uk/about/', 301);
})->name('uk');
Route::get('uk/accounting-outsourcing-services/', [ServiceController::class, 'accountingOutSourcingServices'])->name('accounting.outsourcing.services');
Route::get('uk/small-business-accounting-services/', [ServiceController::class, 'smallBusinessAccountingServices'])->name('small.business.accounting.services');
Route::get('uk/outsource-tax-preparation-services/', [ServiceController::class, 'outsourceTaxPreparationServices'])->name('outsource.tax.preparation.services');
Route::get('uk/about/', [AboutController::class, 'ukAbout'])->name('uk.about');

Route::post('/request-store', [ServiceController::class, 'requestStore'])->name('request.store');
Route::post('consultant-store', [ServiceController::class, 'consultantstore'])->name('consultant.store');

Route::middleware('guest')->group(function () {
    Route::get('/register', [LoginController::class, 'register_page'])->name('register');
    Route::post('/register', [LoginController::class, 'register'])->name('register');
    Route::get('/login', [LoginController::class, 'login_page'])->name('login');
    Route::Post('/login', [LoginController::class, 'login'])->name('login');
});

// that is access for admin and super admin;
Route::middleware(['auth', 'role:admin,super_admin'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //Gallery
    Route::get('/trusted-partner', [TrustedPartnerController::class, 'index'])->name('trustedpartner');
    Route::post('/trusted_partner_store', [TrustedPartnerController::class, 'store'])->name('trustedpartner.store');
    Route::post('/trusted-partner/update/{id}', [TrustedPartnerController::class, 'update'])->name('trustedpartner.update');
    Route::get('/trusted-partner_get_data', [TrustedPartnerController::class, 'getData'])->name('trustedpartner_get_data');
    Route::get('/trusted-partner/edit/{id}', [TrustedPartnerController::class, 'edit'])->name('trustedpartner.edit');
    Route::delete('/trusted-partner/delete/{id}', [TrustedPartnerController::class, 'destroy'])->name('trustedpartner.delete');

    //Gallery
    Route::get('/our-expert', [OurExpertController::class, 'index'])->name('ourexpert');
    Route::post('/ourexpert_store', [OurExpertController::class, 'store'])->name('ourexpert.store');
    Route::post('/our-expert/update/{id}', [OurExpertController::class, 'update'])->name('ourexpert.update');
    Route::get('/ourexpert_get_data', [OurExpertController::class, 'getData'])->name('ourexpert_get_data');
    Route::get('/ourexpert/edit/{id}', [OurExpertController::class, 'edit'])->name('ourexpert.edit');
    Route::delete('/our-expert/delete/{id}', [OurExpertController::class, 'destroy'])->name('ourexpert.delete');

    //Why choose us
    Route::get('/why-choose-us', [WhyChooseUsController::class, 'index'])->name('whychooseus');
    Route::get('/add/why-choose-us', [WhyChooseUsController::class, 'create'])->name('whychooseus.addWhychooseus');
    Route::post('/why-choose-us/store', [WhyChooseUsController::class, "Store"])->name('whychooseus.store');
    Route::get("/get-why-choose-us-Data", [WhyChooseUsController::class, "getData"])->name('getWhychooseusData');
    Route::get('/edit/why-choose-us/{id}', [WhyChooseUsController::class, 'Edit'])->name('whychooseus.edit');
    Route::delete("/delete/why-choose-us/{id}", [WhyChooseUsController::class, 'Destory'])->name('whychooseus.delete');
    Route::put('/update/why-choose-us/{id}', [WhyChooseUsController::class, 'Update'])->name('whychooseus.update');

    //Our Team
    Route::get('/our-team', [OurTeamController::class, 'index'])->name('ourteam');
    Route::get('/add/our-team', [OurTeamController::class, 'create'])->name('ourteam.addOurteam');
    Route::post('/our-team/store', [OurTeamController::class, "Store"])->name('ourteam.store');
    Route::get("/get-our-team-Data", [OurTeamController::class, "getData"])->name('getOurteamData');
    Route::get('/edit/our-team/{id}', [OurTeamController::class, 'Edit'])->name('ourteam.edit');
    Route::delete("/delete/our-team/{id}", [OurTeamController::class, 'Destory'])->name('ourteam.delete');
    Route::put('/update/our-team/{id}', [OurTeamController::class, 'Update'])->name('ourteam.update');

    //faq
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::get('/add/faq', [FaqController::class, 'create'])->name('faq.addfaq');
    Route::post('/faq/store', [FaqController::class, "Store"])->name('faq.store');
    Route::get("/get-faq-Data", [FaqController::class, "getData"])->name('getFaqData');
    Route::get('/edit/faq/{id}', [FaqController::class, 'Edit'])->name('faq.edit');
    Route::delete("/delete/faq/{id}", [FaqController::class, 'Destory'])->name('faq.delete');
    Route::put('/update/faq/{id}', [FaqController::class, 'Update'])->name('faq.update');

    //Blogs
    Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
    Route::get('/add/blogs', [BlogsController::class, 'createBlogs'])->name('blogs.addBlogs');
    Route::post('/blogs/store', [BlogsController::class, "BlogsStore"])->name('blogs.store');
    Route::get("/getBlogsData", [BlogsController::class, "getBlogsData"])->name('getBlogsData');
    Route::get('/edit/blogs/{id}', [BlogsController::class, 'EditBlogs'])->name('blogs.edit');
    Route::delete("/delete/blogs/{id}", [BlogsController::class, 'DestoryBlogs'])->name('blogs.delete');
    Route::put('/update/blogs/{id}', [BlogsController::class, 'UpdateBlogs'])->name('blogs.update');

});

// that is only for front-user
route::middleware(['auth', 'role:sales'])->group(function () {
    route::get('/front-dashboard', function () {
        return 'Front-user';
    });

});

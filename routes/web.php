<?php


use App\Helper\RouteHelper;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\AboutusController;
use App\Http\Controllers\front\ClientsController;
use App\Http\Controllers\front\ContactusController;
use App\Http\Controllers\front\NewsController;
use App\Http\Controllers\front\PrivacyController;
use App\Http\Controllers\front\ServicesController;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
    
        Route::get('/', [HomeController::class,'index'])->name('home');
        Route::get('/aboutus', [AboutusController::class,'index'])->name('aboutus');
        Route::get('/clients', [ClientsController::class,'index'])->name('clients');
        Route::get('/contactus', [ContactusController::class,'index'])->name('contact_us');
        Route::get('/news', [NewsController::class,'index'])->name('news');
        Route::get('/privacy-policy', [PrivacyController::class,'index'])->name('privacy_policy');
        Route::get('/services', [ServicesController::class,'index'])->name('services');
        Route::get('/facility-inner/{facility}/{title?}', [ServicesController::class,'facility_inner'])->name('facility-inner');
        Route::get('/services-inner/{service}/{title?}', [ServicesController::class,'services_inner'])->name('services-inner');
        Route::get('/news-inner/{article}/{title?}', [NewsController::class,'news_inner'])->name('news-inner');
        Route::get('/404', [NewsController::class,'index'])->name('404');
        Route::post('/news-inner', [ServicesController::class,'store'])->name('help.store');
        Route::post('/contactus', [ContactusController::class,'contact_us'])->name('contact_us.store');
        Route::get('/search', [NewsController::class,'search'])->name('search');
});

RouteHelper::includeRouteFiles(__DIR__.'/admin');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


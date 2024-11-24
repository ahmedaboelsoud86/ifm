<?php


use App\Http\Controllers\Admin\ServicesController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('services', ServicesController::class)->except(['show']);
});

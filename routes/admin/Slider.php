<?php


use App\Http\Controllers\Admin\SliderController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('sliders', SliderController::class)->except(['show']);
});

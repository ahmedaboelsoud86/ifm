<?php


use App\Http\Controllers\Admin\FacilitieController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('facilities', FacilitieController::class)->except(['show']);

});

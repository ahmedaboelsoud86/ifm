<?php


use App\Http\Controllers\Admin\AwardController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('awards', AwardController::class)->except(['show','edit','update']);

});

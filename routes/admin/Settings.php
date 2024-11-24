<?php


use App\Http\Controllers\Admin\SettingsController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('settings', SettingsController::class)->except(['show']);

});

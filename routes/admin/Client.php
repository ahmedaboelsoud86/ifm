<?php


use App\Http\Controllers\Admin\ClientController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('clients', ClientController::class)->except(['show','edit','update']);

});

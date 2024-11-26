<?php


use App\Http\Controllers\Admin\UserController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {
    Route::resource('users', UserController::class)->except(['show','edit','update']);
});

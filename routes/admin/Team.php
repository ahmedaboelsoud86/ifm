<?php


use App\Http\Controllers\Admin\TeamController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('teams', TeamController::class)->except(['show']);
});

<?php


use App\Http\Controllers\Admin\AboutController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

  Route::resource('abouts', AboutController::class)->except(['show']);

});





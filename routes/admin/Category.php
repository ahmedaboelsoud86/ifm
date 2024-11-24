<?php


use App\Http\Controllers\Admin\CategoryController;


// Category
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('categories', CategoryController::class)->except(['show']);

});

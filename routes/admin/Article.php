<?php


use App\Http\Controllers\Admin\ArticleController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('articles', ArticleController::class)->except(['show']);

});

<?php


use App\Http\Controllers\Admin\CategoryServices​Controller;


// Category
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {
    Route::resource('category_services', CategoryServices​Controller::class)->except(['show']);
});

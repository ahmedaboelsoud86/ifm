<?php


use App\Http\Controllers\Admin\CategoryServices​Controller;


// Category
Route::prefix('admin/')->group(function () {
    Route::resource('category_services', CategoryServices​Controller::class)->except(['show']);
});

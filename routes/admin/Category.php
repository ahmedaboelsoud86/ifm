<?php


use App\Http\Controllers\Admin\CategoryController;


// Category
Route::prefix('admin/')->group(function () {

Route::resource('categories', CategoryController::class)->except(['show']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

<?php


use App\Http\Controllers\Admin\AboutController;


// Products
Route::prefix('admin/')->group(function () {

Route::resource('abouts', AboutController::class)->except(['show']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

<?php


use App\Http\Controllers\Admin\ServicesController;


// Products
Route::prefix('admin/')->group(function () {

Route::resource('services', ServicesController::class)->except(['show']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

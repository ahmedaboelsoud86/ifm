<?php


use App\Http\Controllers\Admin\SliderController;


// Products
Route::prefix('admin/')->group(function () {

Route::resource('sliders', SliderController::class)->except(['show']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

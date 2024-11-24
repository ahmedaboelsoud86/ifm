<?php


use App\Http\Controllers\Admin\FacilitieController;


// Products
Route::prefix('admin/')->group(function () {

Route::resource('facilities', FacilitieController::class)->except(['show']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

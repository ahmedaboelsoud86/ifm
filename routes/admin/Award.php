<?php


use App\Http\Controllers\Admin\AwardController;


// Products
Route::prefix('admin/')->group(function () {

Route::resource('awards', AwardController::class)->except(['show','edit','update']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

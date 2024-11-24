<?php


use App\Http\Controllers\Admin\ClientController;


// Products
Route::prefix('admin/')->group(function () {

Route::resource('clients', ClientController::class)->except(['show','edit','update']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

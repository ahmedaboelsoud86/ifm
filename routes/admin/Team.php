<?php


use App\Http\Controllers\Admin\TeamController;


// Products
Route::prefix('admin/')->group(function () {

Route::resource('teams', TeamController::class)->except(['show']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

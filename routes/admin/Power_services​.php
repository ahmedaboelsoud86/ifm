<?php


use App\Http\Controllers\Admin\PowerServices​Controller;


// Products
Route::prefix('admin/')->group(function () {

Route::resource('power_services', PowerServices​Controller::class)->except(['show']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

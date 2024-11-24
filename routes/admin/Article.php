<?php


use App\Http\Controllers\Admin\ArticleController;


// Products
Route::prefix('admin/')->group(function () {

Route::resource('articles', ArticleController::class)->except(['show']);

// Route::post('iamges/destroy_image/{image_id}', [ProductController::class, 'destroy_image'])->name('product.image.destroy');
});

<?php


use App\Http\Controllers\Admin\PrivacypolicyController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {
    Route::resource('privacies', PrivacypolicyController::class)->except(['show']);
});

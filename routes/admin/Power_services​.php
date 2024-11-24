<?php


use App\Http\Controllers\Admin\PowerServices​Controller;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

    Route::resource('power_services', PowerServices​Controller::class)->except(['show']);

});

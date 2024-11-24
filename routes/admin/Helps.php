<?php


use App\Http\Controllers\Admin\HelpController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

  Route::resource('helps', HelpController::class)->except(['create','store','edit','update']);

});





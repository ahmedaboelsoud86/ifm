<?php


use App\Http\Controllers\Admin\MessageController;


// Products
Route::group(['prefix' => 'admin/','middleware' => ['auth']], function() {

  Route::resource('messages', MessageController::class)->except(['create','store','edit','update']);

});





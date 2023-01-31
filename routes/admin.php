<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');

    Route::resource('shipment', 'Admin\ShipmentController');
    Route::get('shipment/history/{id}', "Admin\AdminShipmentHistoryController@history")->name('history');
});

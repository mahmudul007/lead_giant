<?php

use App\Http\Controllers\Backend\DashboardController;

//===== General Routes =====//
Route::redirect('/', '/user/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::group(['middleware' => 'role:admin'], function () {

       //============mentors route===============//
       Route::resource('services', 'BrandsController');

       Route::get('service-publish/{id}', ['uses' => 'BrandsController@publish', 'as' => 'services.publish']);

       Route::resource('properties', 'BlogsController');
       Route::get('property-publish/{id}', ['uses' => 'BlogsController@publish', 'as' => 'properties.publish']);
       Route::get('property-single-image-delete/{id}', ['uses' => 'BlogsController@singleImageDelete', 'as' => 'properties.singleimage.delete']);

       Route::resource('contacts', 'ContactReqController');
       Route::get('contact-complete/{id}', ['uses' => 'ContactReqController@complete', 'as' => 'contact.complete']);




});

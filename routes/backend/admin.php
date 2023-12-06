<?php

use App\Http\Controllers\Backend\DashboardController;

//===== General Routes =====//
Route::redirect('/', '/user/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::group(['middleware' => 'role:admin'], function () {

       //============mentors route===============//
       Route::resource('brands', 'BrandsController');

       Route::get('brand-publish/{id}', ['uses' => 'BrandsController@publish', 'as' => 'brands.publish']);

       Route::resource('blogs', 'BlogsController');
       Route::get('blog-publish/{id}', ['uses' => 'BlogsController@publish', 'as' => 'blogs.publish']);
       Route::get('blog-single-image-delete/{id}', ['uses' => 'BlogsController@singleImageDelete', 'as' => 'blogs.singleimage.delete']);

       Route::resource('contacts', 'ContactReqController');
       Route::get('contact-complete/{id}', ['uses' => 'ContactReqController@complete', 'as' => 'contact.complete']);




});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ContactReqController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__ . '/frontend/');
});

Route::group(['namespace' => 'Backend', 'prefix' => 'user', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__ . '/backend/');
});





Route::get('blog/{slug?}', 'BlogController@show')->name('blog.show');
Route::get('blogs/', 'BlogController@index')->name('blog.index');

Route::get('works/', 'WorkController@index')->name('work.index');

Route::get('service/{slug?}', 'brandsController@show')->name('service.show');
Route::get('brands/', 'brandsController@index')->name('service.index');


Route::post('contact/request/', [ContactReqController::class,'contact_req'])->name('contact.request');



Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
});
Auth::routes();


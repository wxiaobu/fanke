<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller('admin/index','Admin\IndexController');
Route::controller('admin/login','Admin\LoginController');
Route::controller('admin/order','Admin\OrderController');
Route::controller('admin/product','Admin\ProductController');
Route::controller('admin/user','Admin\UserController');
Route::controller('admin/system','Admin\SystemController');
Route::controller('admin/advert','Admin\AdvertController');

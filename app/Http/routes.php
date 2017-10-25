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

// 后台主页隐士路由
Route::controller('admin/index','Admin\IndexController');
// 后台订单隐士路由
Route::controller('admin/order','Admin\OrderController');
// 后台商品隐士路由
Route::controller('admin/product','Admin\ProductController');
// 后台用户隐士路由
Route::controller('admin/user','Admin\UserController');
// 后台系统设置隐士路由
Route::controller('admin/system','Admin\SystemController');
// 后台广告管理隐士路由
Route::controller('admin/advert','Admin\AdvertController');


// 后台登陆隐士路由
Route::controller('admin/login','Admin\LoginController');
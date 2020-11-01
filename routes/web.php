<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'Shop@getIndex'
]);

Route::get('danh-sach-san-pham',[
	'as'=>'loaisanpham',
	'uses'=>'Shop@getProductType'
]);

Route::get('chi-tiet-san-pham',[
	'as'=>'chitietsanpham',
	'uses'=>'Shop@getDetail'
]);

// Route::get('lien-he',[
// 	'as'=>'lienhe',
// 	'uses'=>'Shop@getLienHe'
// ]);

// Route::get('gioi-thieu',[
// 	'as'=>'gioithieu',
// 	'uses'=>'Shop@getGioiThieu'
// ]);

// Route::get('add-to-cart/{id}',[
// 	'as'=>'themgiohang',
// 	'uses'=>'Shop@getAddtoCart'
// ]);

// Route::get('del-cart/{id}',[
// 	'as'=>'xoagiohang',
// 	'uses'=>'Shop@getDelItemCart'
// ]);
// Route::get('dat-hang',[
// 	'as'=>'dathang',
// 	'uses'=>'Shop@getCheckout'
// ]);

// Route::post('dat-hang',[
// 	'as'=>'dathang',
// 	'uses'=>'Shop@postCheckout'
// ]);

// Route::get('dang-nhap',[
// 	'as'=>'login',
// 	'uses'=>'Shop@getLogin'
// ]);
// Route::post('dang-nhap',[
// 	'as'=>'login',
// 	'uses'=>'Shop@postLogin'
// ]);

// Route::get('dang-ki',[
// 	'as'=>'signin',
// 	'uses'=>'Shop@getSignin'
// ]);

// Route::post('dang-ki',[
// 	'as'=>'signin',
// 	'uses'=>'Shop@postSignin'
// ]);

// Route::get('dang-xuat',[
// 	'as'=>'logout',
// 	'uses'=>'Shop@postLogout'
// ]);



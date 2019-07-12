<?php

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


// Route::get('/', function () {
//     return view('welcome');
// });



//前台
Route::get('/','Index\IndexController@index');

//前台登入注册
Route::prefix('/login')->group(function(){
	Route::get('reg','Login\LoginController@reg'); //注册
	Route::any('regdo', 'Login\LoginController@regdo'); //注册执行
	Route::get('login','Login\LoginController@login'); //登入
	Route::post('logindo','Login\LoginController@logindo'); //登入执行
});

//项目
Route::prefix('/index')->group(function(){
	Route::get('proinfo','Index\IndexController@proinfo'); //商品详情
	Route::get('cartadd','Index\IndexController@cartadd');//加入购物车
	Route::get('cart','Index\IndexController@cart');//购物车
	Route::get('cartDel','Index\IndexController@cartDel'); //删除购物车单条数据
	Route::get('changeBuyNmber','Index\IndexController@changeBuyNmber'); //更改购买数量
	Route::get('getSubTotal','Index\IndexController@getSubTotal'); //获取小计
	Route::get('newprice','Index\IndexController@newprice'); //购买件数得到的价格
	Route::get('checkout/{cart_id}','Index\IndexController@checkout'); //支付页面
	Route::get('pays','Index\AliPayController@pay'); //支付成功页面同步
	Route::get('notify_url','Index\AliPayController@aliNotify'); //支付成功页面异步
});


//后台
Route::prefix('/admin')->group(function(){
	Route::get('index','AdminController@index');
});

//商品
Route::prefix('/goods')->group(function(){
	Route::get('add','GoodsController@create');
	Route::post('add_do','GoodsController@store');
	Route::get('list','GoodsController@index');
	Route::get('edit/{id}','GoodsController@edit');
	Route::post('update','GoodsController@update');
	Route::get('del/{id}','GoodsController@destroy');
});


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'StaticPagesController@home')->name('home');//首页
Route::get('/help', 'StaticPagesController@help')->name('help');//帮助页
Route::get('/about', 'StaticPagesController@about')->name('about');//关于页

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');//用户

//登录注册
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

//注册邮箱验证
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');//邮箱验证

//密码重设
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');//显示重置密码的邮箱发送页面
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');//邮箱发送重设链接
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');//密码更新页面
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');//执行密码更新操作

//微博路由
Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);//资源路由

//粉丝列表
Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');//显示用户的关注人列表
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');//显示用户的粉丝列表

//用户关注
Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');//关注用户
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');//取消关注用户
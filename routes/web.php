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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

/*「http://XXXXXX.jp/XXX というアクセスが来たときに、
AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください*/

Route::group(['prefix' => 'admin'], function() {
    Route::get('XXX',
'AAAController@bbb');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('admin/profile/create',
    'ProfileController@add');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('admin/profile/edit',
    'ProfileController@adit');
});

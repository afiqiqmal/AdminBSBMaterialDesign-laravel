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

Auth::routes();

Route::group(['middleware'=>'guest'],function(){
	Route::get('/',['as'=>'dashboard','uses'=>'DashboardController@index']);
	Route::get('/typography',['as'=>'typography','uses'=>'TypographyController@index']);
	Route::get('/helper',['as'=>'helper','uses'=>'HelperController@index']);
	Route::get('/widget',['as'=>'widget','uses'=>'WidgetController@index']);
	Route::get('/table',['as'=>'table','uses'=>'TableController@index']);
	Route::get('/media',['as'=>'media','uses'=>'MediaController@index']);
	Route::get('/chart',['as'=>'chart','uses'=>'ChartController@index']);
});

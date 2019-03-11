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
Route::get('/wellcome/morning','TestController@wellcome');
Route::get('/wellcome/afternoon','TestController@wellcome');
Route::get('/wellcome/evening','TestController@wellcome');
Route::get('/wellcome/hihi','TestController2@test');
// Route::get('/wellcome/evening','TestController@wellcome');
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Backyard'
    ], function () {
    Route::get('/product/detail','ProductController@detail');
    Route::get('/product/list','ProductController@list');
    
});


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
   // return view('welcome');
});

//Index 路由
//include('index.php');
Route::get('/get_index','Index@index');
Route::get('/get_tarfunciton','Index@get_tarfunciton');
Route::get('/get_MemberHeadText','Index@get_MemberHeadText');
Route::get('/get_OnlineIndex','Index@get_OnlineIndex');

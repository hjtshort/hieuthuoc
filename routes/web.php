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
Route::get('dashboard', function () {
    return view('modules.dashboard');
});
Route::get('create',function(){
    return view('modules.themthuoc');
});
Route::get('login',function(){
    return view('login');
});
Route::get('check',function(){
    return view('check');
});

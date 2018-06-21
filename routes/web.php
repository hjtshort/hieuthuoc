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
    return view('login');
})->name('/');


Route::post('login',['as'=>'plogin','uses'=>'Thuoc@plogin']);

Route::group(['middleware' => ['checkUsers']], function () {
    Route::get('list',['as'=>'list','uses'=>'Thuoc@index']);

    Route::get('insert',['as'=>'ginsert','uses'=>'Thuoc@ginsert']);
    Route::post('insert',['as'=>'pinsert','uses'=>'Thuoc@pinsert']);

    Route::get('update/{id}',['as'=>'gupdate','uses'=>'Thuoc@gupdate']);
    Route::post('update/{id}',['as'=>'pupdate','uses'=>'Thuoc@pupdate']);

    Route::post('remove',['as'=>'remove','uses'=>'Thuoc@remove']);

    Route::get('logout',['as'=>'logout','uses'=>'Thuoc@logout']);
});
Route::any('{all}', function(){
    return redirect()->route('list');
})->where('all', '.*');

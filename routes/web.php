<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nilaiController;
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

/*Route::get('/', function () {
    return view('layout1.v_template');
});
*/
/*Route::get('/nilai', function () {
    return view('nilai');
});*/

/*Route::get('/nilaihasil', function () {
    return view('nilaihasil');
});*/
Route::get('/', 'App\Http\Controllers\nilaiController@index');
Route::get('/input', 'App\Http\Controllers\nilaiController@input');
//Route::get('/', [nilaiController::class, '']);
/*Route::get('/output', 'App\Http\Controllers\nilaiController@output');
Route::get('/add', [nilaiController::class, 'add']);
/*Route::get('/nilai', 'nilaiController@index');*/
Route::post('/add', [nilaiController::class, 'add']);
Route::get('/edit/{id}', 'App\Http\Controllers\nilaiController@edit');
Route::put('/edit/{id}', 'App\Http\Controllers\nilaiController@update');
Route::delete('/delete/{id}', 'App\Http\Controllers\nilaiController@destroy');
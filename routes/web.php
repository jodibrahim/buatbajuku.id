<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\ImageUploadController;
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

Route::get('tentang-kami', function () {
    return view('tentang_kami');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesanans/{id}', 'pesanansController@index');
Route::post('pesanans/{id}', 'pesanansController@pesanans');
Route::get('check-out', 'pesanansController@check_out');
Route::delete('check-out/{id}', 'pesanansController@delete');

Route::get('konfirmasi-check-out', 'pesanansController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');
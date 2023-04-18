<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Berita\BeritaController;
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
Route::group(['namespace'=>'App\Http\Controllers\Frontend'], function()
{
    Route::resource('/home','HomeController');
});
Route::group(['namespace'=>'App\Http\Controllers\Berita'], function()
{
    Route::resource('/berita','BeritaController');
});
Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers\Edukasi'], function()
{
    Route::resource('/edukasi','edukasiController');
});

Route::group(['namespace'=>'App\Http\Controllers\Berita'], function()
{
    Route::resource('/berita','beritaController');
});

Route::group(['namespace'=>'App\Http\Controllers\Agenda'], function()
{
    Route::resource('/agenda','agendaController');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllers;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\PengaturanController; 
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

// Route::get('/', function () {
//     return view('layout\master');
// });
//Route::get('/', [HomeController::class,"index"]);
Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['admin']], function() {
        Route::get('/laporan', 'LaporanController@index');
        Route::get('/print', 'LaporanController@print');
        Route::post('/inputDatastore', 'InputController@store');
        Route::get('/edit/{id}','LaporanController@edit');
        Route::post('/hapus/{id}','LaporanController@destroy');
        Route::post('/update','LaporanController@update');
        Route::get('/kabupaten','LaporanController@dataKabupaten');
    });
    Route::get('/', 'HomeController@index');
    Route::get('/inputData', 'InputController@input');//user
    Route::get('/pengaturan', 'PengaturanController@pengaturan');//user

    
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
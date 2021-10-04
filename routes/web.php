<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataYatimController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(array('prefix'=>'data_yatim'), function(){
    Route::get('/', [DataYatimController::class, 'index'])->name('data_yatim');
    Route::post('/create',[DataYatimController::class, 'create'])->name('data_yatimCreate');
    Route::post('/store', [DataYatimController::class, 'store'])->name('data_yatimStore');
    Route::post('/show', [DataYatimController::class, 'show'])->name('data_yatimShow');
    Route::post('/destroy', [DataYatimController::class, 'destroy'])->name('data_yatimDestroy');
    Route::post('/{edit}/{id}',  [DataYatimController::class, 'create'])->name('data_yatimEdit');

  });
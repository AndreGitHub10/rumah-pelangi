<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
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

// Route::get('/', function () {
//     return view('admin.layouts.app');
// });

Auth::routes();
Route::prefix('/')->group(function(){
	Route::get('/', [DashboardController::class, 'index'])->name('home');
});


Route::prefix('donatur')->group(function(){
	Route::get('/', [DonaturController::class, 'index'])->name('donatur');
});

Route::prefix('keuangan')->group(function(){
	Route::prefix('pemasukan')->group(function(){
		Route::get('/', [PemasukanController::class, 'index'])->name('pemasukan');
	});
	Route::prefix('pengeluaran')->group(function(){
		Route::get('/', [PengeluaranController::class, 'index'])->name('pengeluaran');
	});
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(array('prefix'=>'data_yatim'), function(){
    Route::get('/', [DataYatimController::class, 'index'])->name('data_yatim');
    Route::get('/create',[DataYatimController::class, 'create'])->name('data_yatimCreate');
    Route::post('/store', [DataYatimController::class, 'store'])->name('data_yatimStore');
    Route::post('/show', [DataYatimController::class, 'show'])->name('data_yatimShow');
    Route::post('/destroy', [DataYatimController::class, 'destroy'])->name('data_yatimDestroy');
    Route::post('/{edit}/{id}',  [DataYatimController::class, 'create'])->name('data_yatimEdit');

  });


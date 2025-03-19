<?php

use App\Http\Controllers\DetailServicesController;
use App\Http\Controllers\JnsKendaraanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('detailServices.test');
});

//Route jnskendaraan
Route::get('/jnskendaraan', [JnsKendaraanController::class, 'index'])->name('jnsKendaraan.index');
Route::get('/jnskendaraan/add', [JnsKendaraanController::class, 'create'])->name('jnsKendaraan.create');
Route::post('/jnskendaraan/add', [JnsKendaraanController::class, 'store'])->name('jnsKendaraan.store');
Route::get('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'edit'])->name('jnsKendaraan.edit');
Route::post('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'update'])->name('jnsKendaraan.update');
Route::get('/jnskendaraan/delete/{id}', [JnsKendaraanController::class, 'destroy'])->name('jnsKendaraan.delete');
//Route detail_services
Route::get('/detailservices', [DetailServicesController::class, 'index'])->name('detailServices.index');
Route::get('/detailservices/add', [DetailServicesController::class, 'create'])->name('detailServices.create');
Route::post('/detailservices/add', [DetailServicesController::class, 'store'])->name('detailServices.store');
Route::get('/detailservices/edit/{id}', [DetailServicesController::class, 'edit'])->name('detailServices.edit');
Route::post('/detailservices/edit/{id}', [DetailServicesController::class, 'update'])->name('detailServices.update');
Route::get('/detailservices/delete/{id}', [DetailServicesController::class, 'destroy'])->name('detailServices.delete');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KuponController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\OrderController;


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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');
    Route::resource('setting', SettingController::class);
    Route::resource('paket', PaketController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('kupon', KuponController::class);
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::resource('order', OrderController::class);
    // Route::get('order/succes', [OrderController::class, 'succes'])->name('order.succes');
    // Route::post('/mistrans-callback', OrderController::class, 'callback');
});

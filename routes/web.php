<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\UplinkController;

Route::get('/', function () {
    return view('halaman.dashboard');
})->name('dashboard'); // Define the dashboard route

Route::get('/monitoringpa', function () {
    return view('halaman.monitoringpa');
})->name('monitoringpa'); // Define the monitoringpa route

Route::get('/manajemen', [DeviceController::class, 'index'])->name('manajemen'); // Define the manajemen route

Route::get('/monitoringpd', [UplinkController::class, 'index'])->name('monitoringpd'); // Define the monitoringpd route

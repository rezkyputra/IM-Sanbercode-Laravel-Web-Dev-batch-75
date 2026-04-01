<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;

Route::get('/',[HomeController::class, 'home']);
Route::get('/daftar',[PendaftaranController::class, 'daftar']);
Route::post('/home',[PendaftaranController::class, 'welcome']);
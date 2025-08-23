<?php

use Illuminate\Support\Facades\Route;

// INITIALIZE PATH CONTROLLER
use App\Http\Controllers\PortalController;
use App\Http\Controllers\KontakController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () { return redirect()->route('dashboard'); });
Route::get('/', [PortalController::class, 'index'])->name('portal.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

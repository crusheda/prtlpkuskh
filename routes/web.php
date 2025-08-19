<?php

use Illuminate\Support\Facades\Route;

// INITIALIZE PATH CONTROLLER
use App\Http\Controllers\PortalController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () { return redirect()->route('dashboard'); });
Route::get('/', [PortalController::class, 'index'])->name('portal.index');

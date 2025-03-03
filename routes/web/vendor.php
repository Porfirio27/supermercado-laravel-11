<?php

use App\Http\Controllers\Backend\vendoController;
use Illuminate\Support\Facades\Route;


//rota vendedor
Route::get('vendor/dashboard', [vendoController::class, 'dashboard'])->middleware('auth', 'vendor')->name('vendor.dashboard');

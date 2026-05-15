<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpiceController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () { return redirect('/login'); });

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(['checkauth'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); });

    Route::get('/spices', [SpiceController::class, 'index']);
    
    Route::middleware(['role:Ibu,Ayah'])->group(function () {
        Route::get('/spices/create', [SpiceController::class, 'create']);
        Route::post('/spices', [SpiceController::class, 'store']);
        Route::delete('/spices/{spice}', [SpiceController::class, 'destroy']);
    });

    Route::middleware(['role:Ibu'])->group(function () {
        Route::get('/spices/{spice}/edit', [SpiceController::class, 'edit']);
        Route::put('/spices/{spice}', [SpiceController::class, 'update']);
        Route::get('/categories', [CategoryController::class, 'index']);
        Route::post('/categories', [CategoryController::class, 'store']);
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
    });
});

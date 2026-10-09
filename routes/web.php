<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Registration');
// });

Route::get("/register",[AuthController::class,'RegisterPage']);
Route::post("/register",[AuthController::class,'register']);

// Route::get("/dashboard", function () {
//     return view("dashboard");
// });

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
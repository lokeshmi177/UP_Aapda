<?php

use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\SDGController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
Route::match(['get','post'],'/login',[LoginController::class,'login']);
Route::post('/forgot-password-check', [LoginController::class, 'forgotPasswordCheck']);
Route::post('/send-otp', [LoginController::class, 'sendOtp']);
Route::post('/verify-otp', [LoginController::class, 'verifyOtp']);
Route::post('/reset-password', [LoginController::class, 'resetPassword']);


Route::get('/dashboard',[DashboardController::class,'dashboard']);

Route::get('/districts',[DashboardController::class,'district']);

Route::get('/sdg',[SDGController::class,'sdg']);
Route::match(['get','post'],'/sdg-form',[SDGController::class,'sdg_form']);
});
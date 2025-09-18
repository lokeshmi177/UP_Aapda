<?php

use App\Http\Controllers\web\DashboardController;
use App\Http\Controllers\web\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
Route::match(['get','post'],'/login',[LoginController::class,'login']);
Route::get('/dashboard',[DashboardController::class,'dashboard']);

});
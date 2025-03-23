<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[UserController::class,'index']);
Route::get('/create', [UserController::class, 'create']);
Route::post('/store',[UserController::class,'store']);



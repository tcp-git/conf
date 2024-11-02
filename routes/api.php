<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
Route::prefix('admin')->group(function () {
  Route::post('register', [AuthController::class,'register']);
});

Route::get('/greeting', function () {
    return 'Hello World';
});


Route::get('/greeting2', function () {
    return 'Hello Worldsss';
});

Route::get('/greeting5', function () {
    return 'Hello Worldsss5555';
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LlibreController;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('user/create',[UserController::class, 'create']);
//Route::post('user/store',[UserController::class, 'store']);

Route::get('llibre/',[LlibreController::class, 'index']);

Route::get('/process-button', [LlibreController::class, 'handleButton'])->name('processButton');

Route::post('llibre/',[LlibreController::class, 'store']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LlibreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('llibre/',[LlibreController::class, 'index']);

Route::get('/hola', [LlibreController::class, 'navbar'])->name('navbar');

Route::post('llibre/store',[LlibreController::class, 'store']);

Route::get('llibre/list', [LlibreController::class, 'goingToLlibreList'])->name('redirectStoreToList');
Route::get('llibre/create', [LlibreController::class, 'goToCreate'])->name('redirectToCreate');

Route::delete('llibre/destroy/{id}', [LlibreController::class, 'destroy'])->name("llibre.destroy");

Route::get('llibre/update/{id}', [LlibreController::class, 'goToUpdate'])->name("llibre.edit");
Route::post('/llibre/update', [LlibreController::class, 'update']);

Route::get('/user/create',[UserController::class, 'create'])->name("user.create");
Route::get("/user/store",[UserController::class, "store"])->name("user.store");

Route::get("/user/login",[UserController::class, "loginGet"])->name("user.login");
Route::post("/user/login",[UserController::class, "loginPost"])->name("user.login");
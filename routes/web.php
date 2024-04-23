<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LlibreController;
use App\Http\Controllers\LlibreriaController;

Route::get('llibre/',[LlibreController::class, 'index']);

Route::get('/hola', [LlibreController::class, 'navbar'])->name('navbar');

Route::get('llibre/list', [LlibreController::class, 'goingToLlibreList'])->name('redirectStoreToList');
Route::get('llibre/create', [LlibreController::class, 'goToCreate'])->name('redirectToCreate');
Route::post('llibre/store',[LlibreController::class, 'store'])->name("llibre.store");


Route::delete('llibre/destroy/{id}', [LlibreController::class, 'destroy'])->name("llibre.destroy");

Route::get('llibre/update/{id}', [LlibreController::class, 'goToUpdate'])->name("llibre.edit");
Route::post('/llibre/update', [LlibreController::class, 'update'])->name("llibre.update");

Route::get('/user/create',[UserController::class, 'create'])->name("user.create");
Route::post("/user/store",[UserController::class, "store"])->name("user.store");

Route::get("/user/login",[UserController::class, "loginGet"])->name("user.login");
Route::post("/user/login",[UserController::class, "loginPost"])->name("user.login");

Route::get('/user/logout', [UserController::class,"logout"])->name('user.logout');


Route::get("/",[LlibreriaController::class, "hola"]);

Route::get("llibreria/edit",[LlibreriaController::class, "edit"])->name("llibreria.edit");
Route::get("llibreria/update",[LlibreriaController::class, "update"])->name("llibreria.update");

Route::get("llibreria/store",[LlibreriaController::class, "store"])->name("llibreria.store");

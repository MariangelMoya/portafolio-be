<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/projects', [ProjectController::class, 'index']); //Route es una clase para la creacion de rutas
//Route::get('/projects/{id}', [ProjectController::class, 'show']);
//Route::post('/projects', [ProjectController::class, 'store']);
//Route::put('/projects/{id}', [ProjectController::class, 'update']);
//Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);

//Route::apiResource('/projects', ProjectController::class);

Route::post('/contact', ContactController::class);

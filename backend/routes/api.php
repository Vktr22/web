<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\SzobatipusController;
use app\Http\Controllers\TanuloszobaController;




Route::get('/api/tanuloszobak', [TanuloszobaController::class, 'index']);
Route::get('/api/szobatipusok', [SzobatipusController::class, 'index']);
Route::put('/api/tanuloszobak/{id}', [TanuloszobaController::class, 'update']);
Route::delete('/api/tanuloszobak/{id}', [TanuloszobaController::class, 'destroy']);


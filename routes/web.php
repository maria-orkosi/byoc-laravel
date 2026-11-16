<?php
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/up', fn () => response()->json(['ok' => true]));
Route::get('/menu', [MenuController::class, 'index']);

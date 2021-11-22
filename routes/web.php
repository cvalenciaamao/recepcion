<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\showController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('habitaciones', [HabitacionController::class, 'index']);
Route::get('habitaciones/create','App\Http\Controllers\ReservaController@create')->name('habitaciones.create');
Route::get('habitaciones/show',[showController::class, 'show']);

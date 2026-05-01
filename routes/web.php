<?php
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

//
Route::get('/', function () { return view('home'); });
Route::get('/chirps', [App\Http\Controllers\ChirpController::class, 'index'])->name('chirps.index');
Route::post('/chirps', [App\Http\Controllers\ChirpController::class, 'store'])->name('chirps.store');
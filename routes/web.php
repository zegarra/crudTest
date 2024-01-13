<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PersonasController::class,'index'])->name('personas.index');
Route::get('/create',[PersonasController::class, 'create'])->name('personas.create');
Route::get('/edit',[PersonasController::class, 'edit'])->name('personas.edit');
Route::get('/show',[PersonasController::class, 'show'])->name('personas.show');



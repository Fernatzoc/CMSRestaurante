<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\Admin\HomeController;


Route::get('', [HomeController::class, 'index']);


Route::get('/empresa', [EmpresaController::class, 'index' ])-> name('empresa.index');
Route::put('/empresa', [EmpresaController::class, 'update'])->name('empresa.update');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\Admin\HomeController;


Route::get('', [HomeController::class, 'index']);


Route::get('/empresa', [EmpresaController::class, 'index' ])-> name('empresa.index');
Route::put('/empresa', [EmpresaController::class, 'update'])->name('empresa.update');
/* Route::get('/recetas/create', [RecetaController::class, 'create' ])->name('recetas.create');
Route::post('/recetas', [RecetaController::class, 'store'])->name('recetas.store');
Route::get('/recetas/{receta}', [RecetaController::class, 'show'])->name('recetas.show');
Route::get('/recetas/{receta}/edit', [RecetaController::class, 'edit'])->name('recetas.edit');
Route::put('/recetas/{receta}', [RecetaController::class, 'update'])->name('recetas.update');
Route::delete('/recetas/{receta}', [RecetaController::class, 'destroy'])->name('recetas.destroy'); */

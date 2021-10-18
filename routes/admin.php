<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\UserController;

Route::get('', [HomeController::class, 'index']);

Route::get('/general', [EmpresaController::class, 'index' ])-> name('empresa.index');
Route::put('/general', [EmpresaController::class, 'update'])->name('empresa.update');

Route::get('/home', [EmpresaController::class, 'home' ])-> name('empresa.home');
Route::put('/home', [EmpresaController::class, 'home_update'])->name('empresa.home_update');

Route::get('/conocenos', [EmpresaController::class, 'conocenos' ])-> name('empresa.conocenos');
Route::put('/conocenos', [EmpresaController::class, 'conocenos_update'])->name('empresa.conocenos_update');

Route::get('/menu', [EmpresaController::class, 'menu' ])-> name('empresa.menu');
Route::put('/menu', [EmpresaController::class, 'menu_update'])->name('empresa.menu_update');

Route::get('/contacto', [EmpresaController::class, 'contacto' ])-> name('empresa.contacto');
Route::put('/contacto', [EmpresaController::class, 'contacto_update'])->name('empresa.contacto_update');

//Users

Route::get('/users', [UserController::class, 'index'])-> name('users.index');
Route::post('/users', [UserController::class, 'store'])-> name('users.store');
Route::get('/users/create', [UserController::class, 'create'])-> name('users.create');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])-> name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])-> name('users.update');


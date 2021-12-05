<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\{HomeController,CategoryController,MealController,EventsController,MailController};
use App\Http\Controllers\Frontend\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify' => true, 'register' => false]);

Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/conocenos', [PagesController::class, 'conocenos'])->name('pages.conocenos');
Route::get('/menu', [PagesController::class, 'menu'])->name('pages.menu');
Route::get('/contacto', [PagesController::class, 'contacto'])->name('pages.contacto');

Route::get('storage-link', function (){
    Artisan::call('storage:link');
    echo 'ok';
});


Route::resource('category', CategoryController::class)->except('show')->middleware('auth');
Route::resource('meal', MealController::class)->except('show')->middleware('auth');
Route::resource('events', EventsController::class)->except('show')->middleware('auth');


Route::get('/send-email', [MailController::class,'sendEmail'])->name('send-email');

if (App::environment('production')) {
    URL::forceScheme('https');
}
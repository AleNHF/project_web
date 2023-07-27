<?php

use Illuminate\Support\Facades\Route;
use App\Models\PageVisit;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\RespuestaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $visits = PageVisit::where('page_slug', '/')->value('visits');

    return view('welcome', compact('visits'));
});

Auth::routes();

// Rutas protegidas con el middleware 'auth'
Route::middleware(['auth', 'page.visit'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/game', [App\Http\Controllers\HomeController::class, 'game'])->name('game');
    Route::resource('users', UserController::class);
    Route::resource('estudiantes', EstudianteController::class);
    Route::resource('docentes', DocenteController::class);
    Route::resource('administrativos', AdministrativoController::class);
    Route::resource('preguntas', PreguntaController::class);
    Route::resource('respuestas', RespuestaController::class);
});

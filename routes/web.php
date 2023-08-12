<?php

use Illuminate\Support\Facades\Route;
use App\Models\PageVisit;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\JueguitoController;

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
})->name('welcome');

Auth::routes();

// Rutas protegidas con el middleware 'auth'
Route::middleware(['auth', 'page.visit'])->group(function () {
    Route::group(['middleware' => ['role:administrativo']], function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('users', UserController::class);
        Route::resource('estudiantes', EstudianteController::class);
        Route::resource('docentes', DocenteController::class);
        Route::resource('administrativos', AdministrativoController::class);
        Route::resource('preguntas', PreguntaController::class);
        Route::resource('respuestas', RespuestaController::class);
    });

    Route::group(['middleware' => ['role:docente']], function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('preguntas', PreguntaController::class);
        Route::resource('respuestas', RespuestaController::class);
    });

    Route::group(['middleware' => ['role:estudiante']], function () {
        Route::get('/game', [App\Http\Controllers\HomeController::class, 'game'])->name('game');
        Route::get('/interno', [App\Http\Controllers\JueguitoController::class, 'interno'])->name('interno');
        Route::get('/jueguito/preguntas/{salaId}/{UserId}', [App\Http\Controllers\JueguitoController::class, 'sala'])->name('sala');
        Route::post('/jueguito/result', [App\Http\Controllers\JueguitoController::class, 'guardar_respuestas'])->name('guardar_respuestas');
    });
});
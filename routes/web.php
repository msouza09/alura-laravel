<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index'])->name('series.index');

Route::get('/series/criar', [SeriesController::class, 'create'])->name('series.create');

Route::post('/series/salvar', [SeriesController::class, 'store'])->name('series.store');

route::get('/series/editar{id}', [SeriesController::class, 'edit'])->name('series.edit');

route::put('/series/update{id}', [SeriesController::class, 'update'])->name('series.update');

Route::delete('series/delete/{id}', [SeriesController::class, 'destroy'])->name('series.destroy');

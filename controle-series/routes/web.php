<?php

use App\Http\Controllers\SeriesController;
use App\Models\Serie;
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
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->only(['index', 'create', 'store']);

Route::post('/series/destroy/{series}', [SeriesController::class, 'destroy'])
    ->name('series.destroy');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveRepositoriesController;
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

Route::get('/', [SaveRepositoriesController::class, 'index'])->name('repositories.index');
Route::get('/{id}', [SaveRepositoriesController::class, 'show'])->name('repositories.show');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::post('/storeEmployer', [PublicController::class, "storeEmployer"])->name("storeEmployer");
Route::get('/showEmployer', [PublicController::class, "showEmployer"])->name("showEmployer");
Route::post('/storeTeam', [PublicController::class, "storeTeam"])->name("storeTeam");
Route::get('/project', [PublicController::class, "project"])->name("project");
Route::post('/storeProject', [PublicController::class, "storeProject"])->name("storeProject");
Route::get('/task', [PublicController::class, "task"])->name("task");
Route::post('/storeTask', [PublicController::class, "storeTask"])->name("storeTask");
Route::get('/hireWorker', [PublicController::class, "hireWorker"])->name("hireWorker");
Route::post('/storeWorker', [PublicController::class, "storeWorker"])->name("storeWorker");
Route::get('/showTask', [PublicController::class, "showTask"])->name("showTask");
Route::delete('/destroy{task}', [PublicController:: class, 'destroy'])->name('destroy');

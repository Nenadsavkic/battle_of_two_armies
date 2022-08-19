<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [ProjectController::class, 'welcome'])->name('welcome');

Auth::routes(['register'=>false, 'login'=>false]);

Route::get('/home', [ProjectController::class, 'welcome'])->name('welcome');
Route::get('/login', [ProjectController::class, 'welcome'])->name('welcome');
Route::get('/register', [ProjectController::class, 'welcome'])->name('welcome');
Route::get('/battle-result', [ProjectController::class, 'startBattle'])
->name('startBattle');
Route::get('/reset-battle', [ProjectController::class, 'resetBattle'])
->name('resetBattle');


Route::post('/create-army1', [ProjectController::class, 'createArmy1'])
->name('createArmy1');
Route::post('/create-army2', [ProjectController::class, 'createArmy2'])
->name('createArmy2');



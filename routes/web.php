<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\ProjectController::class, 'welcome'])->name('welcome');

Auth::routes(['register'=>false, 'login'=>false]);

Route::get('/home', [App\Http\Controllers\ProjectController::class, 'welcome'])->name('welcome');
Route::get('/login', [App\Http\Controllers\ProjectController::class, 'welcome'])->name('welcome');
Route::get('/register', [App\Http\Controllers\ProjectController::class, 'welcome'])->name('welcome');
Route::get('/battle-result', [App\Http\Controllers\ProjectController::class, 'startBattle'])
->name('startBattle');
Route::get('/reset-baattle', [App\Http\Controllers\ProjectController::class, 'resetBattle'])
->name('resetBattle');


Route::post('/create-army1', [App\Http\Controllers\ProjectController::class, 'createArmy1'])
->name('createArmy1');
Route::post('/create-army2', [App\Http\Controllers\ProjectController::class, 'createArmy2'])
->name('createArmy2');



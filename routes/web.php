<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/entries/create',[UserController::class, 'index'])->name('entries.index');
Route::get('/entries/add_entries',[UserController::class, 'create'])->name('entries.create');
Route::post('/entries/save_entries',[UserController::class, 'save_entries'])->name('entries.save_entries');

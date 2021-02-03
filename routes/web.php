<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PerfilController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/Aprende', [EventController::class, 'index'])->name('aprende');

Route::get('/Viaja', [EventController::class, 'index'])->name('viaja');

Route::get('/Debate', [EventController::class, 'index'])->name('debate');

Route::get('/Come', [EventController::class, 'index'])->name('come');

Route::get('/te-ayudamos', function () {
    return view('pageInProgress');
})->name('te-ayudamos');

Auth::routes();

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil')->middleware('auth');
// Route::get('users', 'UserController@index');
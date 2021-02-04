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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/Aprende', [EventController::class, 'index'])->name('aprende');

Route::get('/Viaja', [EventController::class, 'index'])->name('viaja');

Route::get('/Debate', [EventController::class, 'index'])->name('debate');

Route::get('/Come', [EventController::class, 'index'])->name('come');


Route::get('/te-ayudamos', function () {
    return view('pageInProgress');
})->name('te-ayudamos');

Route::get('/createEvent', function () {
    return view('createEvent');
})->name('createEvent')->middleware('auth');

Route::post('/createEvent', [App\Http\Controllers\EventController::class, 'store'])->name('event')->middleware('auth');
Route::get('/createEvent/{$id}', [App\Http\Controllers\EventController::class, 'edit'])->name('editEvent')->middleware('auth');
Route::put('/createEvent/{$id}', [App\Http\Controllers\EventController::class, 'update'])->name('updateEvent')->middleware('auth');
Route::delete('/createEvent/{$id}', [App\Http\Controllers\EventController::class, 'delete'])->name('deleteEvent')->middleware('auth');


Auth::routes();

Route::resource('user', PerfilController::class)->middleware('auth');

Route::get('/Sala', function(){
    return view('rooms');
})->name('sala')->middleware('auth');


Route::get('/faq', function () {
    return view('faq');
})->name('faq');

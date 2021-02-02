<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
})->name('home');

Route::get('/aprende', function () {
    return view('categoria');
})->name('aprende');

Route::get('/viaja', function () {
    return view('pageInProgress');
})->name('viaja');

Route::get('/debate', function () {
    return view('pageInProgress');
})->name('debate');

Route::get('/come', function () {
    return view('pageInProgress');
})->name('come');

Route::get('/te-ayudamos', function () {
    return view('pageInProgress');
})->name('te-ayudamos');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('users', 'UserController@index');
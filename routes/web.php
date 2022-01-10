<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('contacts/about');

});
Route::get('/inspiration', function () {
    return view('inspiration/inspiration');

});
Route::get('/events', function () {
    return view('events/events');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>['auth']], function () {
        Route::resource('user', UserController::class);
        Route::get('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');
        Route::resource('contacts', ContactController::class);
        Route::get('contacts/{id}/delete', [ContactController::class, 'destroy'])->name('contact.delete');
        Route::get('contacts/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
        Route::get('contacts/{id}', [ContactController::class, 'update'])->name('contact.update');
    });

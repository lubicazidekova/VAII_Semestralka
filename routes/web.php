<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\InspirationController;


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

//WELCOME PAGE ROUTE
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//INSPIRATION PAGE ROUTE
Route::resource('inspiration', UserController::class);
Route::get('/inspiration', [InspirationController::class, 'index'])->name('inspiration.index');
//EVENTS PAGE ROUTE
Route::get('/events', function () {
    return view('events/events');
});

//ABOUT PAGE ROUTE
Route::get('/about', function () {
    return view('contacts/about');
})->name('about');

//__________________________________________________________________________________
//ARTICLES PAGE ROUTE
Route::resource('/articles', ArticleController::class);
Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::resource('comments',CommentController::class);
Route::get('/comments', [CommentController::class, 'index'])->name('comment.index');
Route::get('/comments/{id}', [CommentController::class, 'show'])->name('comment.show');

Route::resource('reviews',ReviewController::class);
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');

//________________________AUTHENTIFICATION ROUTES___________________________________
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>['auth']], function () {

        //USERS ROUTES
        Route::resource('user', UserController::class);
        Route::get('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');

        //CONTACTS ROUTES
        Route::resource('contacts', ContactController::class);
        Route::get('contacts/{id}/delete', [ContactController::class, 'destroy'])->name('contact.delete');
        Route::get('contacts/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
        Route::get('contacts/{id}', [ContactController::class, 'update'])->name('contact.update');

        //ARTICLES ROUTES
        Route::get('articles/{id}/delete', [ArticleController::class, 'destroy'])->name('article.delete');
        Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
        Route::get('articles/{id}', [ArticleController::class, 'update'])->name('article.update');


        //COMMENTS ROUTES

        Route::get('comments/{id}/delete', [CommentController::class, 'destroy'])->name('comment.delete');
        Route::get('comments/{id}/edit', [ArticleController::class, 'edit'])->name('comment.edit');
        Route::get('comments/{id}', [ArticleController::class, 'update'])->name('comment.update');

        Route::get('inspiration/{id}/delete', [InspirationController::class, 'destroy'])->name('inspiration.delete');

});


<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum')->name('auth.logout'); // TODO требует аутентификации

Route::controller(UserController::class)
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::get('/user', 'show')->name('user.show'); // TODO требует аутентификации
        Route::patch('/user', 'update')->name('user.update'); // TODO требует аутентификации
    });

Route::get('/films/{id}/similar', [FilmController::class, 'similar'])->name('films.similar');

Route::get('/films', [FilmController::class, 'index'])->name('films.index');

Route::controller(FilmController::class)
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::get('/films/{id}', 'show')->name('films.show'); // TODO требует аутентификации ? в видео без auth:sanctum
        Route::post('/films', 'store')->name('films.store'); // TODO требует аутентификации
        Route::patch('/films/{id}', 'update')->name('films.update'); // TODO требует аутентификации
    });

Route::get('films/{film}/comments', [CommentController::class, 'index'])->name('comments.index');

Route::controller(CommentController::class)
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::post('films/{id}/comments', 'store')->name('comments.store'); // TODO требует аутентификации
        Route::patch('comments/{comment}', 'update')->name('comments.update'); // TODO требует аутентификации
        Route::delete('comments/{comment}', 'destroy')->name('comments.destroy'); // TODO требует аутентификации role-moderator
    });

Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');

Route::patch('/genres/{genre}', [GenreController::class, 'update'])->middleware('auth:sanctum')->name('genres.update'); // TODO требует аутентификации

Route::get('/promo', [PromoController::class, 'show']);

Route::post('/promo/{id}', [PromoController::class, 'store'])->middleware('auth:sanctum'); // TODO требует аутентификации (?права администратора)

Route::controller(FavoriteController::class)
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::get('/favorite', 'index')->name('favorite.index'); // TODO требует аутентификации
        Route::post('/films/{id}/favorite', 'store')->name('favorite.store'); // TODO требует аутентификации
        Route::delete('/films/{id}/favorite', 'destroy')->name('favorite.destroy'); // TODO требует аутентификации
    });

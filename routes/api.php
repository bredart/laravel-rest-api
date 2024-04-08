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
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout'); // TODO требует аутентификации

Route::get('/user', [UserController::class, 'show'])->name('user.show'); // TODO требует аутентификации
Route::patch('/user', [UserController::class, 'update'])->name('user.update'); // TODO требует аутентификации

Route::get('/films/{id}/similar', [FilmController::class, 'similar'])->name('films.similar');

Route::get('/films', [FilmController::class, 'index'])->name('films.index');
Route::get('/films/{id}', [FilmController::class, 'show']->name('films.show')); // TODO требует аутентификации
Route::post('/films', [FilmController::class, 'store'])->name('films.store'); // TODO требует аутентификации
Route::patch('/films/{id}', [FilmController::class, 'update'])->name('films.update'); // TODO требует аутентификации

Route::get('films/{id}/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('films/{id}/comments', [CommentController::class, 'store'])->name('comments.store'); // TODO требует аутентификации
Route::patch('comments/{comment}', [CommentController::class, 'update'])->name('comments.update'); // TODO требует аутентификации
Route::delete('comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy'); // TODO требует аутентификации

Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::patch('/genres/{genre}', [GenreController::class, 'update'])->name('genres.update'); // TODO требует аутентификации

Route::get('/promo', [PromoController::class, 'show']);
Route::post('/promo/{id}', [PromoController::class, 'store']); // TODO требует аутентификации (?права администратора)

Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite.index'); // TODO требует аутентификации
Route::post('/films/{id}/favorite', [FavoriteController::class, 'store'])->name('favorite.store'); // TODO требует аутентификации
Route::delete('/films/{id}/favorite', [FavoriteController::class, 'destroy'])->name('favorite.destroy'); // TODO требует аутентификации

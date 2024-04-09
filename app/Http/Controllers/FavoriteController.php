<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Получение списка фильмов добавленных пользователем
     * в избранное
     *
     */
    public function index()
    {
        return $this->success([]);
    }

    /**
     * Добавление фильма в избранное
     *
     */
    public function store(Request $request)
    {
        return $this->success([]);
    }

    /**
     * Удаление фильма из избранного
     */
    public function destroy(string $id)
    {
        return $this->success([]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Получение списка жанров.
     */
    public function index()
    {
        return 'Список жанров';
    }

    /**
     * Редактирование жанра.
     */
    public function update(Request $request, string $id)
    {
        return 'редактировние';
    }
}

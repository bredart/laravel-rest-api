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
        return $this->success([]);
    }

    /**
     * Редактирование жанра.
     */
    public function update(Request $request, string $id)
    {
        return $this->success([]);
    }
}

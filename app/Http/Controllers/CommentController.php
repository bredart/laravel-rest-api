<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Получение списка отзывов к фильму
     * //TODO $id заменить на модель Film
     */
    public function index(int $id)
    {
        return $this->success([]);
    }

    /**
     * Добавление отзыва к фильму
     * TODO добавить модель
     */
    public function store(Request $request, Film $film)
    {
        return $this->success([]);
    }

    /**
     * Редактирование комментария
     * TODO добавить модель
     */
    public function update(Request $request, string $id)
    {
        return $this->success([]);
    }

    /**
     * Удаление комментария
     */
    public function destroy(Request $request, string $id)
    {
        return $this->success([]);
    }
}

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
        //
    }

    /**
     * Добавление отзыва к фильму
     * TODO добавить модель
     */
    public function store(Request $request, Film $film)
    {
        //
    }

    /**
     * Редактирование комментария
     * TODO добавить модель
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Удаление комментария
     */
    public function destroy(Request $request, string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Получение списка фильмов
     *
     * @return Responsable
     */
    public function index()
    {
       return $this->success([]);
    }

    /**
     * Добавление фильма в базу
     *
     * @param Request $request
     * @return Responsable
     */
    public function store(Request $request)
    {
        return $this->success([]);
    }

    /**
     * Получение информации о фильме
     *
     * @param //todo добавить модель
     * @return Responsable
     */
    public function show(string $id)
    {
        return $this->success([], 201);
    }

    /**
     * Редактирование фильма
     * @return Responsable
     */
    public function update(Request $request, string $id)
    {
        return $this->success([]);
    }

    /**
     * Получение списка похожих фильмов
     * TODO добавить id
     * @return Responsable
     */
    public function similar()
    {
        return $this->success([]);
    }
}

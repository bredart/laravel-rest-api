<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Получение профиля пользователя
     */
    public function show(string $id)
    {
        return $this->success([]);
    }

    /**
     * Обновление профиля пользователя
     */
    public function update(Request $request, string $id)
    {
        return $this->success([]);
    }
}

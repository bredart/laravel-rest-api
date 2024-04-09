<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Регистрация пользователя
     */
    public function register(Request $request)
    {
        return $this->success([]);
    }

    /**
     * Аутентификация
     */
    public function login(Request $request)
    {
        return $this->success([]);
    }

    /**
     * Выход (logout)
     */
    public function logout(Request $request)
    {
        return $this->success([]);
    }
}

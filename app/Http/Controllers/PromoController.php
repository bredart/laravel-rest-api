<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Установка промо-фильма
     */
    public function store(Request $request)
    {
        return $this->success([]);
    }

    /**
     * Получение промо фильма
     */
    public function show()
    {
        return $this->success([]);
    }

}

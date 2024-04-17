<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    /**
     * Получение списка отзывов к фильму
     * @return
     */
    public function index(Film $film)
    {
        /*
         * Метод принимает на вход id фильма, в случае отсутствия такового — возвращается 404 ошибка.
        Возвращает список отзывов. Каждый отзыв содержит: текст отзыва, имя автора, дату написания отзыва.
        Так же может содержать оценку.
         */
//        return $this->success($film->comments()->get());

        return $this->success($film->comments()->get());
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
    public function destroy(Comment $comment)
    {
        if (Gate::allows('comment-delete', $comment)) {
            // Юзер авторизован для выполнения этого действия

            $comment->delete();
            return $this->success(null, 201);
        } else {
            // Юзер не имеет доступа к удалению комментария
            abort(403);
        }
    }
}

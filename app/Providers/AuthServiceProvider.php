<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();
        $this->registerGates();
    }

    private function registerGates()
    {
        // Удалять комментарии может только модератор или автор комментария если на него нет ответов.
        Gate::define('comment-delete', function (User $user, Comment $comment) {
            if ($user->isModerator()) {
                return true;
            }

            return $user->id === $comment->user_id && $comment->comments->isEmpty();
        });
    }
}

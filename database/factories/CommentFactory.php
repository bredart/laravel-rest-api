<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text' => $this->faker->text,
            'rating' => random_int(1, 5),
            'film_id' => random_int(1, 5), // Film::factory(),
            'user_id' => random_int(1, 5),//User::factory(),
            'parent_id' => random_int(1, 20),
        ];
    }
}

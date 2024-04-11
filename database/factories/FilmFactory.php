<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'status' => 'ready',
            'description' => $this->faker->sentences(2, true),
            'director' => $this->faker->name(),
            'starring' => json_encode([$this->faker->name(), $this->faker->name(), $this->faker->name()]),
            'run_time' => random_int(60, 240),
            'released' => $this->faker->year(),
            'imdb_id' => 'tt00' . random_int(1, 9999),
        ];
    }
}

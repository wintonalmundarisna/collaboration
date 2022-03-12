<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quotes>
 */
class QuotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 6),
            'gambar' => $this->faker->sentence(mt_rand(1,2)),
            'judul' => $this->faker->sentence(mt_rand(1,2)),
            'isi' => $this->faker->paragraph(),
        ];
    }
}

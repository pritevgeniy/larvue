<?php

namespace Database\Factories;

use App\Models\Data;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \JsonException
     */
    public function definition(): array
    {
        $data = [
            'tittle' => fake()->title(),
            'text' => fake()->text(),
            'date' => fake()->date()
        ];

        return [
            'name' => fake()->name(),
            'status' => Data::STATUS_ACTIVE,
            'json' => json_encode($data, JSON_THROW_ON_ERROR)
        ];
    }
}

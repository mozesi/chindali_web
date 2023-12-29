<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Description;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Description>
 */
class DescriptionFactory extends Factory
{
    protected $description = Description::class;

    public function definition(): array
    {

        return [
            "ndali_description" => fake()->text(130),
            "english_description" => fake()->text(130)
        ];
    }
}

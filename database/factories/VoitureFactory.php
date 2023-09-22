<?php

namespace Database\Factories;
use App\Models\Voiture;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voiture>
 */
class VoitureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //ytb 01:05:00
            'marqueVoiture' => fake()->word,
            'modeleVoiture' => fake()->word,
            'anneeVoiture' => fake()->year,
            'prixVoiture' => fake()->randomFloat(null, 200, 800),
            'nbSieges' => fake()->randomFloat(null, 4 , 8 ),
            'descriptionVoiture' => fake()->paragraph

        ];
    }
}

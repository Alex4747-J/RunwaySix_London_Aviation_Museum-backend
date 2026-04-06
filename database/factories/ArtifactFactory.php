<?php

namespace Database\Factories;

use App\Models\Artifact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Artifact>
 */
class ArtifactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => fake()->unique()->words(3, true),
        'object_type' => fake()->randomElement(['Helmet', 'Uniform', 'Weapon', 'Medal', 'Equipment', 'Document']),
        'period' => fake()->randomElement(['WWI', 'WWII', '1950s', 'Cold War', 'Korean War']),
        'origin' => fake()->randomElement(['RAF', 'RCAF', 'Canadian Army', 'Royal Navy', 'US Air Force']),
        'material' => fake()->randomElement(['Leather', 'Steel', 'Wood', 'Brass', 'Cotton', 'Paper']),
        'description' => fake()->paragraph(),
        'additional_info' => fake()->paragraph(),
        'image_path' => null,
    ];
}
}

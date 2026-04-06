<?php

namespace Database\Factories;

use App\Models\EventsBlog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EventsBlog>
 */
class EventsBlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isEvent = fake()->boolean();
        return [
        'title' => fake()->unique()->words(5, true),
        'post_type' => $isEvent ? 'event' : 'blog',
        'event_date' => $isEvent ? fake()->dateTimeBetween('now', '+6 months') : null,
        'event_time' => $isEvent ? fake()->optional()->time('g:i A') : null,
        'location' => $isEvent ? fake()->address() : null,
        'description' => fake()->paragraph(),
        'content' => fake()->paragraph(3, true),
        'image_path' => null,
        ];
    }
}

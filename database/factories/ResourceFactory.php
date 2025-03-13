<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resource>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['Talk Suicide Canada', 'Alberta Mental Health Help Line', 'Alberta Addictions Help Line', 'Distress Line Edmonton']),
            'description' => fake()->text(),
            'url' => 'https://www' . fake()->domainName(),
            'user_id' => User::factory(),
            'tag_id' => Tag::factory()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'category_id' => 1,
            'title' => $this->faker->unique()->name(),
            'description' => $this->faker->text,
            'price' => rand(50, 80000),
            'handle_url' => $this->faker->text,
            'post_type' => rand(0,2),
            'is_active' => 1,
            'status' => 1, 
        ];
    }
}

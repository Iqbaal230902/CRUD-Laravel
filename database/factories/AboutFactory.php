<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\About;
use App\Models\User;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'page_name' => fake()->regexify('[A-Za-z0-9]{50}'),
            'content' => fake()->paragraphs(3, true),
            'publish_status' => fake()->word(),
            'put_on_navbar' => fake()->word(),
        ];
    }
}

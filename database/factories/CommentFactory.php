<?php

namespace Database\Factories;


use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blog_id' => Blog::factory(),
            'name' => $this->faker->realText(20),
            'body' => $this->faker->realText(100),
            'created_at' => $this->faker->dateTimeBetween('-10days', '0days'),
        ];
    }
}

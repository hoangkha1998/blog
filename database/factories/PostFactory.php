<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'authorId' => 1,
            'title' => $this->faker->name,            
            'metaTitle' => Str::random(10),
            'slug' => Str::random(10),
            'content' => Str::random(10),
            'images' => Str::random(10),
            'isBanner' => 1,
            'isDisplay' => 0,
        ];
    }

    
}

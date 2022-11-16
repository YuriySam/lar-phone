<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->text(35),
            'image' => $this->faker->imageUrl(),
            'likes' => random_int(1,200),
            'is_published' => '1',
            'Category_id' => Category::get()->random()->id,


        ];
    }
}

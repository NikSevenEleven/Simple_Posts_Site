<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Post::class;

    public function definition()
    {
        return [
            'title'=>$this->faker->name(10),
            'content'=>$this->faker->text,
            'image'=>$this->faker->imageUrl(),
            'likes'=>random_int(10,1000),
            'is_published'=>1,
            'category_id'=>Category::get()->random()->id
        ];
    }
}

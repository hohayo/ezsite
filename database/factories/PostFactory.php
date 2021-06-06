<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => $this->faker->realText(50),
            'category_id' => rand(1, 100),
            'content' => $this->faker->realText,
            'pic' => $this->faker->image('public/images', 200, 200, 'cats', false),
            'sort' => rand(0, 100),
            'enabled' => $this->faker->randomElement(array(true, false)),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(30),
            'link' => $this->faker->url,
            'type' =>  $this->faker->realText(10),
            'sort' => rand(0, 100),
            'enabled' => $this->faker->randomElement(array(true, false)),
        ];
    }
}

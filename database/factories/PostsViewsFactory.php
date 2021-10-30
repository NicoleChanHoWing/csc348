<?php

namespace Database\Factories;

use App\Models\Posts;
use App\Models\PostsViews;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsViewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostsViews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_post' => $this->faker->randomElement(Posts::all()),
            'userid' => $this->faker->randomElement(User::all())
        ];
    }
}

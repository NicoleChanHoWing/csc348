<?php

namespace Database\Factories;

use App\Models\CommentsPost;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentsPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommentsPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'id_post' => $this->faker->randomElement(Posts::all()),
            'descripcion' => $this->faker->paragraph(),
            'userid' => $this->faker->randomElement(User::all())
        ];
    }
}

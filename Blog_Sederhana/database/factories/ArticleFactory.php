<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'content'=> $this->faker->text(),
            'image'=> $this->faker->imageUrl(200,200,'transport'),
            'user_id'=>$this->faker->numberBetween(1,User::count()),
            'category_id'=> $this->faker->numberBetween(1,Category::count())
        ];
    }
}

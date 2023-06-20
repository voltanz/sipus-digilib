<?php

namespace Database\Factories;

use App\Author;
use App\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $randomNumber = rand(1, 50);
        $cover = "https://picsum.photos/id/{$randomNumber}/200/300";
        return [

            'author_id' => Author::inRandomOrder()->first()->id,
            'title' => fake()->sentence(5),
            'publisher' => fake()->sentence(5),
            'description' => fake()->sentence(50),
            'cover' => $cover,
            'qty_page' => mt_rand(80, 600),
            'qty' => mt_rand(5, 30),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}

<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Article;
use App\Models\Blog\Author;
use App\Models\Blog\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph(15),
            'description'=>$this->faker->paragraph(3),
            'published_at'=>$this->faker->dateTimeBetween($startDate='-1 years'),
            'image'=>$this->faker->image('storage/app/public', 640, 480, null, false),
            'author_id'=>Author::factory(),
            'category_id'=>Category::factory(),
            'created_At'=>now(),
        ];
    }
}

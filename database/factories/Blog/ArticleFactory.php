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
            'body'=>$this->faker->paragraph(10),
            'description'=>$this->faker->paragraph(),
            'published_at'=>$this->faker->dateTimeBetween($startDate='-30 years',$endDate='+30 years'),
            'image'=>$this->faker->image('storage/app/public'),
            'author_id'=>Author::factory(),
            'category_id'=>Category::factory(),
            'created_At'=>now(),
        ];
    }
}

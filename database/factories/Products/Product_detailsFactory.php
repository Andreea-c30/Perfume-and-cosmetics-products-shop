<?php

namespace Database\Factories\Products;

use App\Models\Products\Product_details;
use Illuminate\Database\Eloquent\Factories\Factory;

class Product_detailsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product_details::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'volume'=>$this->faker->randomDigit,
        'flavor'=>$this->faker->sentence,
        'Directions_for_use'=>$this->faker->paragraph(3),
        ];
    }
}

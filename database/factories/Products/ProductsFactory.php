<?php

namespace Database\Factories\Products;

use App\Models\Products\Products;
use App\Models\Products\Product_details;
use App\Models\Products\Brand;
use App\Models\Products\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence,
        'description'=>$this->faker->paragraph(3),
        'product_details_id'=>Product_details::factory(),
        'type_id'=>Type::factory(),
        'brand_id'=>Brand::factory(),
        'price'=>$this->faker->randomFloat(2, 10, 1000),
        'available'=>$this->faker->boolean,
        ];
    }
}
<?php

namespace Database\Factories\Products;

use App\Models\Products\Brand;
use App\Models\Products\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence,
        'country_id'=>Country::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),//Alice Smith
            'cost'=>random_int(100,10000),//1500
            'price'=>random_int(1000,20000),//6500
            'quantity'=>random_int(1,50),//23
            'brand_id'=>random_int(1,10),//puwdn
            'category_id'=>random_int(1,10),//puwdn
        ];
    }
}

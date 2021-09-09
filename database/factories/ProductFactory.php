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

            'name' => $this->faker->name(),
            'buying_price' => $this->faker->numberBetween($min = 500, $max = 8000),
            'selling_price' =>$this->faker->numberBetween($min= 600, $max =9000),
            'description'=> $this->faker->paragraph($nb =2)
        ];
    }
}

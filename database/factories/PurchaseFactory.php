<?php

namespace Database\Factories;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

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
            'quantity'=> $this->faker->numberBetween($min =10, $max=500),


        ];
    }
}

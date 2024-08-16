<?php

namespace Database\Factories;

use App\Models\Inventry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventry>
 */
class InventryFactory extends Factory
{

    protected $model = Inventry::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->word,
            'code' => $this->faker->unique()->bothify('???-#####'),
            'expiring_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'catergory' => $this->faker->randomElement(['Electronics', 'Groceries', 'Clothing', 'Furniture']),
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(100, 10000),
            'status' => $this->faker->randomElement(['valid', 'expired']),
        ];
    }
}

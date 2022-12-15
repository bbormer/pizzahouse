<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'type' => fake()->randomElement(['Margarita', 'Hawaiian', 'Veg Supreme', 'Volcano' ]),
            'base' => fake()->randomElement(['Thick', 'Thin & Crispy', 'Cheese Crust', 'Garlic Crust']),
            'name' => fake()->name(),
            'toppings' => fake()->randomElement([['Mushrooms', 'Peppers'], ['Garlic', 'Olives'], ['Peppers', 'Garlic'], ['Mushrooms', 'Peppers',  'Garlic', 'Olives'], ['Mushrooms'], ['Peppers'], ['Garlic'], ['Olives']]),
            'price' => 10
            // password
        ];
    }
}

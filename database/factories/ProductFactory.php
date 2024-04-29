<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        $productType = $faker->randomElement(['tire', 'engine', 'battery', 'filter', 'accessory']);

        switch ($productType) {
            case 'tire':
                return [
                    'name' => $faker->word,
                    'price' => $faker->randomFloat(2, 10, 1000),
                    'quantity' => $faker->numberBetween(1, 100),
                    'image' => $faker->imageUrl(),
                    'user_id' => function () {
                        return factory(User::class)->create()->id;
                    },
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            case 'engine':
                return [
                    'name' => $faker->word,
                    'price' => $faker->randomFloat(2, 100, 5000),
                    'quantity' => $faker->numberBetween(1, 50),
                    'image' => $faker->imageUrl(),
                    'user_id' => function () {
                        return factory(User::class)->create()->id;
                    },
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            case 'battery':
                return [
                    'name' => $faker->word,
                    'price' => $faker->randomFloat(2, 50, 200),
                    'quantity' => $faker->numberBetween(1, 100),
                    'image' => $faker->imageUrl(),
                    'user_id' => function () {
                        return factory(User::class)->create()->id;
                    },
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            case 'filter':
                return [
                    'name' => $faker->word,
                    'price' => $faker->randomFloat(2, 5, 50),
                    'quantity' => $faker->numberBetween(1, 200),
                    'image' => $faker->imageUrl(),
                    'user_id' => function () {
                        return factory(User::class)->create()->id;
                    },
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            case 'accessory':
                return [
                    'name' => $faker->word,
                    'price' => $faker->randomFloat(2, 1, 100),
                    'quantity' => $faker->numberBetween(1, 500),
                    'image' => $faker->imageUrl(),
                    'user_id' => function () {
                        return factory(User::class)->create()->id;
                    },
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
        }
    }
}

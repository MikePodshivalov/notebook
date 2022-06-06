<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory
 */
class NotebookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'name' => $faker->name(),
            'company' => Arr::random([null, $faker->company()]),
            'phone' => $faker->phoneNumber(),
            'email' => $faker->email(),
            'dob' => Arr::random([null, $faker->date()]),
            'photo' => Arr::random([null, 'storage/app/public/photo/' . (string)rand(1, 4) . '.jpeg']),
        ];
    }
}

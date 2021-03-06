<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "companyName" => $this->faker->name(),
            "companyAddress" => $this->faker->address(),
            "phoneNumber" => $this->faker->phoneNumber(),
            "mail" => $this->faker->email(),
            "other" => $this->faker->realText(60),
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}

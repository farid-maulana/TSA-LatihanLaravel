<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employee_id_number' => fake()->numerify('##################'),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'gender' => fake()->randomElement($array = ['Male', 'Female']),
            'date_of_birth' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'phone_number' => fake()->e164PhoneNumber(),
            'address' => fake()->address(),
            'division' => fake()->company(),
            'position' => fake()->jobTitle(),
        ];
    }
}

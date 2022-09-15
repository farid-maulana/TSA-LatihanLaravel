<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = Division::all();

        $faker = Faker::create();

        foreach($divisions as $division)
        {
            Employee::create([
                'employee_id_number' => $faker->numerify('##################'),
                'name' => $faker->name(),
                'email' => $faker->safeEmail(),
                'gender' => $faker->randomElement($array = ['Male', 'Female']),
                'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'phone_number' => $faker->e164PhoneNumber(),
                'address' => $faker->address(),
                'division_id' => $division->id,
                'position' => $faker->jobTitle(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'portfolio-1.jpg',
            'portfolio-2.jpg', 
            'portfolio-3.jpg', 
            'portfolio-4.jpg', 
            'portfolio-5.jpg', 
            'portfolio-6.jpg', 
            'portfolio-7.jpg', 
            'portfolio-8.jpg', 
            'portfolio-9.jpg'
        ];

        $faker = Faker::create();

        foreach($images as $image)
        {
            Portfolio::create([
                'name' => $faker->name(),
                'category' => $faker->randomElement($array = array('Web design', 'Web application', 'Mobile application')),
                'client' => $faker->company(),
                'date' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null),
                'url' => $faker->url(),
                'description' => $faker->text($maxNbChars = 1000),
                'image' => $image,
            ]);
        }
    }
}

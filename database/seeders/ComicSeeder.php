<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Comic;

// Helpers
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {

            Comic::create([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph(),
                'description' => $faker->paragraph(),
                'image' => $faker->imageUrl(640, 480, 'comics', true),
                'price' => $faker->randomFloat(2, 10, 30),
                'quantity' => $faker->randomNumber(2, true),
            ]);

        }
    }
}

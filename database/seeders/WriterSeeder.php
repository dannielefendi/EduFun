<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $faker = Faker::create('id_ID');

        foreach(range(1,5) as $index){
            Writer::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'bio' => $faker->paragraph,
            ]);
        }
    }
}

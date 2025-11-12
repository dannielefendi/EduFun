<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $faker = Faker::create('id_ID');

        foreach(range(1,10) as $index){
            Article::create([
                'title' => $faker->sentence(2),
                'content' => $faker->paragraphs(2, true),
                'date' => $faker->date(),
                'writer_id' => $faker->numberBetween(1, 5),
                'category_id' => $faker->numberBetween(1, 4),
                'is_popular' => $faker->boolean(70), // 70% artikel akan diberi status populer
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $categories = [
            [
                'name' => 'Data Science',
                'description' => 'Bidang yang mempelajari analisis data, machine learning, dan AI.'
            ],
            [
                'name' => 'Network Security',
                'description' => 'Fokus pada keamanan sistem jaringan dan infrastruktur IT.'
            ],
            [
                'name' => 'Interactive Multimedia',
                'description' => 'Menggabungkan teknologi interaktif dengan desain visual dan suara.'
            ],
            [
                'name' => 'Software Engineering',
                'description' => 'Bidang yang berfokus pada proses pengembangan perangkat lunak.'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

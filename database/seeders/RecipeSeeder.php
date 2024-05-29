<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'Resep 1',
                'description' => 'Hidangan lezat yang dapat dinikmati kapan saja.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],
            [
                'name' => 'Resep 2',
                'description' => 'Makanan sederhana dan cepat untuk hari-hari sibuk.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],
            [
                'name' => 'Resep 3',
                'description' => 'Hidangan klasik yang disukai semua orang.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],
            [
                'name' => 'Resep 4',
                'description' => 'Makanan sehat dan bergizi untuk keluarga.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],
            [
                'name' => 'Resep 5',
                'description' => 'Hidangan cepat saji yang enak dan praktis.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],
            [
                'name' => 'Resep 6',
                'description' => 'Cemilan manis untuk menemani waktu santai.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],
            [
                'name' => 'Resep 7',
                'description' => 'Menu sarapan cepat dan mudah disiapkan.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],
            [
                'name' => 'Resep 8',
                'description' => 'Hidangan spesial untuk acara khusus.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],
            [
                'name' => 'Resep 9',
                'description' => 'Makanan penutup yang manis dan menggoda.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],
            [
                'name' => 'Resep 10',
                'description' => 'Masakan tradisional dengan cita rasa otentik.',
                'ingredients' => 'bahan1, bahan2, bahan3',
                'instructions' => 'Langkah 1: Lakukan sesuatu. Langkah 2: Lakukan sesuatu yang lain.',
            ],

        ];

         //insert data
         foreach ($data as $item) {
            Recipe::create([
                'name' => $item['name'],
                'description' => $item['description'],
                'ingredients' => $item['ingredients'],
                'instructions' => $item['instructions'],
            ]);
        }
    }
}

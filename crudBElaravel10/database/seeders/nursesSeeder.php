<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class nursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 100; $i++) {
            DB::table('nurses')->insert([
                'namaNurse' => $faker->name,
                'pendidikanTerakhir' => $faker->sentence,
                'Rating' => $faker->randomFloat(3, 4, 5),
                'kategori' => $faker->randomElement(['Perawatan Ibu Hamil','Perawatan Pasca Melahirkan', 'Pelatihan Kepada Orang Tua', 'Konsultasi', 'Perawatan Bayi']),
                'spesialis' => $faker->word,
                'foto' => $faker->imageUrl(), // Generates a random image URL
            ]);
        }
    }
}

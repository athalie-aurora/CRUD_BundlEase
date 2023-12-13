<?php

namespace Database\Seeders;

use App\Models\Hirers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HirersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
 
        for ($i = 1; $i <= 1000; $i++) {
            DB::table('hirers')->insert([
                'nama' => $faker->name,
                'usia' => $faker->numberBetween(25, 40),
                'alamat' => $faker->address,
                'riwayatKesehatan' => $faker->sentence,
                'keluhan' => $faker->sentence,
                'jeniskelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'notelpon' => $faker->unique()->numerify('##########'), // 10-digit unique phone number
            ]);
        }
    }
}

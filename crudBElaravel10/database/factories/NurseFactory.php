<?php

namespace Database\Factories;

use App\Models\Nurse;
use Illuminate\Database\Eloquent\Factories\Factory;

class NurseFactory extends Factory
{
    protected $model = Nurse::class;

    public function definition()
    {
        return [
            'namaNurse' => $this->faker->name,
            'pendidikanTerakhir' => $this->faker->word,
            'Rating' => $this->faker->word,
            'kategori' => $this->faker->word,
            'spesialis' => $this->faker->word,
            'foto' => $this->faker->imageUrl(),
        ];
    }
}

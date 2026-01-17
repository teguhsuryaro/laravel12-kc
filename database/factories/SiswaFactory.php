<?php

namespace Database\Factories;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->dateTimeBetween('-21 years', '-17 years')->format('Y-m-d'),
            'jurusan' => fake()->randomElement([
                'Informatika',
                'Teknik Komputer',
                'Teknik Mesin',
                'Teknik Geologi',
                'Teknik Elektro',
                'Teknik Industri',
                'Teknik Sipil'
                ]),
            'nilai' => fake()->numberBetween(78,100),
            'mentor_id' => Mentor::inRandomOrder()->first()->id
        ];
    }
}

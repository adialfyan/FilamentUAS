<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Makul;

class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nidn' => $this->faker->unique()->numerify('##########'),
            'nama' => $this->faker->name(),
            'tanggal_lahir' => $this->faker->date('Y-m-d', '-30 years'),
            'alamat' => $this->faker->address(),
            'kode_makul' => Makul::inRandomOrder()->first()->kode_makul,
        ];
    }
}

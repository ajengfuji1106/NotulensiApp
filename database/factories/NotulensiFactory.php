<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notulensi>
 */
class NotulensiFactory extends Factory
{
    protected $model = Notulensi::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hari_tanggal' => $this->faker->date(),
            'ruang_rapat' => $this->faker->word,
            'waktu' => $this->faker->time(),
            'surat_undangan' => $this->faker->sentence,
            'tipe_rapat' => $this->faker->word,
        ];
    }
}

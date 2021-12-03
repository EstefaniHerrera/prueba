<?php

namespace Database\Factories;

use App\Models\autores;
use Illuminate\Database\Eloquent\Factories\Factory;

class autoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name,
            'grado'=>$this->faker->numberbetween(1, 12),
            'autobigrafia'=>$this->faker->paragraph(3, true),
            'foto'=>$this->faker->imageUrl(640, 480),
            //
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\libros;
use Illuminate\Database\Eloquent\Factories\Factory;

class librosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ISBN'=>$this->faker->isbn13,
            'nombre_libro'=>$this->faker->text(100),
            'id_autor'=>$this->faker->numberbetween(1, 40),
            'precio_venta'=>$this->faker->randomFloat(2, 100, 1000),
            'tipo'=> $this->faker->randomElement($array = array ('fantasía','educativos','familiares', 'infantiles')),
            'noPaginas'=>$this->faker->numberbetween(120, 1500),
            //
        ];
    }
}

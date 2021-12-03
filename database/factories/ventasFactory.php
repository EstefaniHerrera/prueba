<?php

namespace Database\Factories;

use App\Models\ventas;
use Illuminate\Database\Eloquent\Factories\Factory;

class ventasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_libro'=>$this->faker->numberbetween(1, 40),
            'precio_libro'=>$this->faker->randomFloat(2, 100, 1000),
            'nombre_vendedor'=> $this->faker->name,
            'nombre_cliente'=> $this->faker->name,
            'fecha_venta'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'ciudad_venta'=> $this->faker->city
            //
        ];
    }
}

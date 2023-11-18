<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        $opciones =["temprano","tarde","falto"];
        return [

            'id_alumno'=>rand(1,20),
            'fecha'=>fake()->date(),
            'opciones'=> $opciones[random_int(0,2)],

                         
        ];
    }
}

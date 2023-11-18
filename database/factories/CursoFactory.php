<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $cursos =["Matematica","Ciencia","Fisica","Estadistica","Sociales","Artes","Quimica","Geometria"];
        return [
            'nombre'=> $cursos[random_int(0,7)]            
        ];
    }
}

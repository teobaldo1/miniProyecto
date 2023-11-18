<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $asistencia= new AsistenciaSeeder();
        $asistencia->run();
        
        $seeder= new DocenteSeeder();
        $seeder->run();

        $seederAlumno= new AlumnoSeeder();
        $seederAlumno->run();

        $seederCurso= new CursoSeeder();
        $seederCurso->run();
       
        $seederAlumnoCurso= new AlumnoCursoSeeder();
        $seederAlumnoCurso->run();
       
    }
}

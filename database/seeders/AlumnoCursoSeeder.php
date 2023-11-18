<?php

namespace Database\Seeders;

use App\Models\AlumnoCurso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlumnoCurso::factory(20)->create();
    }
}

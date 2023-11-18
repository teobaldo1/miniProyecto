<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('curso_docente_ids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('curso_id'); 
           // $table->foreign('docente_id')->references('id')->on('docentes');
           // $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_docente_ids');
    }
};

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
        Schema::create('superheroes_tablas', function (Blueprint $table) {
            $table->bigIncrements('Super_ID');
            $table->String('Nombre_Real', 50);
            $table->String('Nombre_Super', 50);
            $table->String('Fotografía', 100);
            $table->String('Información_Adnal', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes_tablas');
    }
};

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
        Schema::create('steels', function (Blueprint $table) {
            $table->id();
            $table->string('steel_grade'); // Марка сталі
            $table->string('welding_type'); // Тип зварювання
            $table->float('material_thickness'); // Товщина матеріалу
            $table->float('wire_diameter'); // Діаметр електродного дроту
            $table->string('wire_material'); // Матеріал дроту
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steels');
    }
};

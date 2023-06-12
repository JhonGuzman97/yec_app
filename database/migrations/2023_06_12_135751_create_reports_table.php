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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('code',25);
            $table->bigInteger('documento');
            $table->integer('sede');
            $table->integer('proceso');
            $table->integer('tipo_reporte');
            $table->string('img',255);
            $table->string('latitud',255);
            $table->string('longitud',255);
            $table->string('observacion',500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};

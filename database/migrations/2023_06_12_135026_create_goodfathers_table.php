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
        Schema::create('goodfathers', function (Blueprint $table) {
            $table->id();
            $table->string('code',30)->uniqid();
            $table->bigInteger('goodfather');
            $table->integer('format');
            $table->integer('result');
            $table->string('note','500');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goodfathers');
    }
};

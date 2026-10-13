<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Szobatipus;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tanuloszobak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('szobatipus_id')->constrained('szobatipusok');
            $table->string('szoba_nev');
            $table->integer('emelet');
            $table->integer('ferohely');
            $table->id('foglalt_helyek');
            $table->timestamps();
        });

        tanuloszobak.szobatipus_id -> szobatipusok.id;
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanuloszobak');
    }
};

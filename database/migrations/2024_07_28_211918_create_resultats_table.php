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
        Schema::create('resultats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipe1_id')->constrained('equipes')->onDelete('cascade');
            $table->string('nomEquipe1');
            $table->integer('scoreEquipe1');
            $table->foreignId('equipe2_id')->constrained('equipes')->onDelete('cascade');
            $table->string('nomEquipe2');
            $table->integer('scoreEquipe2');
            $table->foreignId('matchId')->constrained('matchs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultats');
    }
};

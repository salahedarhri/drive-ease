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
        //Créer réservation : 
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            //clés secondaires
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('voiture_id')->constrained('voitures');
            
            //Variables
            $table->date('datedebut');
            $table->date('datefin');
            $table->string('Statut')->default('En cours de traitement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

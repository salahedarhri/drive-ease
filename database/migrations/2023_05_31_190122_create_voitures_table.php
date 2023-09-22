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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            
            $table->string('marqueVoiture');
            $table->string('modeleVoiture');
            $table->string('anneeVoiture');
            $table->float('prixVoiture');
            $table->integer('nbSieges');
            $table->longtext('descriptionVoiture');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};

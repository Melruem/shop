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
        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_agent')->nullable();
            $table->date('date');
            $table->string('intitule');
            $table->string('detail');
            $table->string('paiement');
            $table->integer('montant_verser')->nullable();
            $table->integer('reste')->nullable();
            $table->string('nom_client')->nullable();
            $table->string('numero_client')->nullable();
            $table->string('statut')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

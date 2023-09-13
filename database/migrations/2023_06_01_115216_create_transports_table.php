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
        Schema::create('transports', function (Blueprint $table) {
            $table->increments("id");
            $table->string("date_depart");
            $table->string("date_fin");
            $table->string("heure_depart");
            $table->string("heure_arrivage");
            $table->string("num");
            $table->string("type");
            $table->string("n_place");
            $table->string("prix_achat");
            $table->string("prix_vente");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};

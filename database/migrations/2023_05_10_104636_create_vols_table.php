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
        Schema::create('vols', function (Blueprint $table) {
            $table->increments("id");
            $table->string("n_vol");
            $table->string("date_achat");
            $table->string("date_depart");
            $table->string("date_arrivée");
            $table->string("h_arrivage");
            $table->string("h_depart");
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
        Schema::dropIfExists('vols');
    }
};
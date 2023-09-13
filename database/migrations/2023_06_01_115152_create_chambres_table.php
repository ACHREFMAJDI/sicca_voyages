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
        Schema::create('chambres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id');
            $table->string('n_place');
            $table->string('num');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('prix_achat');
            $table->string('prix_vente');
            $table->string('num_etage');
            $table->timestamps();
            $table->foreign("hotel_id")->references("id")->on("hotels")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};

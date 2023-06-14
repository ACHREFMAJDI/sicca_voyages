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
        Schema::create('packs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_vol');
            $table->integer('id_chambre');
            $table->integer('id_transport');
            $table->integer('id_service');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('description');
            $table->string('destination');
            $table->string('prix');
            $table->timestamps();
            $table->foreign("id_vol")->references("id")->on("vols")->onDelete("cascade");
            $table->foreign("id_chambre")->references("id")->on("chambres")->onDelete("cascade");
            $table->foreign("id_transport")->references("id")->on("transports")->onDelete("cascade");
            $table->foreign("id_service")->references("id")->on("services")->onDelete("cascade");

        });
    }

    /**
     * "date_debut",
     *   "date_fin",
     *   "description",
     *   "destination",
     *   "prix"
     */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packs');
    }
};

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
        Schema::create('factures', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("client_id");
            $table->integer("reservation_id");
            $table->string("total");
            $table->timestamps();
            $table->foreign("client_id")->references("id")->on("clients")->onDelete("cascade");
            $table->foreign("reservation_id")->references("id")->on("reservations")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};

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
        Schema::create('compro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compro_id')->nullable();
            $table->foreign('compro_id')->references('id')->on('cliente')->onDelete('cascade');
            $table->unsignedBigInteger('compro_idp');
            $table->foreign('compro_idp')->references('id')->on('producto')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compro');
    }
};

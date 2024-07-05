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
        Schema::create('adhesions-avantages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adhesion_id')->constrained('adhesions')
            ->onDelete('cascade');
            $table->foreignId('avantage_id')->constrained('avantages')
            ->onDelete('cascade');
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

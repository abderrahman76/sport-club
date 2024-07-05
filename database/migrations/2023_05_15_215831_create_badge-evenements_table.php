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
        Schema::create('badge_venements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evenement_id')->constrained('evenements')
            ->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')
            ->onDelete('cascade');
            $table->string('user_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('badge_evenements');
    }
};
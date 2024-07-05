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
        Schema::create('adhesion_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('adhesion_id')->constrained('adhesions')
            ->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')
            ->onDelete('cascade');
            $table->string('adhesion_code');
            $table->date('endDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adhesion_users');
    }
};

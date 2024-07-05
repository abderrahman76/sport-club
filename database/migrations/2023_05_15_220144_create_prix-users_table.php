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
        Schema::create('prix-user', function (Blueprint $table) {
            $table->id();
            $table->string('prix_code');
            $table->foreignId('user_id')->constrained('users')
            ->onDelete('cascade');
            $table->foreignId('prix_id')->constrained('prixes')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prix-users');
    }
};

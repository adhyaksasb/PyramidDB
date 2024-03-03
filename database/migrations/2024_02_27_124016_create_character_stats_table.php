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
        Schema::create('character_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('hp');
            $table->integer('atk');
            $table->integer('def');
            $table->integer('spd');
            $table->float('crit_rate');
            $table->float('crit_dmg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_stats');
    }
};

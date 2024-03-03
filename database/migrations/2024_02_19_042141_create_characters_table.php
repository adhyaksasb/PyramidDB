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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tag');
            $table->integer('rarity');
            $table->string('element');
            $table->integer('path_id');
            $table->integer('max_sp');
            $table->string('release_version');
            $table->string('icon');
            $table->string('preview');
            $table->string('portrait');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};

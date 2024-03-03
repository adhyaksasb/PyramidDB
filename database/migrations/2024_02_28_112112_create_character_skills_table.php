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
        Schema::create('character_skills', function (Blueprint $table) {
            $table->id();
            $table->integer('character_id');
            $table->string('name');
            $table->integer('max_level');
            $table->string('element');
            $table->string('type');
            $table->string('effect');
            $table->text('simple_desc');
            $table->text('description');
            $table->json('level');
            $table->string('icon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_skills');
    }
};

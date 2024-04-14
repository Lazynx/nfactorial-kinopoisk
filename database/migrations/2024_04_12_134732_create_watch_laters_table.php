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
      Schema::create('watch_laters', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->unsignedBigInteger('movie_id');
        $table->string('name_ru')->nullable();
        $table->string('name_original')->nullable();
        $table->string('country')->nullable();
        $table->string('genre')->nullable();
        $table->year('year')->nullable();
        $table->float('rating_kinopoisk')->nullable();
        $table->string('poster_url_preview')->nullable();
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('watch_laters');
    }
};

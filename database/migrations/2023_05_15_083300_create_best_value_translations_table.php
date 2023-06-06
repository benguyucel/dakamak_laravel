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
        Schema::create('best_value_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('best_value_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('locale', 2);
            $table->string('title', 30)->nullable();
            $table->string('text', 300)->nullable();
            $table->unique(['locale', 'best_value_id']);
            $table->foreign('locale')->references('locale')->on('system_languages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('best_value_translations');
    }
};

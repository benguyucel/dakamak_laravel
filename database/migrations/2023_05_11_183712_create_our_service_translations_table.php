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
        Schema::create('our_service_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('our_service_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('locale', 2);
            $table->string('title', 30)->nullable();
            $table->string('text', 100)->nullable();
            $table->unique(['locale', 'our_service_id']);
            $table->foreign('locale')->references('locale')->on('system_languages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_service_translations');
    }
};

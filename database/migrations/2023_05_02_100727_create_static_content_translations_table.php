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
        Schema::create('static_content_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('static_content_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('locale', 2);
            $table->string('hero_text')->nullable();
            $table->string('about_us_title', 200)->nullable();
            $table->text('about_us_content_text')->nullable();
            $table->unique(['locale', 'static_content_id']);
            $table->foreign('locale')->references('locale')->on('system_languages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('static_content_translations');
    }
};

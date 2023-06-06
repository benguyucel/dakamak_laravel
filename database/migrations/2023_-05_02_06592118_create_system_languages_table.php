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
        Schema::create('system_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', 2);
            $table->string('language');
            $table->boolean('status')->default(0);
            $table->unique(['locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_languages');
    }
};

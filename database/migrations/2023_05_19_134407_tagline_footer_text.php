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
        Schema::table('static_content_translations', function (Blueprint $table) {
            $table->string('bottom_tagline_text', 250)->nullable();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('static_content_translations', function (Blueprint $table) {
            $table->dropColumn('bottom_tagline_text', 250);
        });
    }
};

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
        Schema::table('static_contents', function (Blueprint $table) {
            $table->string('about_us_home_image', 500)->nullable();
            $table->string('about_us_page_image', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('static_contents', function (Blueprint $table) {
            $table->dropColumn('about_us_home_image', 500);
            $table->dropColumn('about_us_page_image', 500);
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_skill_categories', function (Blueprint $table) {
            $table->id();
            $table->string('skill_category', 50); //contoh: English, Indonesian (Bahasa), PHP, Laravel, Javascript (hardskill), Communication, Public speaking (softskill)
            $table->string('skill_type', 50); // language, hardskill, softskill
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_skill_categories');
    }
};

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
        Schema::create('profile_url_categories', function (Blueprint $table) {
            $table->id();
            $table->string('url_icon')->nullable();
            $table->string('url_category');
            $table->string('url_category_type'); // sosmed, repository, linkedin, dll
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
        Schema::dropIfExists('profile_url_categories');
    }
};

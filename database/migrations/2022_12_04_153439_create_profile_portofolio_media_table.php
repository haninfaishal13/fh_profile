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
        Schema::create('profile_portofolio_media', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_portofolio_id');
            $table->string('portofolio_media_path');
            $table->string('portofolio_media_extension', 10);
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
        Schema::dropIfExists('profile_portofolio_media');
    }
};

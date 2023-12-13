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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('web_name');
            $table->string('web_logo');
            $table->string('web_slogan');
            $table->string('log_fav_icon');
            $table->string('web_email');
            $table->string('web_address');
            $table->string('web_phone');
            $table->string('facebook_link');
            $table->string('insta_link');
            $table->string('twitter_link');
            $table->string('youtube_link');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

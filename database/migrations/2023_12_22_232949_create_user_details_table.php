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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('id_card_photo');
            $table->string('cover_photo')->nullable();
            $table->string('custom_status');
            $table->integer('tfa_is_on')->default(0)->comment('0=not verified, 1=verified');
            $table->string('recently_used_device');
            $table->text('about_me');
            

            $table->string('timezone');
            $table->string('location');
            $table->string('website');
            $table->string('profile_header');
            $table->string('user_card_background');
            $table->unsignedBigInteger('feratured_topic');
			$table->foreign('feratured_topic')->references('id')->on('posts')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};

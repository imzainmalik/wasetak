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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('review_to');
			$table->foreign('review_to')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('review_by');
			$table->foreign('review_by')->references('id')->on('users')->onDelete('cascade');

            $table->integer('stars');
            $table->text('feedback');
            $table->integer('is_active')->dafault(0) ->comment('0=inactive, 1=active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};

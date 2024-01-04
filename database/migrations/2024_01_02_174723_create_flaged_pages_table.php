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
        Schema::create('flaged_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');	
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('page_id');	
            $table->foreign('page_id')->references('id')->on('admin_pages')->onDelete('cascade');
            $table->string('reveal')->default(0);
            $table->string('inappropriate')->default(0);
            $table->string('its_spam')->default(0);
            $table->string('something_else')->default(0);
            $table->longText('reason');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flaged_pages');
    }
};
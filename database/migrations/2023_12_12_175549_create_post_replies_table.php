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

        Schema::create('post_replies', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('user_id');	
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			
			$table->unsignedBigInteger('post_id');	
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->text('reply');
            $table->integer('is_active')->default(1)->comment('0=inactive, 1=active');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_replies');
    }
};

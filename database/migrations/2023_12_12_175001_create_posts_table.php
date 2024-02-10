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

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('user_id');	
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        	$table->unsignedBigInteger('category_id');	
			$table->foreign('category_id')->references('id')->on('forum_categories')->onDelete('cascade');

            $table->unsignedBigInteger('sub_category_id');	
			$table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');

            $table->string('title');
            $table->longText('description')->nullable();
            $table->dateTime('bid_start_date')->nullabe();
            $table->dateTime('bid_end_date')->nullabe();
            $table->string('price')->nullable();
            $table->string('handle_url')->nullable();
            $table->bigInteger('post_type')->comment('0=discussion, 1=trading, 2=auction');
            $table->bigInteger('is_featured')->default(0)->comment('1=featured, 0= Un-featured');
            $table->bigInteger('is_active')->default(0)->comment('1=active, 0=inactive');
            $table->bigInteger('status')->default(0)->comment('0=pending, 1=approved, 2=rejected, 3=deleted');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

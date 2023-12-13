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
        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('sub_category_id');
			$table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('color');
            $table->bigInteger('is_active')->default(1)->comment('1=active, 0=inactive');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_sub_categories');
    }
};

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
        Schema::create('admin_pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('content');
            $table->string('slug')->unique();
            $table->bigInteger('is_active')->nullable()->default(1)->comment('1=active, 0=inactive');
            $table->unsignedBigInteger('parent_id');	
			$table->foreign('parent_id')->references('id')->on('admin_pages')->onDelete('cascade');
            $table->unsignedBigInteger('admin_id');	
			$table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_pages');
    }
};

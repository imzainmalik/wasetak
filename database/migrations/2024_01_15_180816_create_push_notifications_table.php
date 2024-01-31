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
        Schema::create('push_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('body')->nullable();
            $table->integer('user_id_from')->nullable();
            $table->integer('user_id_to')->nullable();
            $table->integer('admin_id_from')->nullable();
            $table->integer('un_read')->default(0)->nullable();
            $table->string('url')->nullable();
            $table->integer('type')->default(0)->comment('0 = Admin 1 = Post | 2 = Post Comment | 3 = Post Comment Like | 4 = Page | 5 = Other')->nullable();
            $table->integer('type_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('push_notifications');
    }
};

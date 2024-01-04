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
        Schema::create('page_bookmarks', function (Blueprint $table) {
            $table->id();
            $table->string('bookmark_for')->nullable();
            $table->string('notified')->comment('0-Keep BookMark, 1- Keep Bookmark And Clear Reminder, 2-Delete Bookmark, 3-Delete Bookmark Once I Reply')->nullable();
            $table->string('reminder_me')->nullable();
            $table->timestamp('date_and_Time')->nullable();
            $table->integer('status')->comment('0 - pending 1 - recieved 2- draft')->nullable();
            $table->unsignedBigInteger('user_id');	
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('page_id');	
            $table->foreign('page_id')->references('id')->on('admin_pages')->onDelete('cascade');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_bookmarks');
    }
};

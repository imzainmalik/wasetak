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
        Schema::create('user_notified_allows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');	
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('notifictoion_type')->default(2)->comment(' 1 = Watching | 2 = Tracking | 3 = Normal | 4 = Mute');
            $table->integer('type')->default(0)->comment('0 Page | 1 Post');
            $table->integer('type_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_notified_allows');
    }
};

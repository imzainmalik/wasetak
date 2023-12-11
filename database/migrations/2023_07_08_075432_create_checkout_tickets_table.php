<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('checkout_tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('other_user_id')->unsigned()->nullable();
            $table->boolean('is_seller')->nullable()->default(false);
            $table->enum('ticket_for', ['Service','Item'])->nullable();
            $table->longText('service_describe')->nullable();
            $table->longText('long_service_take')->nullable();
            $table->longText('service_rate')->nullable();
            $table->enum('payment_method', ['paypal','bank_wire','bitcoin','ethereum','usdt'])->nullable();
            $table->float('transaction_amount')->nullable();
            $table->longText('additional_comment')->nullable();
            $table->longText('handle_url')->nullable();
            $table->enum('original_email_included', ['yes','no','does_not_apply'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('checkout_tickets');
    }
};

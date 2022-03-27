<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_details');
            $table->text('order_location');
            $table->string('order_mobile');
            $table->string('order_user_name');
            $table->timestamp('order_date')->useCurrent();
            $table->string('order_total');
            $table->string('order_status');
            $table->foreignId('order_user_id')->unsigned()->references('id')->on('users')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

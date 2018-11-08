<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('coupons_id');
            $table->decimal('amount',10,2);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name')->nullable(true);
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
            $table->enum('status',['pay','stock','finish','cancel']);
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

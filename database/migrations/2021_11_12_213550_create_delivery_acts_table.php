<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryActsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_acts', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('type');
            $table->string('location');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('seller_id','seller_idx');
            $table->foreign('seller_id','seller_fk')->on('users')->references('id');
            $table->index('customer_id','customer_idx');
            $table->foreign('customer_id','customer_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_acts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('status');
            $table->unsignedBigInteger('curator_id');
            $table->unsignedBigInteger('volunteer_id');
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('ward_id')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->date('date');
            $table->unsignedBigInteger('act_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('curator_id', 'curator_idx');
            $table->foreign('curator_id', 'curator_fk')->on('users')->references('id');
            $table->index('volunteer_id', 'volunteer_idx');
            $table->foreign('volunteer_id', 'volunteer_fk')->on('users')->references('id');
            $table->index('seller_id', 'seller_idx');
            $table->foreign('seller_id', 'seller_fk')->on('users')->references('id');
            $table->index('ward_id', 'ward_idx');
            $table->foreign('ward_id', 'ward_fk')->on('users')->references('id');
            $table->index('act_id', 'act_idx');
            $table->foreign('act_id', 'act_fk')->on('acts')->references('id');
            $table->index('shop_id','shop_deliveries_idx');
            $table->foreign('shop_id','shop_deliveries_fk')->on('shops')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('deliveries');

        Schema::enableForeignKeyConstraints();

    }
}

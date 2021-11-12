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
            $table->unsignedBigInteger('ward_id');
            $table->timestamps();
            $table->date('received_at');
            $table->date('delivered_at');
            $table->unsignedBigInteger('acceptance_act_id');
            $table->unsignedBigInteger('delivery_act_id');
            $table->softDeletes();

            $table->index('curator_id', 'curator_idx');
            $table->foreign('curator_id', 'curator_fk')->on('users')->references('id');
            $table->index('volunteer_id', 'volunteer_idx');
            $table->foreign('volunteer_id', 'volunteer_fk')->on('users')->references('id');
            $table->index('ward_id', 'ward_idx');
            $table->foreign('ward_id', 'ward_fk')->on('users')->references('id');
            $table->index('acceptance_act_id', 'acceptance_act_idx');
            $table->foreign('acceptance_act_id', 'acceptance_act_fk')->on('delivery_acts')->references('id');
            $table->index('delivery_act_id', 'delivery_act_idx');
            $table->foreign('delivery_act_id', 'delivery_act_fk')->on('delivery_acts')->references('id');
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

        Schema::table('deliveries', function(Blueprint $table){
            $table->dropIndex('curator_idx');
            $table->dropForeign('curator_fk');
            $table->dropIndex('volunteer_idx');
            $table->dropForeign('volunteer_fk');
            $table->dropIndex('ward_idx');
            $table->dropForeign('ward_fk');
            $table->dropIndex('acceptance_act_idx');
            $table->dropForeign('acceptance_act_fk');
            $table->dropIndex('delivery_act_idx');
            $table->dropForeign('delivery_act_fk');
        });

        Schema::dropIfExists('deliveries');
    }
}

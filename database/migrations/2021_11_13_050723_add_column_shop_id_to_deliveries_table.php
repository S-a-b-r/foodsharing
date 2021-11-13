<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnShopIdToDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deliveries', function (Blueprint $table) {

            $table->unsignedBigInteger('shop_id')->after('curator_id')->nullable();

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

        Schema::table('deliveries', function (Blueprint $table) {
            $table->dropForeign('shop_deliveries_fk');
            $table->dropIndex('shop_deliveries_idx');
            $table->dropColumn('shop_id');
        });
    }
}

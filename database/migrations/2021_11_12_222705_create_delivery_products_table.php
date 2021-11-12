<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('delivery_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->index('delivery_id','delivery_idx');
            $table->foreign('delivery_id','delivery_fk')->on('deliveries')->references('id');
            $table->index('product_id','product_idx');
            $table->foreign('product_id','product_fk')->on('products')->references('id');
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
        Schema::table('deliveries', function(Blueprint $table) {
            $table->dropIndex('delivery_idx');
            $table->dropForeign('delivery_fk');
            $table->dropIndex('product_idx');
            $table->dropForeign('product_fk');
        });
        Schema::dropIfExists('delivery_products');
    }
}

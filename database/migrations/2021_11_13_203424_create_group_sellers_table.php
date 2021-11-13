<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_sellers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();

            $table->index('seller_id', 'group_sellers_idx');
            $table->index('group_id', 'sellers_group_idx');
            $table->foreign('seller_id', 'group_sellers_fk')->on('users')->references('id');
            $table->foreign('group_id', 'sellers_group_fk')->on('groups')->references('id');;
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
        Schema::table('group_sellers', function (Blueprint $table){
            $table->dropIndex('sellers_group_idx');
            $table->dropIndex('group_sellers_idx');
            $table->dropForeign('group_sellers_fk');
            $table->dropForeign('sellers_group_fk');
        });
        Schema::dropIfExists('group_sellers');
    }
}

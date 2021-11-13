<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('curator_id');
            $table->unsignedBigInteger('shop_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('curator_id','curator_idxe');
            $table->index('shop_id','shop_idxe');

            $table->foreign('curator_id','curator_fke')->on('users')->references('id');
            $table->foreign('shop_id','shop_fke')->on('shops')->references('id');
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
        Schema::table('groups', function(Blueprint $table){
            $table->dropForeign('shop_fke');
            $table->dropForeign('curator_fke');
            $table->dropIndex('curator_idxe');
            $table->dropIndex('shop_idxe');
        });
        Schema::dropIfExists('groups');
    }
}

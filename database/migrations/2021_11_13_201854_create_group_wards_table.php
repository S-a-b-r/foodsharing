<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('group_wards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ward_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();

            $table->index('ward_id', 'group_wards_idx');
            $table->index('group_id', 'wards_group_idx');
            $table->foreign('ward_id', 'group_wards_fk')->on('users')->references('id');
            $table->foreign('group_id', 'wards_group_fk')->on('groups')->references('id');;
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
        Schema::table('group_wards', function (Blueprint $table){
            $table->dropIndex('wards_group_idx');
            $table->dropIndex('group_wards_idx');
            $table->dropForeign('group_wards_fk');
            $table->dropForeign('wards_group_fk');
        });
        Schema::dropIfExists('group_wards');
    }
}

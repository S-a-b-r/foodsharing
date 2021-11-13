<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_volunteers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('volunteer_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();

            $table->index('volunteer_id', 'group_volunteers_idx');
            $table->index('group_id', 'volunteers_group_idx');
            $table->foreign('volunteer_id', 'group_volunteers_fk')->on('users')->references('id');
            $table->foreign('group_id', 'volunteers_group_fk')->on('groups')->references('id');;
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
        Schema::table('group_volunteers', function (Blueprint $table){
            $table->dropIndex('volunteers_group_idx');
            $table->dropIndex('group_volunteers_idx');
            $table->dropForeign('group_volunteers_fk');
            $table->dropForeign('volunteers_group_fk');
        });
        Schema::dropIfExists('group_volunteers');
    }
}

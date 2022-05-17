<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('volunteer_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();

            $table->index('volunteer_id','volunteer_idxe');
            $table->index('group_id','group_idxe');

            $table->foreign('volunteer_id','volunteer_fke')->on('users')->references('id');
            $table->foreign('group_id','group_fke')->on('groups')->references('id');
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
        Schema::dropIfExists('timetables');
        Schema::enableForeignKeyConstraints();
    }
}

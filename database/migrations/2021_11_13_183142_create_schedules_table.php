<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->date('start_week');
            $table->unsignedBigInteger('monday_user_id')->nullable();
            $table->unsignedBigInteger('tuesday_user_id')->nullable();
            $table->unsignedBigInteger('wednesday_user_id')->nullable();
            $table->unsignedBigInteger('thursday_user_id')->nullable();
            $table->unsignedBigInteger('friday_user_id')->nullable();
            $table->unsignedBigInteger('saturday_user_id')->nullable();
            $table->unsignedBigInteger('sunday_user_id')->nullable();
            $table->timestamps();

            $table->foreign('group_id','schedules_group_fk')->on('groups')->references('id');
            $table->foreign('monday_user_id','monday_fk')->on('users')->references('id');
            $table->foreign('tuesday_user_id','tuesday_fk')->on('users')->references('id');
            $table->foreign('wednesday_user_id','wednesday_fk')->on('users')->references('id');
            $table->foreign('thursday_user_id','thursday_fk')->on('users')->references('id');
            $table->foreign('friday_user_id','friday_fk')->on('users')->references('id');
            $table->foreign('saturday_user_id','saturday_fk')->on('users')->references('id');
            $table->foreign('sunday_user_id','sunday_fk')->on('users')->references('id');

            $table->index('group_id', 'schedules_group_idx');
            $table->index('monday_user_id','monday_idx');
            $table->index('tuesday_user_id','tuesday_idx');
            $table->index('wednesday_user_id','wednesday_idx');
            $table->index('thursday_user_id','thursday_idx');
            $table->index('friday_user_id','friday_idx');
            $table->index('saturday_user_id','saturday_idx');
            $table->index('sunday_user_id','sunday_idx');

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

        Schema::table('schedules', function(Blueprint $table){

            $table->dropForeign('schedules_group_fk');
            $table->dropForeign('monday_fk');
            $table->dropForeign('tuesday_fk');
            $table->dropForeign('wednesday_fk');
            $table->dropForeign('thursday_fk');
            $table->dropForeign('friday_fk');
            $table->dropForeign('saturday_fk');
            $table->dropForeign('sunday_fk');

            $table->dropIndex('schedules_group_idx');
            $table->dropIndex('monday_idx');
            $table->dropIndex('tuesday_idx');
            $table->dropIndex('wednesday_idx');
            $table->dropIndex('thursday_idx');
            $table->dropIndex('friday_idx');
            $table->dropIndex('saturday_idx');
            $table->dropIndex('sunday_idx');
        });
        Schema::dropIfExists('schedules');
    }
}

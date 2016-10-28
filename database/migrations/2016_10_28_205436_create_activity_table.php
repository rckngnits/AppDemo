<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_user_id')->unsigned();
            $table->foreign('fk_user_id')->references('id')->on('users');
            $table->integer('fk_task_id')->unsigned();
            $table->foreign('fk_task_id')->references('id')->on('tasks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('activities');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

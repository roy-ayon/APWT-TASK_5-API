<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->increments('manager_id');
            $table->string('manager_name', 20);
            $table->string('manager_address', 20);
            $table->string('manager_phone', 12);
            $table->string('manager_gender', 10);
            $table->string('manager_nid', 20);
            $table->date('manager_dob', 20);
            $table->string('manager_image');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('usertables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('managers');
    }
}

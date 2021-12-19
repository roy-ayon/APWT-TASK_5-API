<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBachelorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bachelors', function (Blueprint $table) {
            $table->increments('bachelor_id');
            $table->string('bachelor_name', 20);
            $table->string('bachelor_address', 20);
            $table->string('bachelor_phone', 12);
            $table->string('bachelor_gender', 10);
            $table->string('bachelor_nid', 20);
            $table->date('bachelor_dob', 20);
            $table->string('bachelor_image');
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
        Schema::dropIfExists('bachelors');
    }
}

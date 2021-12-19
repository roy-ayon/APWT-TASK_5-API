<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatownersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flatowners', function (Blueprint $table) {
            $table->increments('flatowner_id');
            $table->string('flatowner_name', 20);
            $table->string('flatowner_address', 20);
            $table->string('flatowner_phone', 12);
            $table->string('flatowner_gender', 10);
            $table->string('flatowner_nid', 20);
            $table->date('flatowner_dob', 20);
            $table->string('flatowner_image');
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
        Schema::dropIfExists('flatowners');
    }
}

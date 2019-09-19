<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestFlowTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_flow_tbl', function (Blueprint $table) {
            $table->increments('flow_id');
            $table->integer('sub_test_id')->unsigned();
            $table->foreign('sub_test_id')->references('sub_test_id')->on('sub_test_tbl');
            $table->integer('stage');
            $table->integer('sub_test_depending_id');
            $table->integer('status');
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
        Schema::dropIfExists('test_flow_tbl');
    }
}

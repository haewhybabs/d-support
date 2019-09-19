<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTestDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_test_detail', function (Blueprint $table) {
            $table->increments('detail_id');
            $table->integer('summary_id')->unsigned();
            $table->foreign('summary_id')->references('summary_id')->on('patient_test_summary');
            $table->integer('sub_test_id')->unsigned();
            $table->foreign('sub_test_id')->references('sub_test_id')->on('sub_test_tbl');
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
        Schema::dropIfExists('patient_test_detail');
    }
}

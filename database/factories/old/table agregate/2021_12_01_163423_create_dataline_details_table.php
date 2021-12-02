<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateDatalineDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataline_details', function (Blueprint $table) {
            $table->id();
            $table->string('data_value')->nullable();

            $table->unsignedBigInteger('datas_lines_id');
            $table->foreign('datas_lines_id')->references('id')->on('datas_lines');

            $table->unsignedBigInteger('ag_items_id');
            $table->foreign('ag_items_id')->references('id')->on('ag_items');

            $table->string('data_month')->nullable();
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataline_details');
    }
}

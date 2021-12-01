<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_details', function (Blueprint $table) {
            $table->id();
            $table->string('data_value')->nullable();

            $table->unsignedBigInteger('data_id');
            $table->foreign('data_id')->references('id')->on('datas');

            $table->unsignedBigInteger('aggre_item_id');
            $table->foreign('aggre_item_id')->references('id')->on('aggre_items');

            $table->string('month')->nullable();
            $table->integer('status')->default(1);

            // $table->timestamp('created_at')->nullable();

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
        Schema::dropIfExists('data_details');
    }
}

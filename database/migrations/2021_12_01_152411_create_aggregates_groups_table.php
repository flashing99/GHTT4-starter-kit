<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAggregatesGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aggregates_groups', function (Blueprint $table) {
            $table->id();
            $table->text('group_name')->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->unsignedBigInteger('aggregates_groups_id');
            $table->foreign('aggregates_groups_id')->references('id')->on('aggregates_groups')->onDelete('cascade');
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
        Schema::dropIfExists('aggregates_groups');
    }
}

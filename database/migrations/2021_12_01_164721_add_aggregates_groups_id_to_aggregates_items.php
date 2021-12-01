<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\AggregatesItem;

class AddAggregatesGroupsIdToAggregatesItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aggregates_items', function (Blueprint $table) {
            $table->unsignedBigInteger('aggregates_groups_id')->nullable();
            $table->foreign('aggregates_groups_id')->references('id')->on('aggregates_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aggregates_items', function (Blueprint $table) {
            $table->dropForeign('aggregates_items.aggregates_groups_id_foreign');
        });
    }
}

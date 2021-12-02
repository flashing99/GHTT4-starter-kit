<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\AgItem;

class AddAgGroupsIdToAgItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ag_items', function (Blueprint $table) {
            $table->unsignedBigInteger('ag_groups_id')->nullable();
            $table->foreign('ag_groups_id')->references('id')->on('ag_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ag_items', function (Blueprint $table) {
            $table->dropForeign('ag_items.ag_groups_id_foreign');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\models\ AgGroup;
use Illuminate\Support\Facades\DB;

class CreateAgGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_groups', function (Blueprint $table) {
            $table->id();
            $table->text('group_name')->nullable();
            $table->integer('status')->nullable()->default(1);
            // $table->unsignedBigInteger('ag_groups_id');
            // $table->foreign('ag_groups_id')->references('id')->on('ag_groups')->onDelete('cascade');
            $table->timestamps();
        });


        $aggr_groups = [
            "G-1", "G-2", "G-3", "G-4", "G-5", "G-6"
        ];

        foreach ($aggr_groups as $aggr_group) {

            //Filiale::create(['filiale_name' => $filiale]);
            DB::insert('insert into ag_groups (group_name,status, created_at) values (?,?,?)', [$aggr_group, 1, date("Y-m-d H:i:s")]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ag_groups');
    }
}

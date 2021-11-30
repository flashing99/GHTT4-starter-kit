<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Filiale;

class CreateFilialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiales', function (Blueprint $table) {
            $table->id();
            $table->String('filiale_name', 30)->nullable();
            $table->timestamps();
        });


        //! fill table Subsidiary with data 
        $filiales = [
            "EGT CENTRE",
            "EGH EL AURASSI",
            "EGH EL DJAZAIR",
            "EGT EST",
            "EGT ANNABA",
            "EGT SIDI FREDJ",
            "EGT ZERALDA",
            "EGT TIPAZA",
            "EGT ANDALOUSES",
            "EGT BISKRA",
            "EGT TAMANRASSET",
            "EGT OUEST",
            "EGT GHARDAIA",
            "EGT TLEMCEN",
            "EGT THALASSOTHERAPIE",
            "EGT HAMMAM RIGHA",
            "ET KABYLIE",
        ];
        foreach ($filiales as $filiale) {

            Filiale::create(['filiale_name' => $filiale]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filiales');
    }
}

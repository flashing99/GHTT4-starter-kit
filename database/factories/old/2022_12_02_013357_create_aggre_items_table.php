<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\AggregateItem;

class CreateAggreItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aggre_items', function (Blueprint $table) {
            $table->id();
            $table->text('item_name')->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->String('compte_scf')->nullable();

            $table->unsignedBigInteger('aggre_groups_id');
            $table->foreign('aggre_groups_id')->references('id')->on('aggre_groups')->onDelete('cascade');

            $table->timestamps();
        });



        $aggregates = [

            "Vente de Marchandises ",
            "ventes de produits finis et intermédiaires",
            "ventes de travaux",
            "ventes d'études et autres prestations",
            "autres",
            "Production Stockée  ou destockée ",
            "Production immobilisée",
            "subvention d'exploitation",
            "Production de la période",
            "Valeur ajoutée",
            "charges de personnel",
            "Impôts, taxes et versements assimilés",
            "EBE ",
            "concours bancaires courants",
            "Créances clients globales (montant bruts)",
            "Effectif global",
            "dont effectifs Permanents",
        ];

        foreach ($aggregates as $value) {

            AggregateItem::create(['item_name' => $value]);
        };
        /* 
        $compte_scfs = [
            "700",
            "701&702",
            "704",
            "705&706",
            "703,708,709",
            "",
            "72",
            "73",
            "74",
            "",
            "60",
            "600",
            "601",
            "604",
            "61",
            "62",
            "",
            "63",
            "64",
            "",
            "",
            "519",
            "411",
            "",
            "",

        ];
        foreach ($aggregates as $value) {

            // AggregateItem::create(['filiale_name' => $value]);
            AggregateItem::insert('insert into users ( filiale_name) values (?)', ['filiale_name' => $value]) ();
        };
        foreach ($compte_scfs as $value2) {

            AggregateItem::insert('insert into aggre_items (compte_scf) values (?)', (['compte_scf' => $value2]));
        }  */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aggre_items');
    }
}

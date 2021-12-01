<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\AggregatesItem;
// use Illuminate\Support\Facades\DB;

class CreateAggregatesItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aggregates_items', function (Blueprint $table) {

            $table->id();
            $table->String('item_name', 255)->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->String('compte_scf')->nullable();

            // $table->unsignedBigInteger('aggregates_groups_id')->default(10000);
            // $table->foreign('aggregates_groups_id')->references('id')->on('aggregates_groups')->onDelete('cascade')->default('');


            $table->timestamps();
        });


        /*     $aggregates = [
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

        foreach ($aggregates as $aggregate) {

            AggregatesItem::create(['item_name' => $aggregate]);
        };

 */


        /* $aggregates = [

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

            // DB::insert('insert into aggregates_items (item_name) values (?)', ['item_name' => $value]);

            // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])

            AggregateItem::create(['item_name' => $value]);
        };  */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aggregates_items');
    }
}

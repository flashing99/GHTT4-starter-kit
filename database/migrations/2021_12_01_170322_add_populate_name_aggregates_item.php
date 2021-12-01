<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\AggregatesItem;
use Illuminate\Support\Facades\DB;

class AddPopulateNameAggregatesItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //


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

        foreach ($aggregates as $aggregate) {

            AggregatesItem::create(['item_name' => $aggregate]);
            // DB::insert('insert into aggregates_items (id,item_name,status,compte_scf,aggregates_groups_id) values ( ?,?,?,?,?)', ['id', 'item_name', 1, '', '']);
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

        foreach ($compte_scfs as $compte_scf) {

            // DB::insert('insert into aggregates_items (item_name) values (?)', ['item_name' => $value]);

            // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])

            AggregatesItem::create(['compte_scf' => $compte_scf]);
        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

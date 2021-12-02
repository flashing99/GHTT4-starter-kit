<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\AgItem;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;

class CreateAgItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ag_items', function (Blueprint $table) {

            $table->id();
            $table->String('item_name', 255)->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->String('compte_scf')->nullable();

            // $table->unsignedBigInteger('ag_groups_id')->default(10000);
            // $table->foreign('ag_groups_id')->references('id')->on('ag_groups')->onDelete('cascade')->default('');

            $table->unsignedBigInteger('ag_groups_id')->nullable();
            $table->foreign('ag_groups_id')->references('id')->on('ag_groups')->onDelete('cascade');


            $table->timestamps();
        });



        $aggregates = [
            "Vente de Marchandises ",
            "ventes de produits finis et intermédiaires",
            "ventes de travaux",
            "ventes d'études et autres prestations",
            "autres",
            "Chiffre d'Affaires",

            "Production Stockée  ou destockée ",
            "Production immobilisée",
            "subvention d'exploitation",
            "Production de la période",

            "achats consommés",
            "dont achats de marchandises",
            "matières premières",
            "achats d'études et de prestations de services",
            "autres services extérieurs",
            "Services extérieurs",
            "Consommations de la période",

            "Valeur ajoutée",

            "charges de personnel",
            "Impôts, taxes et versements assimilés",
            "EBE ",

            "concours bancaires courants",
            "Créances clients globales (montant bruts)",
            "Effectif global",
            "dont effectifs Permanents",

        ];

        /* foreach ($aggregates as $aggregate) {

            AgItem::create(['item_name' => $aggregate]);
            // DB::insert('insert into ag_items (id,item_name,status,compte_scf,ag_groups_id) values ( ?,?,?,?,?)', ['id', 'item_name', 1, '', '']);
        }; */


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
            "",
            "63",
            "64",
            "",

            "519",
            "411",
            "",
            "",

        ];

        foreach ($aggregates as $key => $value) {
            //echo $key.": ";
            $aggregate = $value;
            $compte_scf =  $compte_scfs[$key];

            echo $aggregate . ' : ' . $compte_scf . "\n";
            // AgItem::create(['item_name' => $aggregate, 'compte_scf' => $compte_scf]);
            DB::insert('insert into ag_items (item_name,status,compte_scf) values ( ?,?,?)', [$aggregate, 1, $compte_scf]);
        }

        /* foreach ($compte_scfs as $compte_scf) {

            // DB::insert('insert into ag_items (item_name) values (?)', ['item_name' => $value]);

            // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])

            AgItem::create(['compte_scf' => $compte_scf]);
        }; */


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

            AgItem::create(['item_name' => $aggregate]);
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

            // DB::insert('insert into ag_items (item_name) values (?)', ['item_name' => $value]);

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
        Schema::dropIfExists('ag_items');
    }
}

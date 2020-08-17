<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->Increments('id_compte');
            $table->integer('clients_id')->unsigned();
            $table->foreign('clients_id')->references('id_client')->on('clients');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                  ->on('users');
            $table->string('tyco');
            $table->string('agence');
            $table->string('rib');
            $table->string('numcompte');
            $table->string('montant');
            $table->string('salaire');
            $table->string('profession');
            $table->string('frais');
            $table->string('agios');
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
        Schema::dropIfExists('comptes');
    }
}

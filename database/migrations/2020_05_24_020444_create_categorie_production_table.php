<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorieProductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_production', function (Blueprint $table) {
            $table->integer('production_id')->unsigned()->index();
            $table->integer('categorie_id')->unsigned()->index();
        });

        Schema::table('categorie_production', function (Blueprint $table) {
            $table->foreign('production_id')->references('id')->on('productions');
            $table->foreign('categorie_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorie_production');
    }
}

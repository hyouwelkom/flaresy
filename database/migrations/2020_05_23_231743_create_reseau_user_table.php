<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReseauUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseau_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index();
            $table->integer('reseau_id')->unsigned()->index();
            $table->string('link');
        });

        Schema::table('reseau_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('reseau_id')->references('id')->on('reseaux')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reseau_user');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections_items', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_collection');
            $table->integer('created_by')->unsigned();
            $table->integer('id_nft')->unsigned();
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('id_nft')->references('id')->on('nfts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:dropIfExists('collections_items');
    }
};

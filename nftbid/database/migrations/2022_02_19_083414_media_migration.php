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
        Schema::create('media', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_nft')->unsigned();
            $table->string('type');
            $table->string('filename');
            $table->timestamps();
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
        Schema:dropIfExists('media');
    }
};

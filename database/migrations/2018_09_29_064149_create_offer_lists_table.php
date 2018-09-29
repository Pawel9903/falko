<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('offer_id')->unsigned();
            $table->foreign('offer_id')->references('id')->on('offers');
            $table->integer('locale_id')->unsigned();
            $table->foreign('locale_id')->references('id')->on('locales');
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
        Schema::dropIfExists('offer_lists');
    }
}

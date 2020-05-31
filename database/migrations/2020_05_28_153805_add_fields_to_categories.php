<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {

            $table->string( 'url')->default('https://ichef.bbci.co.uk/news/660/cpsprodpb/7E8B/production/_112359323_live_shopping_examples.jpg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('url');
        });

    }
}

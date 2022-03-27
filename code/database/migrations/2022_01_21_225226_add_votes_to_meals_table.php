<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meals', function (Blueprint $table) {
             $table->foreignId('category_id')->unsigned()->references('id')->on('categories')->onDelete('cascade'); 
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meals', function (Blueprint $table) {
            //
        });
    }
}

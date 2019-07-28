<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->integer('price');
            $table->string('allergy_egg')->nullable(); 
            $table->string('allergy_milk')->nullable(); 
            $table->string('allergy_wheat')->nullable(); 
            $table->string('allergy_nuts')->nullable(); 
            $table->string('allergy_fruit')->nullable(); 
            $table->string('description');
            $table->string('image_path')->nullable(); 
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
        Schema::dropIfExists('menus');
    }
}

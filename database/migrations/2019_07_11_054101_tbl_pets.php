<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pets',function(Blueprint $table){
        $table->increments('pet_id');
        $table->string('owner_id');
        $table->string('pet_fullname');
        $table->string('date_of_birth');
        $table->string('gender');
        $table->string('breed');
        $table->string('color');
        $table->string('type');
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
       
        Schema::dropIfExists('tbl_pets');
    }
}

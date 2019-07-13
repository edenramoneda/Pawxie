<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPetLabTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    
    Schema::create('tbl_pet_lab_tests',function(Blueprint $table){
        $table->increments('id');
        $table->string('pet_id');
        $table->string('lab_test_id');
        $table->longText('result');
        $table->string('next_lab_tests');
        $table->string('eterinary_id');
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
       
        Schema::dropIfExists('tbl_pet_lab_tests');
    }
}

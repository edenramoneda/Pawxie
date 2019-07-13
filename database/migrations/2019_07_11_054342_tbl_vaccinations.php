<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblVaccinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vaccinations',function(Blueprint $table){
            $table->increments('vac_id');
            $table->longText('type_of_vaccination');
            $table->longText('vaccination');
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
           
            Schema::dropIfExists('tbl_vaccinations');
        }
}

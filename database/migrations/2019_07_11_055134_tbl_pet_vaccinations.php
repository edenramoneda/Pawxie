<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPetVaccinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pet_vaccinations',function(Blueprint $table){
            $table->increments('id');
            $table->string('pet_id');
            $table->string('vac_id');
            $table->string('next_vaccination');
            $table->string('veterinary_id');
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
           
            Schema::dropIfExists('tbl_pet_vaccinations');
        }
    }

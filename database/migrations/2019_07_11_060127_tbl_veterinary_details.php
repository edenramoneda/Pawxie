<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblVeterinaryDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_veterinary',function(Blueprint $table){
            $table->increments('veterinary_id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('birthday');
            $table->string('date_hired');
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
           
            Schema::dropIfExists('tbl_veterinary');
        }
}

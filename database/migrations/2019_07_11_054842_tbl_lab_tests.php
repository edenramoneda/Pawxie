<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblLabTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_lab_tests',function(Blueprint $table){
            $table->increments('lab_test_id');
            $table->longText('lab_tests');
            $table->longText('description');
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
           
            Schema::dropIfExists('tbl_lab_tests');
        }
}

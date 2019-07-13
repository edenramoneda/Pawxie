<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPayment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    
        Schema::create('tbl_payment',function(Blueprint $table){
            $table->increments('id');
            $table->string('owner_id');
            $table->string('payment');
            $table->string('payment_date');
            $table->string('balance');
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
           
            Schema::dropIfExists('tbl_payment');
        }
}

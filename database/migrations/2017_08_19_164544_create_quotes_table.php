<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year')->nullable();
            $table->string('gps',1)->nullable();
            $table->float('coverage',6,2)->nullable();
            $table->string('license_plate', 10)->nullable();
            $table->date('quotation_date')->nullable();
            $table->float('amount',5,2)->nullable();
            $table->float('four_installments_amount',5,2)->nullable();  
            $table->float('six_installments_amount',5,2)->nullable(); 
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
        Schema::drop('quotes');
    }
}

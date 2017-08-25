<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkConstraintToRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rates', function (Blueprint $table) {
            $table->integer('id_insurance_carrier')->unsigned();   
            $table->integer('id_use')->unsigned();
            $table->integer('id_department')->unsigned();
            $table->integer('id_risk')->unsigned();
            $table->integer('id_zone')->unsigned();
            $table->foreign('id_insurance_carrier')->references('id')->on('insurance_carriers');
            $table->foreign('id_use')->references('id')->on('uses');
            $table->foreign('id_department')->references('id')->on('departments');
            $table->foreign('id_risk')->references('id')->on('risks');
            $table->foreign('id_zone')->references('id')->on('zones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rates', function (Blueprint $table) {
            $table->dropForeign(['id_insurance_carrier'])->onDelete('cascade');
            $table->dropForeign(['id_use'])->onDelete('cascade');
            $table->dropForeign(['id_department'])->onDelete('cascade');
            $table->dropForeign(['id_risk'])->onDelete('cascade');  
            $table->dropForeign(['id_zone'])->onDelete('cascade');
        });
    }
}

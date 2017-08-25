<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkConstraintToVehicleClasificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicle_clasifications', function (Blueprint $table) {
            $table->integer('id_insurance_carrier')->unsigned();            
            $table->integer('id_brand')->unsigned();
            $table->integer('id_model')->unsigned();
            $table->integer('id_use')->unsigned();
            $table->integer('id_risk')->unsigned();
            $table->foreign('id_insurance_carrier')->references('id')->on('insurance_carriers');
            $table->foreign('id_brand')->references('id')->on('brands');            
            $table->foreign('id_model')->references('id')->on('models');
            $table->foreign('id_use')->references('id')->on('uses');
            $table->foreign('id_risk')->references('id')->on('risks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicle_clasifications', function (Blueprint $table) {
            $table->dropForeign(['id_insurance_carrier'])->onDelete('cascade');
            $table->dropForeign(['id_brand'])->onDelete('cascade');
            $table->dropForeign(['id_model'])->onDelete('cascade');
            $table->dropForeign(['id_use'])->onDelete('cascade');
            $table->dropForeign(['id_risk'])->onDelete('cascade');       
        });
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('policy_number')->nullable();
            $table->integer('year')->nullable();
            $table->string('gps',1)->nullable();
            $table->float('coverage',6,2)->nullable();
            $table->integer('installments')->nullable();
            $table->float('installments_value',5,2)->nullable();
            $table->date('begin_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('license_plate',10)->nullable();
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
        Schema::drop('policies');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymenttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->integer('traning_id');
            $table->string('namepayment');
            $table->string('paymentDate1');
            $table->integer('paymentValue1');
            $table->string('paymentDate2');
            $table->integer('paymentValue2');
            $table->string('paymentDate3');
            $table->integer('paymentValue3');
            $table->string('paymentDate4');
            $table->integer('paymentValue4');
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
        Schema::dropIfExists('payment');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('studentEnglish');
            $table->string('studentArabic');
            $table->integer('idNumber');
            $table->string('birthDay');
            $table->integer('phoneNumber');
            $table->integer('alternateNumber');
            $table->string('alternateName');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('qualification');
            $table->string('specialization');
            $table->string('currentJob');
            $table->string('workPlace');
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
        Schema::dropIfExists('student');
    }
}

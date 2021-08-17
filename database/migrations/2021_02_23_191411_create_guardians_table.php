<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');

            //Fatherinformation
            $table->string('father_name');
            $table->string('father_national_id');
            $table->string('father_passport_id');
            $table->string('father_phone');
            $table->string('father_job');
            $table->bigInteger('father_nationality_id')->unsigned();
            $table->bigInteger('father_blood_type_id')->unsigned();
            $table->bigInteger('father_religion_id')->unsigned();
            $table->string('father_address');

            //Mother information
            $table->string('mother_name');
            $table->string('mother_national_id');
            $table->string('mother_passport_id');
            $table->string('mother_phone');
            $table->string('mother_job');
            $table->bigInteger('mother_nationality_id')->unsigned();
            $table->bigInteger('mother_blood_type_id')->unsigned();
            $table->bigInteger('mother_religion_id')->unsigned();
            $table->string('mother_address');
            $table->timestamps();

            $table->foreign('father_nationality_id')->references('id')->on('nationalities');
            $table->foreign('father_blood_type_id')->references('id')->on('blood_types');
            $table->foreign('father_religion_id')->references('id')->on('religions');
            $table->foreign('mother_nationality_id')->references('id')->on('nationalities');
            $table->foreign('mother_blood_type_id')->references('id')->on('blood_types');
            $table->foreign('mother_religion_id')->references('id')->on('religions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guardians');
    }
}

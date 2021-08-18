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
            $table->uuid('id');
            $table->primary('id');
            $table->string('email')->unique();
            $table->string('password');

            //Fatherinformation
            $table->string('father_name');
            $table->string('father_national_id');
            $table->string('father_passport_id');
            $table->string('father_phone');
            $table->string('father_job');
            $table->foreignUuid('father_nationality_id')->references('id')->on('nationalities');
            $table->foreignUuid('father_blood_type_id')->references('id')->on('blood_types');
            $table->foreignUuid('father_religion_id')->references('id')->on('religions');
            $table->string('father_address');

            //Mother information
            $table->string('mother_name');
            $table->string('mother_national_id');
            $table->string('mother_passport_id');
            $table->string('mother_phone');
            $table->string('mother_job');
            $table->foreignUuid('mother_nationality_id')->references('id')->on('nationalities');
            $table->foreignUuid('mother_blood_type_id')->references('id')->on('blood_types');
            $table->foreignUuid('mother_religion_id')->references('id')->on('religions');
            $table->string('mother_address');
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
        Schema::dropIfExists('guardians');
    }
}

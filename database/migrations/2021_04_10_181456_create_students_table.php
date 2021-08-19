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
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->text('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignUuid('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->foreignUuid('nationality_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->foreignUuid('blood_id')->references('id')->on('blood_types')->onDelete('cascade');
            $table->foreignUuid('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreignUuid('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->foreignUuid('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignUuid('guardian_id')->references('id')->on('guardians')->onDelete('cascade');
            $table->date('birthday');
            $table->string('academic_year');
            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
}

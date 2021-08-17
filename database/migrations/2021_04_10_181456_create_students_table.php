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
            $table->uuid('gender_id');
            $table->uuid('nationalise_id');
            $table->uuid('blood_id');
            $table->date('date_birth');
            $table->uuid('grade_id');
            $table->uuid('classroom_id');
            $table->uuid('section_id');
            $table->uuid('parent_id');
            $table->string('academic_year');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->foreign('nationalise_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->foreign('blood_id')->references('id')->on('blood_types')->onDelete('cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreign('parent_id')->references('id')->on('guardians')->onDelete('cascade');

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

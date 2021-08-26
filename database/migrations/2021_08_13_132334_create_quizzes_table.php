<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name');
            $table->foreignUuid('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->foreignUuid('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreignUuid('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->foreignUuid('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->foreignUuid('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
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
        Schema::dropIfExists('quizzes');
    }
}

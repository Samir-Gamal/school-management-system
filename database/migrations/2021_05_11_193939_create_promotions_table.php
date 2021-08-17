<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('student_id');
            $table->uuid('from_grade');
            $table->uuid('from_classroom');
            $table->uuid('from_section');
            $table->uuid('to_grade');
            $table->uuid('to_classroom');
            $table->uuid('to_section');
            $table->string('academic_year');
            $table->string('academic_year_new');
            $table->timestamps();
        });

        Schema::table('promotions', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('from_grade')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('from_classroom')->references('id')->on('classrooms')->onDelete('cascade');
            $table->foreign('from_section')->references('id')->on('sections')->onDelete('cascade');
            $table->foreign('to_grade')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('to_classroom')->references('id')->on('classrooms')->onDelete('cascade');
            $table->foreign('to_section')->references('id')->on('sections')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}

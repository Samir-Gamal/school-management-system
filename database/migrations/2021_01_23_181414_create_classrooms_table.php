<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassroomsTable extends Migration {

	public function up()
	{
		Schema::create('classrooms', function(Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->bigInteger('grade_id')->unsigned();
			$table->timestamps();
            $table->foreign('grade_id')->references('id')->on('grades')
                ->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::dropIfExists('classrooms');
	}
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassroomsTable extends Migration {

	public function up()
	{
		Schema::create('classrooms', function(Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
			$table->string('name');
			$table->foreignUuid('grade_id')->references('id')->on('grades')
                ->onDelete('cascade');;
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('classrooms');
	}
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradesTable extends Migration {

	public function up()
	{
		Schema::create('Grades', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('Name', 30);
			$table->string('Notes', 50);
		});
	}

	public function down()
	{
		Schema::drop('Grades');
	}
}
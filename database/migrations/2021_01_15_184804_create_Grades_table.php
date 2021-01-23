<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradesTable extends Migration {

	public function up()
	{
		Schema::create('Grades', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('Name');
        	$table->text('Notes')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('Grades');
	}
}

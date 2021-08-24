<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradesTable extends Migration
{

    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->timestamps();
            $table->string('name');
            $table->text('notes')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grades');
    }
}

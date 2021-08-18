<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_attachments', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('file_name')->nullable();
            $table->uuid('parent_id');
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('guardians');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_attachments');
    }
}

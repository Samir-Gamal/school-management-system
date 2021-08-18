<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->date('invoice_at');
            $table->foreignUuid('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreignUuid('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreignUuid('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->foreignUuid('fee_id')->references('id')->on('fees')->onDelete('cascade');
            $table->decimal('amount',8,2);
            $table->string('description')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}

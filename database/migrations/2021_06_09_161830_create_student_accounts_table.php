<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_accounts', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->date('date');
            $table->string('type');
            $table->foreignUuid('fee_invoice_id')->nullable()->references('id')->on('invoices')->onDelete('cascade');
            $table->foreignUuid('receipt_id')->nullable()->references('id')->on('receipt_students')->onDelete('cascade');
            $table->foreignUuid('processing_id')->nullable()->references('id')->on('processing_fees')->onDelete('cascade');
            $table->foreignUuid('payment_id')->nullable()->references('id')->on('payments')->onDelete('cascade');
            $table->foreignUuid('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->decimal('debit',8,2)->nullable();
            $table->decimal('credit',8,2)->nullable();
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
        Schema::dropIfExists('student_accounts');
    }
}

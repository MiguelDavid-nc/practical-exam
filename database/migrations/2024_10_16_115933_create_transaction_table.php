<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_title');// 'transaction_title',
            $table->string('description');// 'description',
            $table->enum('status', ['sucessful', 'declined']);// 'status', 
            $table->decimal('total_amount', 10, 2);// 'total_amount',
            $table->string('transaction_number');// 'transaction_number',
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
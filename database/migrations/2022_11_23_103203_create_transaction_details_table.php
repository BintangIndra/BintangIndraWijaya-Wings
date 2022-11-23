<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->string('Document_code',3)->primary();
            $table->string('Document_Number',10);
            $table->string('Product_code',18);
            $table->integer('Price');
            $table->integer('Quantity');
            $table->integer('Unit');
            $table->integer('Sub_total');
            $table->string('Currency',5);
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
        Schema::dropIfExists('transaction_details');
    }
}

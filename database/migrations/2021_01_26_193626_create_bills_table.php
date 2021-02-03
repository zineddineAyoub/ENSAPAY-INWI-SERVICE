<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->boolean('payed')->default(false);
            $table->date('billingDate');
            $table->date('payedDate')->nullable($value=true);
            $table->double('amount',6,2);
            $table->mediumText('codeCreance');

            $table->mediumText('idClient');
            $table->foreign('idClient')->references('_id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('bills');
    }
}

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
        Schema::create('Cow_Bill', function (Blueprint $table) {
            $table->id();
            $table->string('Cust_ID');
            $table->string('Cow_ID');
            $table->string('Cust_Name');
            $table->string('Quantity');
            $table->string('Fat');
            $table->string('Rate');
            $table->string('Total_Amount');
            $table->timestamps();
        });
        Schema::create('Buffalo_Bill', function (Blueprint $table) {
            $table->id();
            $table->string('Cust_ID');
            $table->string('Buffalo_ID');
            $table->string('Cust_Name');
            $table->string('Quantity');
            $table->string('Fat');
            $table->string('Rate');
            $table->string('Total_Amount');
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
        Schema::dropIfExists('Buffalo_Bill');
        Schema::dropIfExists('Cow_Bill');
        
    }
}

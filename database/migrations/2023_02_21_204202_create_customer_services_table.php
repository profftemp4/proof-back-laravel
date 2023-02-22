<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_services', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->unsignedBigInteger('customer_Id');
            $table->foreign('customer_Id')->references('id')->on('customers');
            $table->unsignedBigInteger('service_Id');
            $table->foreign('service_Id')->references('id')->on('services');
            $table->unsignedBigInteger('state');
            $table->foreign('state')->references('id')->on('Listing');
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
        Schema::dropIfExists('customer_services');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('names', 300);
            $table->string('image_name', 300);
            $table->bigInteger('document');
            $table->string('email', 100);
            $table->bigInteger('phone_number');
            $table->string('Observations', 500);
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
        Schema::dropIfExists('customers');
    }
}

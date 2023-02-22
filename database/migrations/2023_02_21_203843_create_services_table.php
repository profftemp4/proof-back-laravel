<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('names', 300);
            $table->string('image_name', 300);
            $table->unsignedBigInteger('type');
            $table->foreign('type')->references('id')->on('Listing');
            $table->dateTime('start_date', $precision = 0);  
            $table->dateTime('final_date', $precision = 0);  
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
        Schema::dropIfExists('services');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->unsignedBigInteger('provider_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('address');
            $table->timestamps();





         //   $table->foreign('category_id')->references('id')->on('category');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service');
    }
}

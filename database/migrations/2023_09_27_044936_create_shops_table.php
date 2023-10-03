<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('userId');
            $table->string('branch');
            $table->float('coordX');
            $table->float('coordY');
            $table->string('openHrs');
            $table->string('closeHrs');
            $table->string('profile');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('description');
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
        Schema::dropIfExists('shops');
    }
}
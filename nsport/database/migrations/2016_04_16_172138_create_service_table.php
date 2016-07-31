<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->text('guarantee')->nullable();
            $table->text('transform')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('services');
    }
}

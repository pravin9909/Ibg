<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('fabric_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add any other columns related to fabric options
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fabric_options');
    }
}

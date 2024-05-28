<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatternsTable extends Migration
{
    public function up()
    {
        Schema::create('patterns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add any other columns related to patterns
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patterns');
    }
}

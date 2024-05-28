<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add any other columns related to features
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('features');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandingOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('branding_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add any other columns related to branding options
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('branding_options');
    }
}


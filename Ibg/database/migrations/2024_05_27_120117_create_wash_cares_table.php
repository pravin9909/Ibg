<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashCaresTable extends Migration
{
    public function up()
    {
        Schema::create('wash_cares', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add any other columns related to wash cares
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wash_cares');
    }
}


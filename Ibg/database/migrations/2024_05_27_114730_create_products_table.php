<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('subtitle')->nullable();
            $table->string('sku')->nullable(false);
            $table->text('description')->nullable();
            $table->text('specification')->nullable();
            $table->string('video_link')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->dateTime('created_date')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->string('size')->nullable();
            $table->string('slug')->unique();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('size_guide')->nullable();
            $table->string('main_image')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->unsignedBigInteger('fabric_option_id')->nullable();
            $table->unsignedBigInteger('wash_care_id')->nullable();
            $table->unsignedBigInteger('feature_id')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedBigInteger('branding_option_id')->nullable();
            $table->unsignedBigInteger('pattern_id')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('fabric_option_id')->references('id')->on('fabric_options')->onDelete('cascade');
            $table->foreign('wash_care_id')->references('id')->on('wash_cares')->onDelete('cascade');
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->foreign('branding_option_id')->references('id')->on('branding_options')->onDelete('cascade');
            $table->foreign('pattern_id')->references('id')->on('patterns')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

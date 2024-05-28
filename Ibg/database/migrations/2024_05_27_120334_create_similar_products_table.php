<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimilarProductsTable extends Migration
{
    public function up()
    {
        Schema::create('similar_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('similar_product_id');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('similar_product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            // Ensure product_id and similar_product_id are unique together
            $table->unique(['product_id', 'similar_product_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('similar_products');
    }
}

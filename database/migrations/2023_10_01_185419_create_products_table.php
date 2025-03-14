<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('artist'); // Add artist attribute
            $table->date('creation_date'); // Add creation date attribute
            $table->string('dimensions'); // Add dimensions attribute
            $table->string('medium'); // Add medium attribute
            $table->string('image_url')->nullable(); // Add image URL attribute
            $table->integer('quantity'); // Add image URL attribute
            $table->unsignedBigInteger('product_type_id')->nullable();
            $table->foreign('product_type_id')
            ->references('id')
            ->on('product_types')
            ->onDelete('cascade');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}

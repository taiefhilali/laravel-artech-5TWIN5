<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id'); // Add product_id foreign key
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->text('description');
            $table->dateTime('date');
            $table->integer('ratings');
            $table->timestamps();
            $table->unsignedBigInteger('user_id'); // Add product_id foreign key
            $table->foreign('user_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
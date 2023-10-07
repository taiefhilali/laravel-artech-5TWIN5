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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->date('date');
            $table->decimal('price', 10, 2); // Example: Price with 10 total digits and 2 decimal places
            $table->unsignedBigInteger('livraison_id')->nullable();
            $table->unsignedBigInteger('user_id');
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          //  $table->foreign('livraison_id')->references('id')->on('livraisons')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};

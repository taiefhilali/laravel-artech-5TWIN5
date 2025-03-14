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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feedback_id'); // Add product_id foreign key
            $table->foreign('feedback_id')
                ->references('id')
                ->on('feedback')
                ->onDelete('cascade');
            $table->text('descriptionComment');
            $table->dateTime('dateComment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');

    }
};
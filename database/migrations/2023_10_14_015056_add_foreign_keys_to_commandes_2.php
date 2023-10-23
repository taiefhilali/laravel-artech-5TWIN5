<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    public function up(): void
    {
        DB::statement('SET foreign_key_checks = 0');

        Schema::table('commandes', function (Blueprint $table) {
            $table->foreign('livraison_id')
            ->references('id')
            ->on('livraisons')
            ->onDelete('cascade');
  
      });
      DB::statement('SET foreign_key_checks = 1');

    }

    public function down(): void
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->dropForeign('commandes_livraison_id_foreign');
        });
    }
};

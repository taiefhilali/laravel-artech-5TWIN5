<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('Cin')->nullable();
            $table->string('zone_livraison')->nullable();
            $table->string('image_voiture')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('Cin');
            $table->dropColumn('zone_livraison');
            $table->dropColumn('image_voiture');
        });
    }
}

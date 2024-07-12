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
        Schema::table('dc_comic', function (Blueprint $table) {
            $table->string('title', 50);
            $table->text('description');
            $table->string('thumb', 255);
            $table->float('price', 5, 2);
            $table->string('series', 50);
            $table->year('sale_date');
            $table->string('type', 50);
            $table->text('artists');
            $table->text('writers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dc_comic', function (Blueprint $table) {

            $table->drop('title');
            $table->drop('description');
            $table->drop('thumb');
            $table->drop('price');
            $table->drop('series');
            $table->drop('sale_date');
            $table->drop('type');
            $table->drop('artists');
            $table->drop('writers');
        });
    }
};

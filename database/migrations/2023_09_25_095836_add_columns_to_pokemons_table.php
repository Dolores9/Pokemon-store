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
        Schema::table('pokemons', function (Blueprint $table) {
            $table->string('name');
            $table->decimal('weight', 5, 2);
            $table->decimal('height', 5, 2);
            $table->boolean('shiny')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pokemons', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('weight');
            $table->dropColumn('height');
            $table->dropColumn('shiny');
        });
    }
};

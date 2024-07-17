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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 50);
            $table->TEXT('description');
            $table->TEXT('thumb');
            $table->string('price', 7);
            $table->string('series', 70);
            $table->DATE('sale_date');
            $table->string('type', 50);
            $table->TEXT('artists');
            $table->TEXT('writers', 70);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};

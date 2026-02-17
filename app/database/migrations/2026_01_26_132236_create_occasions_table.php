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
        Schema::create('occasions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique(); // title of the post. Not car name
            $table->decimal('price', 7, 2); // max number is 99999.99
            $table->string('plate'); // license plate
            $table->text('description');
            $table->integer('mileage');
            $table->timestamps();
            $table->boolean('sold')->default(false);  // nieuw: voor "VERKOCHT" banner
            $table->boolean('visible')->default(true); // nieuw: voor zichtbaar/verborgen
            $table->string('brand')->nullable(); // merk van de auto

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occasions');
    }
};

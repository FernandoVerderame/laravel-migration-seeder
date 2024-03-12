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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 20);
            $table->string('arrival_station', 20);
            $table->string('departure_time', 8);
            $table->string('arrival_time', 8);
            $table->string('train_code', 6)->unique();
            $table->tinyInteger('carriage_number')->unsigned();
            $table->boolean('is_on_time')->default(1);
            $table->boolean('canceled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};

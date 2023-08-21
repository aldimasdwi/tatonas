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
    Schema::create('hardware_details', function (Blueprint $table) {
        $table->id();
        $table->foreignId('hardware_id')->constrained('hardware')->onDelete('cascade');
        $table->foreignId('sensor_id')->constrained('master_sensors')->onDelete('cascade');
        $table->softDeletes();
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_details');
    }
};

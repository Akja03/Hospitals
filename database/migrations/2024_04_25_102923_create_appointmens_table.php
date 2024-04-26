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
        Schema::create('appointmens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospital_id')->constrained('hospital');
            $table->foreignId('patient_id')->constrained('patient');
            $table->date('date');
            $table->time('time');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointmens');
    }
};

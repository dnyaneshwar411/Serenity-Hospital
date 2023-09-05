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
        Schema::create('patient_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id');
            $table->string('user_id');
            $table->string('patient_name');
            $table->string('patient_email');
            $table->string('patient_phone_no');
            $table->string('patient_date_of_appointment');
            $table->string('appointment_reason')->nullable();
            $table->string('patient_doctor_allocated_id')->nullable();
            $table->string('patient_doctor_allocated_name')->nullable();
            $table->enum('appointment_status', ['allocated', 'in-queue'])->default('in-queue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_appointments');
    }
};

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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->string('nrp')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('birthdate');
            $table->string('gender');
            $table->foreignId('faculty_id');
            $table->string('angkatan');
            $table->string('transkrip');
            $table->string('osjur');
            $table->string('wiratha');
            $table->string('cv');
            $table->string('porto');
            $table->string('rekomKetua');
            $table->boolean('status')->default(false);
            $table->foreignId('department_id');
            $table->string('alasan');
            $table->foreignId('department_id2');
            $table->string('alasan2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitments');
    }
};

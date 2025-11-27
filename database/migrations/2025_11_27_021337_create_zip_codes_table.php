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
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->id();
            $table->string('zipcode')->index();
            $table->string('place');
            $table->string('state');
            $table->string('state_code', 2);
            $table->string('province');
            $table->string('county');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->timestamps();
            $table->index(['zipcode', 'state_code']);
            $table->index('place');
        });

        // Add a simple example for testing
        DB::table('zip_codes')->insert([
            'zipcode' => '10001',
            'place' => 'New York',
            'state' => 'New York',
            'state_code' => 'NY',
            'province' => 'New York County',
            'county' => 'New York',
            'latitude' => 40.7506,
            'longitude' => -73.9973,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zip_codes');
    }
};

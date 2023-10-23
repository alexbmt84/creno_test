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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entity_id');
            $table->unsignedBigInteger('town_id');
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->foreign('town_id')->references('id')->on('towns')->onDelete('cascade');
            $table->string('company');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('telephone');
            $table->string('telephone2');
            $table->string('fax');
            $table->string('address');
            $table->string('email');
            $table->float('latitude');
            $table->float('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};

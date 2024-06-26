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
        Schema::create('towns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('cp_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('cp_id')->references('id')->on('cps')->onDelete('cascade');
            $table->integer('codeStat');
            $table->string('name');
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
        Schema::dropIfExists('towns');
    }
};

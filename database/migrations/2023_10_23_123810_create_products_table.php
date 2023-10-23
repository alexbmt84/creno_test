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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->string('name');
            $table->string('scientific_name');
            $table->string('picture');
            $table->longText('description');
            $table->boolean('available');
            $table->integer('net_weight');
            $table->unsignedBigInteger('entity_id');
            $table->unsignedBigInteger('tva_id');
            $table->unsignedBigInteger('level1_id');
            $table->unsignedBigInteger('level2_id');
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->foreign('tva_id')->references('id')->on('tvas')->onDelete('cascade');
            $table->foreign('level1_id')->references('id')->on('level1')->onDelete('cascade');
            $table->foreign('level2_id')->references('id')->on('level2')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

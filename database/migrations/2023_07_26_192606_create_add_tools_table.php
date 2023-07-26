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
        Schema::create('add_tools', function (Blueprint $table) {
            $table->id();
            $table->string('p_name')->nullable();
            $table->string('p_price')->nullable();
            $table->longText('p_details')->nullable();
            $table->string('p_quantity')->nullable();
            $table->string('image')->nullable();
            $table->string('available')->nullable();
            $table->string('rent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_tools');
    }
};

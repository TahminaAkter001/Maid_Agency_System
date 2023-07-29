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
        Schema::create('maids', function (Blueprint $table) {
            $table->id();
            $table->string('serv_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->longText('details')->nullable();
            $table->string('salary')->nullable();
            $table->string('image')->nullable();
            $table->string('nid')->nullable();
            $table->longText('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maids');
    }
};

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
        Schema::create('stockouts', function (Blueprint $table) {
            $table->id();
            $table->string('pcode');
            $table->string('barcode')->nullable();
            $table->string('pname');
            $table->string('category');
            $table->integer('qty');
            $table->string('detail');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockouts');
    }
};

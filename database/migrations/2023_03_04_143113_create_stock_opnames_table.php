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
        Schema::create('stock_opnames', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('barcode')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->foreignId('quantity')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('real_stock');
            $table->integer('difference');
            // $table->foreignId('sale_price')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('value_price', 12, 2);
            $table->string('detail');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_opnames');
    }
};

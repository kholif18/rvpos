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
            $table->unsignedInteger('category_id')->index();
            $table->unsignedInteger('unit_id')->index();
            $table->string('name');
            $table->string('code')->unique();
            $table->string('barcode')->nullable();
            $table->integer('quantity')->default(0);
            $table->decimal('purchase_price', 12, 2);
            $table->decimal('sale_price', 12, 2);
            $table->decimal('markup', 12, 2);
            $table->timestamps();
            $table->softDeletes();
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

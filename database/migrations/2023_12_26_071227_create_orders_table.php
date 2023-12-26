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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->string('email');
            $table->string('phone');
            $table->string('alamat');
            $table->boolean('status')->default(false);
            $table->text('bukti_bayar')->nullable();
            $table->timestamps();
        });
        Schema::create('order_details', function (Blueprint $table) {
            $table->foreignUuid('order_id')->constrained();
            $table->string('produk_sku');
            $table->foreign('produk_sku')->references('sku')->on('produks')->cascadeOnDelete();
            $table->float('jumlah');
            $table->float('total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

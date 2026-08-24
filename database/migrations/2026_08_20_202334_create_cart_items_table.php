<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('cart_id')
                ->constrained('carts')
                ->cascadeOnDelete();

            $table->foreignUuid('product_id')
                ->constrained('products')
                ->restrictOnDelete();

            $table->unsignedInteger('quantity');

            $table->decimal('unit_price', 12, 2);

            $table->timestampsTz();

            $table->unique(['cart_id', 'product_id']);
        });

        DB::statement("
            ALTER TABLE cart_items
            ADD CONSTRAINT cart_items_quantity_check
            CHECK (quantity > 0)
        ");

        DB::statement("
            ALTER TABLE cart_items
            ADD CONSTRAINT cart_items_unit_price_check
            CHECK (unit_price >= 0)
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};

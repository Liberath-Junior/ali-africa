<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('order_id')
                ->constrained('orders')
                ->cascadeOnDelete();

            $table->foreignUuid('product_id')
                ->constrained('products')
                ->restrictOnDelete();

            $table->string('product_name');

            $table->unsignedInteger('quantity');

            $table->decimal('unit_price', 12, 2);

            $table->decimal('subtotal', 12, 2);

            $table->timestampsTz();
        });

        DB::statement("
            ALTER TABLE order_items
            ADD CONSTRAINT order_items_quantity_check
            CHECK (quantity > 0)
        ");

        DB::statement("
            ALTER TABLE order_items
            ADD CONSTRAINT order_items_unit_price_check
            CHECK (unit_price >= 0)
        ");

        DB::statement("
            ALTER TABLE order_items
            ADD CONSTRAINT order_items_subtotal_check
            CHECK (subtotal >= 0)
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};

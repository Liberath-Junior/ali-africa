<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('order_reference')->unique();

            $table->string('customer_name');

            $table->string('customer_phone');

            $table->string('status')->default('PENDING');

            $table->decimal('product_total', 12, 2);

            $table->decimal('delivery_fee', 12, 2)->default(0.00);

            $table->decimal('final_total', 12, 2);

            $table->timestampTz('pending_due_at');

            $table->foreignUuid('confirmed_by_admin_id')
                ->nullable()
                ->constrained('admins')
                ->nullOnDelete();

            $table->timestampTz('confirmed_at')->nullable();

            $table->foreignUuid('cancelled_by_admin_id')
                ->nullable()
                ->constrained('admins')
                ->nullOnDelete();

            $table->timestampTz('cancelled_at')->nullable();

            $table->text('cancel_reason')->nullable();

            $table->timestampsTz();
        });

        DB::statement("
            ALTER TABLE orders
            ADD CONSTRAINT orders_status_check
            CHECK (
                status IN (
                    'PENDING',
                    'CONFIRMED',
                    'OUT_FOR_DELIVERY',
                    'DELIVERED',
                    'CANCELLED',
                    'DELIVERY_FAILED'
                )
            )
        ");

        DB::statement("
            ALTER TABLE orders
            ADD CONSTRAINT orders_product_total_check
            CHECK (product_total >= 0)
        ");

        DB::statement("
            ALTER TABLE orders
            ADD CONSTRAINT orders_delivery_fee_check
            CHECK (delivery_fee >= 0)
        ");

        DB::statement("
            ALTER TABLE orders
            ADD CONSTRAINT orders_final_total_check
            CHECK (final_total >= 0)
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

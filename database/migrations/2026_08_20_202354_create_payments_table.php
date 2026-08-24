<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('order_id')
                ->unique()
                ->constrained('orders')
                ->cascadeOnDelete();

            $table->string('status')->default('UNPAID');

            $table->decimal('amount_collected', 12, 2)->nullable();

            $table->timestampTz('collected_at')->nullable();

            $table->timestampsTz();
        });

        DB::statement("
            ALTER TABLE payments
            ADD CONSTRAINT payments_status_check
            CHECK (
                status IN (
                    'UNPAID',
                    'CASH_COLLECTED'
                )
            )
        ");

        DB::statement("
            ALTER TABLE payments
            ADD CONSTRAINT payments_state_check
            CHECK (
                (
                    status = 'UNPAID'
                    AND amount_collected IS NULL
                    AND collected_at IS NULL
                )
                OR
                (
                    status = 'CASH_COLLECTED'
                    AND amount_collected IS NOT NULL
                    AND collected_at IS NOT NULL
                )
            )
        ");

        DB::statement("
            ALTER TABLE payments
            ADD CONSTRAINT payments_amount_check
            CHECK (
                amount_collected IS NULL
                OR amount_collected >= 0
            )
        ");
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

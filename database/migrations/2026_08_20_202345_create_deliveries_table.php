<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('order_id')
                ->unique()
                ->constrained('orders')
                ->cascadeOnDelete();

            $table->decimal('latitude', 9, 6);

            $table->decimal('longitude', 9, 6);

            $table->text('address');

            $table->text('delivery_instructions')->nullable();

            $table->string('rider_name')->nullable();

            $table->string('rider_phone')->nullable();

            $table->timestampTz('assigned_at')->nullable();

            $table->timestampTz('delivered_at')->nullable();

            $table->timestampTz('failed_at')->nullable();

            $table->text('failure_reason')->nullable();

            $table->timestampsTz();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};

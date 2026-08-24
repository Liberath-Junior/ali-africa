<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_activities', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('order_id')
                ->constrained('orders')
                ->cascadeOnDelete();

            $table->foreignUuid('admin_id')
                ->nullable()
                ->constrained('admins')
                ->nullOnDelete();

            $table->string('action');

            $table->text('description')->nullable();

            $table->jsonb('metadata')->nullable();

            $table->timestampsTz();

            $table->index('order_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_activities');
    }
};

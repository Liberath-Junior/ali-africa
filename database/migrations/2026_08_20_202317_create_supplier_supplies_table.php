<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('supplier_supplies', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('supplier_id')
                ->constrained('suppliers')
                ->restrictOnDelete();

            $table->string('name');

            $table->text('details')->nullable();

            $table->timestampsTz();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('supplier_supplies');
    }
};

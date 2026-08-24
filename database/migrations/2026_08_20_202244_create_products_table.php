<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('category_id');

            $table->string('name')->unique();

            $table->text('description');

            $table->decimal('price', 12, 2);

            $table->text('image');

            $table->string('size_volume')->nullable();

            $table->boolean('is_available')->default(true);

            $table->boolean('is_active')->default(true);

            $table->timestampsTz();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->restrictOnDelete();
        });

        DB::statement("
            ALTER TABLE products
            ADD CONSTRAINT products_price_check
            CHECK (price >= 0)
        ");

    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

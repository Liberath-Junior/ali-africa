<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('admin_id')
                ->constrained('admins')
                ->restrictOnDelete();

            $table->string('token')->unique();

            $table->timestampTz('expires_at');

            $table->timestampTz('used_at')->nullable();

            $table->timestampTz('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('password_reset_tokens');
    }
};

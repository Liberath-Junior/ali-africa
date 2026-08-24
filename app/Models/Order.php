<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'order_reference',
        'customer_name',
        'customer_phone',
        'delivery_address',
        'additional_info',
        'status',
        'product_total',
        'delivery_fee',
        'final_total',
        'pending_due_at',
        'confirmed_by_admin_id',
        'confirmed_at',
        'cancelled_by_admin_id',
        'cancelled_at',
        'cancel_reason',
    ];

    protected function casts(): array
    {
        return [
            'product_total' => 'decimal:2',
            'delivery_fee' => 'decimal:2',
            'final_total' => 'decimal:2',
            'pending_due_at' => 'datetime',
            'confirmed_at' => 'datetime',
            'cancelled_at' => 'datetime',
        ];
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function delivery(): HasOne
    {
        return $this->hasOne(Delivery::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function activities(): HasMany
    {
        return $this->hasMany(OrderActivity::class);
    }

    public function confirmedByAdmin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'confirmed_by_admin_id');
    }

    public function cancelledByAdmin(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'cancelled_by_admin_id');
    }
}

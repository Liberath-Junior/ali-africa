<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'full_name',
        'email',
        'password_hash',
        'is_active',
        'last_login_at',
    ];

    protected $hidden = [
        'password_hash',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'last_login_at' => 'datetime',
        ];
    }

    public function confirmedOrders(): HasMany
    {
        return $this->hasMany(Order::class, 'confirmed_by_admin_id');
    }

    public function cancelledOrders(): HasMany
    {
        return $this->hasMany(Order::class, 'cancelled_by_admin_id');
    }

    public function orderActivities(): HasMany
    {
        return $this->hasMany(OrderActivity::class);
    }
}

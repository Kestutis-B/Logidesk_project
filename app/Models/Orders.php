<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function offer(): HasMany
    {
        return $this->hasMany(Offers::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

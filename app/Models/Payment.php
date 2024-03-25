<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table = 'payment_orders';

    public function wallet(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
       return $this->belongsToMany(UserWallet::class);
    }

    public function currency(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }
}


<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use  SoftDeletes;
    protected $guarded =[];

	public function rates()
	{
		return $this->hasMany(CurrencyRate::class,'currency_first') ;
	}
	public function last_rate()
	{
		return $this->hasOne(CurrencyRate::class, 'currency_first')->latestOfMany();
	}

    public function wallets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UserWallet::class);
    }
}

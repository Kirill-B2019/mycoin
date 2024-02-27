<?php

namespace App\Models;

use App\Traits\HasWalletFunc;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CryptoСurrency extends Model
{
    use HasFactory, SoftDeletes,HasWalletFunc;
    protected $guarded =[];

}

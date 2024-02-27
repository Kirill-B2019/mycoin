<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttractivenessesProject extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

public function attractivenesse()
{
    return $this->hasOne(Attractiveness::class);
}

}

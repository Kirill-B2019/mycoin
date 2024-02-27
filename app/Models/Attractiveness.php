<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attractiveness extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];


    public function attractivenesseProject()
    {
        return $this->hasMany(AttractivenessesProject::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Emission extends Model
{
    use HasFactory;
    private $total;
    private $token_name;
    public function __construct($total,$token_name)
    {
       $this->total = $this->getEmmisionTotal();
       $this->token_name = $this->getEmmisionName();
    }

    public function getEmmisionName()
    {
        return self::where('token_name')->first();
    }

    public function getEmmisionTotal()
    {
        return self::where('total')->first();
    }
}

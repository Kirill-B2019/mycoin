<?php

namespace App\Models\BlockChain;



use AllowDynamicProperties;
use App\Casts\BlockDataContext;

use App\Traits\HasBlockChain;
use Illuminate\Database\Eloquent\Model;



#[AllowDynamicProperties] class Block extends Model
{
    use HasBlockChain;
    public mixed $data;

    public mixed $index;
    public mixed $preview_hash;
    public mixed $timestamp;
    public mixed $hash;
    protected $guarded = [];
    public $incrementing = false;
    /**
     * Атрибуты, которые должны быть типизированы.
     *
     * @var array
     */
    protected $casts =[
        'data' => BlockDataContext::class,
    ];
    public function __construct($data = NUll)
   {
       $this->data = $data;
       $this->index = $data['index'] ?? null;
       $this->hash = $data['hash'] ?? null;
       $this->preview_hash = $data['preview_hash'] ?? null;
       $this->timestamp = $data['timestamp'] ?? null;
   }

}

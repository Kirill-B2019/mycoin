<?php

namespace App\Models\BlockChain;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Block extends Model
{

    protected $guarded = [];
    public $incrementing = false;

    protected $casts =[
        'data' => \App\Casts\BlockDataContext::class,
    ];
    public function calculateHash()
    {
        return hash(
            'sha256',
            $this->index.$this->previousHash.$this->timestamp.json_encode($this->data),
        );
    }


    public function getLastIndex()
    {
        $res = Block::query()->latest()->first();
        $aRes = ['index'=>$res->index+1];
    return $aRes;
}

}

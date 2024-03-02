<?php

namespace App\Models\BlockChain;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Block extends Model
{

    protected $guarded = [];
    protected $table = 'blocks';

    public int $index;
    public string $timestamp;
    public $data;
    public string $previousHash;
    public string $hash;
    public function __construct( $data=NULL)
    {

       $this->index = $this->getIndexAndHash()['index'];
       $this->previousHash = $this->getIndexAndHash()['preview_hash'];
       $this->data = $data;
       $this->timestamp = now()->timestamp;
       $this->hash = $this->calculateHash();

    }

    public function calculateHash()
    {
        return hash(
            'sha256',
            $this->index.$this->previousHash.$this->timestamp.json_encode($this->data),
        );
    }


    public function getIndexAndHash()
    {
        $res = DB::table('blocks')->latest()->first();
        $aRes = ['index'=>$res->index+1, 'preview_hash'=>$res->preview_hash];
    return $aRes;
}

}

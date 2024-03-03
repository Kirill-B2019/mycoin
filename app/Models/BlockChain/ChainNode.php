<?php

namespace App\Models\BlockChain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChainNode extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected string $nodePublicKey;

    protected $nodeData;
    protected int $nodeTime;
    protected int $nodeIP;
    protected int $nodePort;
    public function __construct( string $chainPublicKey,$nodeData,int $nodeTime,int $nodeIP,int $nodePort)
    {
        $this->chainPublicKey = $chainPublicKey;
        $this->nodeData = $nodeData;
        $this->nodeTime = $nodeTime;
        $this->nodeIP = $nodeIP;
        $this->nodePort = $nodePort;

    }


}

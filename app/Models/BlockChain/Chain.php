<?php

namespace App\Models\BlockChain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;

class Chain extends Model
{
    use HasFactory;
    private array $blocks;
    private array $chain;

    public function __construct()
    {

    }



    private function createGenesisBlock()
    {
        if(!Block::latest()->first())
        {
            return new Block(0, 'Genesis Block MYCOIN chain', '0');
        }
        return true;
    }

    public function getLatestBlock(): Block
    {
        return Block::latest()->first();
    }

    public function addBlock(Block $newBlock)
    {

        $newBlock->hash = $newBlock->calculateHash();
        if($this->isChainValid($newBlock->hash)){
        $lastBlock = $this->getLatestBlock();

        $res= Block::create([
            'index' =>  $newBlock->getLastIndex(),
            'hash' =>   $newBlock->hash,
            'preview_hash' => $lastBlock['hash'],
            'data'=> json_encode($newBlock->data),
            'timestamp' => now()->timestamp,
        ]);
            return $res;
        }
        return false;
    }

    public function isChainValid($newHash): bool
    {
        $blocks = Block::all();
        $chainLength = $blocks->count();
        if($chainLength > 1){
        for ($i = 1; $i < $chainLength; $i++) {
            if ($blocks[$i]['hash'] == $newHash) { //TODO написать перегенерацию
                return false;
            }
            if ($blocks[$i]['preview_hash'] !== $blocks[$i-1]['hash']) {
                return false;
            }
            }
        }
        return true;
    }

}

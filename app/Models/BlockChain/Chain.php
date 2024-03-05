<?php

namespace App\Models\BlockChain;


use App\Structures\BlockDataContext;
use Illuminate\Database\Eloquent\Model;


class Chain extends Model
{
    private mixed $index;
    private mixed $previousHash;
    private mixed $timestamp;
    private mixed $data;

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
        $lastBlock = $this->getLatestBlock();
        $newBlock->index = $lastBlock['index'] + 1;
        $newBlock->preview_hash = $lastBlock['hash'];
        $newBlock->timestamp = now()->timestamp;
        $newBlock->hash = $this->calculateHash($newBlock);
        $newBlock->data = BlockDataContext::fromArray($newBlock->data);
        if($this->isChainValid($newBlock->hash)){
            return Block::create([
              'index' =>  $newBlock->index,
              'hash' =>   $newBlock->hash,
              'preview_hash' => $newBlock->preview_hash,
              'data'=> $newBlock->data,
              'timestamp' => $newBlock->timestamp,
          ]);
        }
        return new \InvalidArgumentException('Ошибка создания блока', 404);
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

    public function calculateHash(Block $block): string
    {

        return hash(
            'sha256',
            $block->index.$block->preview_hash.$block->timestamp.json_encode($block->data),
        );
    }

}

<?php

namespace App\Http\Controllers\MCPChain\Class;

use App\Models\Entity\Block;

class BlockValidator
{
     private  Hasher $hasher;
     public function __construct(Hasher $hasher)
     {
         $this->hasher =  $hasher;
     }

     public function validate(Block $prevBlock, Block $newBlock): bool
     {

         if($prevBlock->getIndex()+1 !== $newBlock->getIndex()){
             return false;
         }

         if($prevBlock->getHash() !== $newBlock->getPreviousHash()){
             return false;
         }
         if($this->hasher->calculateHash($newBlock) !== $newBlock->getHash()){
             return false;
         }
         return true;
     }
}

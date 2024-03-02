<?php

namespace App\Http\Controllers\MCPChain\Class;

use App\Models\BlockChain\Block;

class Hasher
{
    public function calculateHash(Block $block)
    {
        return hash(
            'sha256',
            $block->getIndex().$block->getPreviousHash().$block->getTimeStamp().$block->getData()
        );
    }
}
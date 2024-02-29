<?php

namespace App\Traits;


use App\Models\BlockChain\Block;

trait HasBlockChain
{
    public function getBlocks()
    {
        return Block::all();
    }

    public function getLastBlock()
    {
        return Block::latest()->first();
    }

    public function createBlock($date = null)
    {

    }
}


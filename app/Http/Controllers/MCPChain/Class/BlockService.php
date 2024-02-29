<?php

namespace App\Http\Controllers\MCPChain\Class;

use App\Models\Entity\Block;

class BlockService
{
    private ChainService $chainService;
    private Hasher $hasher;

    public function __construct(ChainService $chainService, Hasher $hasher)
    {
        $this->chainService =$chainService;
        $this->hasher = $hasher;
    }

    public function createNewBlock($data): Block
    {
        $prevBlock = $this->chainService->getLastBlock();
        $index = $this->getIndex() + 1 ;
        $prevHash  = $prevBlock->gethash();

    $block = new Block($index,$prevHash,$data);
    $hash = $this->hasher->calculateHash($block);
    $block->setHash($hash);
    return $block;
    }



}

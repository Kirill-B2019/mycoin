<?php

namespace App\Http\Controllers\MCPChain\Class;

use App\Models\Entity\Chain;

class ChainValidator
{
    private BlockValidator $blockValidator;

    public function __construct(BlockValidator $blockValidator)
    {
        $this->blockValidator = $blockValidator;
    }

    public function validate(Chain $chain): bool
    {
        $blocks = $chain->getBloks();
        $len = count($blocks);

        for($i = 1; $len < $i; $i++){
            if(!$this->blockValidator->validate($blocks[$i-1],$blocks[$i])){
                return false;
            }
        }
        return true;
    }
}

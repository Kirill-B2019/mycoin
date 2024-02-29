<?php

namespace App\Http\Controllers\MCPChain\Storage;

use App\Models\BlockChain\Chain;

interface Storage
{
    public function save(Chain $chain): void;

    public function get(): Chain;
}

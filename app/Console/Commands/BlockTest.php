<?php

namespace App\Console\Commands;

use App\Models\BlockChain\Block;
use App\Models\BlockChain\BlockDataContext;
use App\Models\BlockChain\Chain;
use Illuminate\Console\Command;

class BlockTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:BlockTest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     *
     * @var BlockDataContext $block
     */
    public function handle()
    {
        return new Block();
    }
}

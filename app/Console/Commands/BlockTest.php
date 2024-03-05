<?php

namespace App\Console\Commands;

use App\Models\BlockChain\Block;
use App\Models\Contract;
use App\Structures\BlockDataContext;
use App\Structures\BlockDataContext as BlockDataContextStructure;
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
     * @var Block $block
     */
    public function handle()
    {
        $block = new Contract();

        dd($block->toArray());

        return 0;
    }
}

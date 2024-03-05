<?php

namespace App\Console\Commands;

use App\Models\BlockChain\Block;
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
        $block = Block::query()->latest()->first(); // Получаем объект модели Block

        if ($block) {
            $blockData = $block->toArray(); // Преобразуем объект модели в массив
            $blockCollection = collect([$blockData])->map(function ($item) {
                dd(new Block($item));
                return ;

            });
        }



        return 0;
    }
}

<?php

namespace App\Console\Commands;

use App\Models\BlockChain\Block;
use App\Models\Contract;
use App\Models\User;
use App\Structures\BlockDataContext;
use App\Structures\BlockDataContext as BlockDataContextStructure;
use App\Traits\HasRolesAndPermissions;
use App\View\Components\ModalWindow;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;


class BlockTest extends Command
{
    use HasRolesAndPermissions;
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
        $block = new Block();
        $window = new ModalWindow();

        dd($block['data']->toArray());
        dd($block['execute']);

        return 0;
    }
}

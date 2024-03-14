<?php

namespace App\Console\Commands;

use App\Models\BlockChain\Block;
use App\Models\Contract;
use App\Models\CurrencyRate;
use App\Models\User;
use App\Structures\BlockDataContext;
use App\Structures\BlockDataContext as BlockDataContextStructure;
use App\Traits\HasRolesAndPermissions;
use App\View\Components\ModalWindow;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
	   $q = new CurrencyRate();
	   dd(new Block());
	   dd($q->getTodayAuPrice());
        return 0;
    }
}

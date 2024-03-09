<?php

namespace App\Console\Commands;

use App\Models\CurrencyRate;
use Illuminate\Console\Command;

class UpdateAUPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rate:au';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Запрос цены на залото';

    /**
     * Execute the console command.
     *
     * @return float
     */
    public function handle()
    {
		$q=new CurrencyRate();
	    $q->getTodayAuPrice();
        return Command::SUCCESS;
    }
}

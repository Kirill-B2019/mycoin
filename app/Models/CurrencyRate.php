<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class CurrencyRate extends Model
{
    protected $guarded = [];
	protected $table = 'currencies_rates';
	
	public function getTodayAuPrice($code_first = 'MCP',$code_second = 'USD'): void
	{
		$today = Carbon::today();
		$today_rate = CurrencyRate::whereDate('created_at', $today)->get();
	
		if ($today_rate->isEmpty()) {
			$cur_first = Currency::query()->where('code',$code_first)->first();
			$cur_second = Currency::query()->where('code',$code_second)->first();

				$apiKey = "goldapi-2g5eetldaall6o-io";
				$symbol = "XAU";
				$curr = "USD";
				$date = "";
			
				$myHeaders = array(
					'x-access-token: ' . $apiKey,
					'Content-Type: application/json'
				);
			
			$curl = curl_init();
			$url = "https://www.goldapi.io/api/{$symbol}/{$curr}{$date}";
			
			curl_setopt_array($curl, array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTPHEADER => $myHeaders
			));
			
			$response = curl_exec($curl);
			$error = curl_error($curl);
			
			curl_close($curl);
			
			if ($error) {
				echo 'Error: ' . $error;
			} else {
				$q = CurrencyRate::create([
					'currency_first' => $cur_first->id,
					'currency_second'=>$cur_second->id,
					'rate'=>json_decode($response)->price_gram_10k/100,
				]);
		
			}
		}
		
	}
}

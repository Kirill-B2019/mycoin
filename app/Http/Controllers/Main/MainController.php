<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\CurrencyRate;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
	    $data_cart = array();
		$rates = CurrencyRate::query()->where('currency_first',1)->where('currency_second',4)->latest()->take(7)->get()->reverse();
		foreach ($rates as $rate){
			$data_cart['labels'][] = $rate->created_at->format('d.m.Y');
			$data_cart['data'][]=$rate->rate;
		}
		
		
		$first = $rates->first();
	    $last = $rates->last();
	    $chart_date = [
		    'date_start' => $first['created_at']->format('d.m.Y'),
		    'date_end' => $last['created_at']->format('d.m.Y'),
		    
	    ];
	    $price_now =$last['rate'];
		
	return view('main.platform_main',compact(['data_cart','price_now','chart_date']));
   }
}

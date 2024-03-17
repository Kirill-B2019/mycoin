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
	    $price_last = $rates->last();
	    $price_now =$price_last['rate'];
		
	return view('main.platform_main',compact(['data_cart','price_now']));
   }
}

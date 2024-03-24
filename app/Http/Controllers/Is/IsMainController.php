<?php

namespace App\Http\Controllers\Is;

use App\Http\Controllers\Controller;
use App\Models\BlockChain\Block;
use App\Models\CurrencyRate;
use App\Models\Emission;
use Illuminate\Http\Request;

class IsMainController extends Controller
{
    public function index()
    {
        //все блоки с конца
        $blocks = Block::query()->orderBy('created_at', 'desc')->simplePaginate(15);

        //график за неделю
        $data_cart = array();
        $rates = CurrencyRate::query()->where('currency_first',1)->where('currency_second',4)->latest()->take(7)->get()->reverse();
        foreach ($rates as $rate){
            $data_cart['labels'][] = $rate->created_at->format('d.m.Y');
            $data_cart['data'][]=$rate->rate;
        }


        $first = $rates->first();
        $last = $rates->last();
        $chart_date = [
            'from' => $first['created_at']->format('d.m.Y'),
            'to' => $last['created_at']->format('d.m.Y'),

        ];
        $price_now =$last['rate'];

        $emission =  Emission::query()->where('token_name','MCP')->first();

            return view('is.is_main', compact('blocks','price_now','chart_date','data_cart','emission'));
    }
}

<?php

namespace App\Http\Controllers\ICO;

use App\Http\Controllers\Controller;
use App\Models\Emission;
use Illuminate\Support\Facades\App;


class MCPTokenController extends Controller
{
    public function index(){
        $MCPtoken = Emission::where('token_name','MCP')->first() or App::abort(404);

        $ethPrice = json_decode(file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=BTC,USD,EUR'));



        return view('ico.ico_main',compact('MCPtoken','ethPrice'));
    }
}

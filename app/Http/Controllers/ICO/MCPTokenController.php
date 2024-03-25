<?php

namespace App\Http\Controllers\ICO;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Emission;
use Illuminate\Support\Facades\App;


class MCPTokenController extends Controller
{
    public function index(){
        $MCPtoken = Emission::where('token_name','MCP')->first() or App::abort(404);


		$q = Currency::query()->with('last_rate')->where('code','MCP')->first();
		$nowPrice = $q->last_rate->rate;

        return view('ico.ico_main',compact('MCPtoken','nowPrice'));
    }
}

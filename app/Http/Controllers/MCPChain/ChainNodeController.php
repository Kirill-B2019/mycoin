<?php

namespace App\Http\Controllers\MCPChain;

use App\Http\Controllers\Controller;
use App\Models\BlockChain\Chain;
use App\Models\BlockChain\ChainNode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ChainNodeController extends Controller
{


    public function index()
    {
        /* $model = ChainNode::find(1);
        dd( $model->getAllColumnsNames() );*/
        $chainNodes = ChainNode::all();
        return view('adp.chain_nodes', compact(['chainNodes']));
    }
    public function create(Request $Request): string|\Illuminate\Http\RedirectResponse
    {

        $validation = Validator::make($Request->all(), [
            'chainPublicKey'=> ['required'],
            'data' => ['nullable'],
            'nodeIP' => ['required'],
            'nodePort' => ['required'],

        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }


        ChainNode::create([
            'chainPublicKey'=>$Request->get('chainPublicKey'),
            'data'=>json_encode($Request->get('chainPublicKey')),
            'nodeIP'=>$Request->get('nodeIP'),
            'nodePort'=>$Request->get('nodePort'),

        ]);

        return Redirect::route("adp.chain_nodes")->with('status', 'Новая нода СОЗДАНА!');

    }
    public function update(Request $Request)
    {

        $validation = Validator::make($Request->all(), [
            'chainPublicKey'=> ['required'],
            'data' => ['nullable'],
            'nodeIP' => ['required'],
            'nodePort' => ['required'],
        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        ChainNode::where('id', $Request->get('id'))
            ->update([
                'chainPublicKey'=>$Request->get('chainPublicKey'),
                'data'=>json_encode($Request->get('chainPublicKey')),
                'nodeIP'=>ip2long($Request->get('nodeIP')),
                'nodePort'=>$Request->get('nodePort'),
            ]);

        return view("adp.chain_nodes")->with('status', 'Ноде: '.$Request->get('nodeIP').' ОБНОВЛЕНА!');
    }
    public function delete(Request $Request): \Illuminate\Http\RedirectResponse
    {
        ChainNode::where('id',$Request->get('id'))->delete();
        return Redirect::route('adp.chain_nodes')->with('status', 'Нода: '.$Request->get('nodeIP').' УДАЛЕНА!');
    }
}

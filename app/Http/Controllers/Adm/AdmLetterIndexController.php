<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\LetterIndex;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmLetterIndexController extends AdminController
{
    public function index()
    {
        return view("adp.letterIndex",['LetterIndex'=>LetterIndex::all()]);

    }
    public function update(Request $Request)
    {
        $validation = Validator::make($Request->all(), [
            'index_name'=>['required','max:255'],
            'desc' => ['required','max:3000'],
            'range_start' => ['nullable','numeric'],
            'range_stop' => ['nullable','numeric'],


        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }
        $used = 0;
        if ($Request->get('used') == 'on'){$used = 1;}

        LetterIndex::where('id', $Request->get('id'))
            ->update([
                'index_name'=>$Request->get('index_name'),
                'desc' => $Request->get('desc'),
                'used' =>$used,
                'range_start' => $Request->get('range_start'),
                'range_stop' => $Request->get('range_stop'),

            ]);

        return Redirect::route("adp.letterIndex",['LetterIndex'=>LetterIndex::all()])->with('status', 'Буквенный индекс '.$Request->get('index_name').' ОБНОВЛЕН!');


    }
}

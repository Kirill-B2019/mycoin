<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\Attractiveness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AdmAttractivenessController extends AdminController
{
    // привлекательности
    public function index()
    {

        return view("adp.attractiveness",['ProjectAttractiveness'=>Attractiveness::all()]);
    }
    public function create(Request $Request)
    {

        $validation = Validator::make($Request->all(), [
            'name'=> ['required','max:255'],
            'slug' => ['required','unique:attractivenesses,slug','max:255'],
            'desc' => ['nullable','max:1000'],
            'weight_it' => ['nullable','numeric','max:100'],
            'weight_health' => ['nullable','numeric','max:100'],
            'weight_hi' => ['nullable','numeric','max:100'],
            'weight_clean' => ['nullable','numeric','max:100']

        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        Attractiveness::create([
            'name'=>$Request->get('name'),
            'slug'=>getNormalSlug($Request->get('slug')),
            'desc'=>$Request->get('desc'),
            'weight_it' => $Request->get('weight_it'),
            'weight_health' => $Request->get('weight_health'),
            'weight_hi' => $Request->get('weight_hi'),
            'weight_clean' => $Request->get('weight_clean'),
        ]);

        return Redirect::route("adp.attractiveness",['ProjectAttractiveness'=>Attractiveness::all()])->with('status', 'Новый виды инвестиционной привлекательности: '.$Request->get('name').' СОЗДАН!');

    }
    public function update(Request $Request): string
    {

        $validation = Validator::make($Request->all(), [
            'name'=> ['required','max:255'],
            'decs' => ['nullable','max:1000'],
            'weight_it' => ['nullable','numeric','max:100'],
            'weight_health' => ['nullable','numeric','max:100'],
            'weight_hi' => ['nullable','numeric','max:100'],
            'weight_clean' => ['nullable','numeric','max:100']

        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }
        Attractiveness::where('id', $Request->get('id'))
            ->update([
                'name'=>$Request->get('name'),
                'desc'=>$Request->get('desc'),
                'weight_it' => $Request->get('weight_it'),
                'weight_health' => $Request->get('weight_health'),
                'weight_hi' => $Request->get('weight_hi'),
                'weight_clean' => $Request->get('weight_clean'),
                'updated_at'=>NOW(),
            ]);

        return view("adp.attractiveness",['ProjectAttractiveness'=>Attractiveness::all()])->with('status', 'Виды инвестиционной привлекательности '.$Request->get('name').' ОБНОВЛЕН!');
    }
    public function delete(Request $Request): \Illuminate\Http\RedirectResponse
    {
        Attractiveness::where('id',$Request->get('id'))->delete() or App::abort(404);
        return Redirect::route('adp.attractiveness')->with('status', 'Виды инвестиционной привлекательности '.$Request->get('name').' УДАЛЕН!');
    }


}

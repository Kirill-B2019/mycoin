<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\BlockImportant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AdmBlockImportantController extends Controller
{
    public function index()
    {


        return view("adp.blocks_important",['blocks'=>BlockImportant::all()]);
    }
    public function create(Request $Request): string|\Illuminate\Http\RedirectResponse
    {

        $validation = Validator::make($Request->all(), [
            'name'=>['required','max:255'],
            'slug' => ['required','unique:block_importants,slug','max:255'],
            'desc' => ['required','max:1500'],
            "button_text" => ['required','max:255'],
            "route_name"=>['required','max:255'],
            "start_data" => ['nullable'],
            "stop_data" => ['nullable'],
            "target" => ['nullable'],
            "collected" => ['nullable'],
            "minimum_payment" => ['nullable'],
            "other_desc" => ['nullable'],
        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        BlockImportant::create([
            "name" => $Request->get('name'),
            "slug" => getNormalSlug($Request->get('slug')),
            "desc" => $Request->get('desc'),
            "button_text" => $Request->get('button_text'),
            "route_name" => $Request->get('route_name'),
            "start_data" => $Request->get('start_data'),
            "stop_data" => $Request->get('stop_data'),
            "target" => $Request->get('target'),
            "collected" => $Request->get('collected'),
            "minimum_payment" => $Request->get('minimum_payment'),
            "other_desc" => $Request->get('other_desc'),
        ]);

        return Redirect::route("adp.blocks_important",['blocks'=>BlockImportant::all()])->with('status', 'Новый блок: '.$Request->get('name').' СОЗДАН!');

    }
    public function update(Request $Request): string
    {

        $validation = Validator::make($Request->all(), [
            'name'=>'required|max:255',

            'decs' => 'max:1000',

        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }
        $active = 0;
        if ($Request->get('active') == 'on'){$active = 1;}
        BlockImportant::where('id', $Request->get('id'))
            ->update([
                "name" => $Request->get('name'),
                "slug" => getNormalSlug($Request->get('slug')),
                "desc" => $Request->get('desc'),
                "button_text" => $Request->get('button_text'),
                "route_name" => $Request->get('route_name'),
                "start_data" => $Request->get('start_data'),
                "stop_data" => $Request->get('stop_data'),
                "target" => $Request->get('target'),
                "collected" => $Request->get('collected'),
                "minimum_payment" => $Request->get('minimum_payment'),
                "other_desc" => $Request->get('other_desc'),
                'active'=>$active,
                'updated_at'=>NOW(),
            ]);

        return Redirect::route('adp.blocks_important')->with('status', 'Запись '.$Request->get('name').' ОБНОВЛЕНА!');
    }
    public function delete(Request $Request): \Illuminate\Http\RedirectResponse
    {
        BlockImportant::where('id',$Request->get('id'))->delete();
        return Redirect::route('adp.blocks_important')->with('status', 'Запись '.$Request->get('name').' УДАЛЕНА!');
    }


}

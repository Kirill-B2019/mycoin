<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmOrderStatusController extends AdminController
{
    // категории
    public function index()
    {
        return view("adp.order_status",['orders'=>OrderStatus::all()]);
    }
    public function create(Request $Request): string|\Illuminate\Http\RedirectResponse
    {

        $validation = Validator::make($Request->all(), [
            'name'=>['required','max:255'],
            'slug' => ['required','unique:order_statuses,slug','max:255'],
            'desc' => ['nullable','max:1500'],

        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        OrderStatus::create([
            'name'=>$Request->get('name'),
            'slug'=>getNormalSlug($Request->get('slug')),
            'desc'=>$Request->get('desc'),
        ]);
        return Redirect::route("adp.order_status")->with('status', 'Новый статус : '.$Request->get('name').' СОЗДАН!');

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
        OrderStatus::where('id', $Request->get('id'))
            ->update([
                'name'=>$Request->get('name'),
                'desc'=>$Request->get('desc'),
                'updated_at'=>NOW(),
            ]);

        return Redirect::route('adp.order_status')->with('status', 'Статус '.$Request->get('name').' ОБНОВЛЕН!');
    }
    public function delete(Request $Request): \Illuminate\Http\RedirectResponse
    {
        OrderStatus::where('id',$Request->get('id'))->delete();
        return Redirect::route('adp.order_status')->with('status', 'Статус '.$Request->get('name').' УДАЛЕН!');
    }
    // конец категориям
}

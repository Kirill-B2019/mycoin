<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AdmCategoryController extends AdminController
{
    // категории
    public function index()
    {
        return view("adp.categories",['ProjectCat'=>Category::all()]);
    }
    public function create(Request $Request): string|\Illuminate\Http\RedirectResponse
    {

        $validation = Validator::make($Request->all(), [
            'name'=>['required','max:255'],
            'slug' => ['required','unique:categories,slug','max:255'],
            'desc' => ['nullable','max:1500'],

        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        Category::create([
            'name'=>$Request->get('name'),
            'slug'=>getNormalSlug($Request->get('slug')),
            'desc'=>$Request->get('desc'),
        ]);
        return Redirect::route("adp.categories",['ProjectCat'=>Category::all()])->with('status', 'Новая категория проектов: '.$Request->get('name').' СОЗДАНА!');

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
        Category::where('id', $Request->get('id'))
            ->update([
                'name'=>$Request->get('name'),
                'desc'=>$Request->get('desc'),
                'updated_at'=>NOW(),
            ]);

        return Redirect::route('adp.categories')->with('status', 'Категория '.$Request->get('name').' ОБНОВЛЕНА!');
    }
    public function delete(Request $Request): \Illuminate\Http\RedirectResponse
    {
        Category::where('id',$Request->get('id'))->delete();
        return Redirect::route('adp.categories')->with('status', 'Категория '.$Request->get('name').' УДАЛЕНА!');
    }
    // конец категориям

}

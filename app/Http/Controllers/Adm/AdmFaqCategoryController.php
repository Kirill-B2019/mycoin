<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmFaqCategoryController extends AdminController
{
    // Категории FAQ


    public function index()
    {

        return view("adp.FAQCategories",['FAQCategories'=>FaqCategory::all()]);
    }
    public function create(Request $Request): string|\Illuminate\Http\RedirectResponse
    {

        $validation = Validator::make($Request->all(), [
            'name'=> ['required','max:255'],
            'slug' => ['required','unique:faq_categories,slug','max:255'],
            'desc' => ['nullable','max:1000'],
            'parentID' => ['nullable','numeric']


        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        FaqCategory::create([
            'name'=>$Request->get('name'),
            'slug'=>getNormalSlug($Request->get('slug')),
            'desc'=>$Request->get('desc'),
            'category_id'=>$Request->get('parentID'),


        ]);

        return Redirect::route("adp.FAQCategories",['FAQCategories'=>FaqCategory::all()])->with('status', 'Новая FAQ ктегории: '.$Request->get('name').' СОЗДАНА!');

    }
    public function update(Request $Request): string
    {

        $validation = Validator::make($Request->all(), [
            'name'=> ['required','max:255'],
            'desc' => ['nullable','max:1000'],
            'parentID' => ['nullable','numeric']



        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }
        FaqCategory::where('id', $Request->get('id'))
            ->update([
                'name'=>$Request->get('name'),
                'desc'=>$Request->get('desc'),
                'category_id'=>$Request->get('parentID'),
                'updated_at'=>NOW(),
            ]);

        return Redirect::route("adp.FAQCategories",['FAQCategories'=>FaqCategory::all()])->with('status', 'FAQ ктегория: '.$Request->get('name').' ОБНОВЛЕНА!');
    }
    public function delete(Request $Request): \Illuminate\Http\RedirectResponse
    {
        FaqCategory::where('id',$Request->get('id'))->delete();
        return Redirect::route('adp.FAQCategories')->with('status', 'FAQ ктегория: '.$Request->get('name').' УДАЛЕНА!');
    }
    // TODO разобраться с редиректами и сообщениями после ошибки валидатора
}

<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\FaqArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmFaqArticleController extends Controller
{
    public function index()
    {
        $FaqArticles = FaqArticle::with('faqCategory')->get();
           return view("adp.FaqArticles", compact(['FaqArticles']));
    }
    public function create(Request $Request): string|\Illuminate\Http\RedirectResponse
    {

        $validation = Validator::make($Request->all(), [
            'name'=> ['required','max:255'],
            'slug' => ['required','unique:faq_articles,slug','max:355'],
            'coinIn-editor' => ['nullable'],
            'FAQCategory_ID' => ['nullable','numeric'],
         ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        $published = NULL;
        if ($Request->get('published') == 'on'){$published = now();}

        FaqArticle::create([
            'name'=>$Request->get('name'),
            'slug'=>getNormalSlug($Request->get('slug')),
            'desc'=>$Request->get('coinIn-editor'),
            'faq_category_id'=>$Request->get('FAQCategory_ID'),
            'published'=>$published,
       ]);

        return Redirect::route("adp.FAQArticles",['FaqArticles'=>FaqArticle::all()])->with('status', 'Новая FAQ статья: '.$Request->get('name').' СОЗДАНА!');

    }
    public function update(Request $Request)
    {

        $validation = Validator::make($Request->all(), [
            'name'=> ['required','max:255'],
            'FAQCategory_ID' => ['nullable','numeric'],
        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }
        $published = NULL;
        if ($Request->get('published') == 'on'){$published = now();}
        FaqArticle::where('id', $Request->get('id'))
            ->update([
                'name'=>$Request->get('name'),
                'desc'=>$Request->get('coinIn-editor'),
                'faq_category_id'=>$Request->get('FAQCategory_ID'),
                'published'=>$published,
                'updated_at'=>NOW(),
            ]);

        return view("adp.FAQArticles",['FaqArticles'=>FaqArticle::all()])->with('status', 'FAQ статья: '.$Request->get('name').' ОБНОВЛЕНА!');
    }
    public function delete(Request $Request): \Illuminate\Http\RedirectResponse
    {
        FaqArticle::where('id',$Request->get('id'))->delete();
        return Redirect::route('adp.FAQArticles')->with('status', 'FAQ статья: '.$Request->get('name').' УДАЛЕНА!');
    }

    public function publishArticle($id)
    {
        $res = FaqArticle::where('id', $id)->update(['published' => now(),'updated_at'=>now()]);
        $FaqArticles = FaqArticle::with('faqCategory')->get();
        return Redirect::route("adp.FAQArticles", compact(['FaqArticles']));
    }

    public function unpublishArticle($id)
    {
        $res = FaqArticle::where('id', $id)->update(['published' => NULL,'updated_at'=>now()]);
        $FaqArticles = FaqArticle::with('faqCategory')->get();
        return Redirect::route("adp.FAQArticles", compact(['FaqArticles']));
    }
    // TODO разобраться с сообщениями после ошибки валидатора
}

<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;


class PublicFaqCategoryController extends Controller
{
    // FaqCategory публичные

    public function index(){

        $FAQCategories = FaqCategory::with('publicGetArticles')->get();
        return view('project.faq')->with(compact('FAQCategories'));
    }


}

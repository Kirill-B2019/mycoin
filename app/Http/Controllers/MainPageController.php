<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Income;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\ProjectTeam;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class MainPageController extends Controller
{

    public function index()
    {
        $mainPage = Project::where('main_page','1')->firstOrFail() or App::abort(404);


        $ProjectCat = $mainPage->projectCat;
        $Incomes =$mainPage->projectIncomes;
        $Team= $mainPage->projectTeam;
        $allIncomes = Income::all()->sortBy('id');

        $actual_causes = Project::where('main_page',NULL)->get() or App::abort(404);

        return view('project.main',compact('ProjectCat' ,'mainPage','Incomes','Team','allIncomes','actual_causes'));

    }


}

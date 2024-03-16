<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Attractiveness;
use App\Models\AttractivenessesProject;
use App\Models\Project;
use Illuminate\Support\Facades\App;

class PublicProjectController extends Controller
{
    public function viewSingleProject($id)
    {


        $viewProject = Project::find($id) or App::abort(404);


        $projectCat = $viewProject->projectCat;
        $projectIncomes = $viewProject->projectIncomes;
        $projectInitiator= $viewProject->projectTeam;
        $projectDetailImages=$viewProject->projectImages;
        $projectCreator = $viewProject->projectUser;
        $projectSector = $viewProject->projectSector;

        $viewProjectAttValue = Project::with('projectAttractivenesses')->with('pubProjectAttractivenesses')->find($id);

        foreach ($viewProjectAttValue->projectAttractivenesses as $AttValue){
            $Attract = Attractiveness::find($AttValue->attractiveness_id) or App::abort(404);
            $data_cart['labels'][] = $Attract->name;
            $data_cart['data'][]=$AttValue->value;
            $data_cart['desc'][]=$Attract->desc;

        }
         //TODO расчитать и заполнить данными
        return view("project.single_project", compact('viewProject','projectCat','projectIncomes','projectInitiator','projectDetailImages','projectCreator','data_cart','projectSector'));
    }
}

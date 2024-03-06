<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\Attractiveness;
use App\Models\AttractivenessesProject;
use App\Models\LetterIndex;
use App\Models\Project;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmAttractivenessesProjectsController extends AdminController
{
    public function index($project_id)
    {
        $Project = Project::findOrFail($project_id) or App::abort(404);
        $allAttractivenesses = Attractiveness::all();
        $projectAttractivenesses = NULL;

        $allSectors = Sector::all();
        foreach ($allAttractivenesses as $key=>$value)
        {
            $labels[]=$value->name;
     ;
            if(Project::has('projectAttractivenesses')->count() != 0)
            {
                $projectAttres = Project::with('projectAttractivenesses')->get();

                foreach ($projectAttres as $projectAttr)
                {
                    foreach ($projectAttr->projectAttractivenesses as $projectAttractiv )
                    {
                        if($value->id == $projectAttractiv->attractiveness_id)
                        {
                            $id_attr[]=$projectAttractiv->attractiveness_id;
                            $data[]=$projectAttractiv->value;
                        }

                    }
                }
            }
            else{
                $id_attr[] = $value->id;
                $data[]=1;

            }

        }

        $priced_around = $Project->priced_around;
        $data_cart = compact('labels', 'data');
        $select_data = array_combine($id_attr,$data);
        $widthSectorLetter=LetterIndex::where('index_name',$Project->letter_index)->first();
        $global_type =$Project->global_type;
        return view('adp.assessment',compact(['Project','allAttractivenesses','data_cart','allSectors','select_data','priced_around','global_type','widthSectorLetter','projectAttractivenesses']));
    }
    //предварительный расчет
    public function preCalculation(Request $Request, $project_id)
    {

        $usedAttractiveness =Attractiveness::whereIn('id',array_keys($Request->get('AttractivenessID')))->get();
        $Project = Project::findOrFail($project_id) or App::abort(404);

        switch ($Project->global_type)
        {
            case 1:
                foreach ($Request->get('AttractivenessID') as $AttractivenessID=>$value)
                {
                    $res = Attractiveness::select('weight_it')->where('id',$AttractivenessID)->first();
                    $sum[]=$value*$res->weight_it/100;
                }
           break;
            case 2:
                foreach ($Request->get('AttractivenessID') as $AttractivenessID=>$value)
                {
                    $res = Attractiveness::select('weight_health')->where('id',$AttractivenessID)->first();
                    $sum[]=$value*$res->weight_health/100;

                }
                break;
            case 3:
                foreach ($Request->get('AttractivenessID') as $AttractivenessID=>$value)
                {
                    $res = Attractiveness::select('weight_hi')->where('id',$AttractivenessID)->first();
                    $sum[]=$value*$res->weight_hi/100;
                }
                 break;
            case 4:
                foreach ($Request->get('AttractivenessID') as $AttractivenessID=>$value)
                {
                    $res = Attractiveness::select('weight_clean')->where('id',$AttractivenessID)->first();
                    $sum[]=$value*$res->weight_clean/100;
                }
                break;
        }

        foreach ($usedAttractiveness as $key=>$value)
        {
            $labels[]=$value->name;
            $data[]=$Request->get('AttractivenessID')[$value->id];
            $desc[]=$value->desc;
            $slug[]=$value->slug;
            $id_attr[]=$value->id;

        }
        $global_type =$Project->global_type;
        if ($Request->get('global_type')){$global_type = $Request->get('global_type');}
        $calc = array_sum($sum);
        $weight_sector = Sector::select('ratio')->where('id',$global_type)->first();
        $widthSector = array_sum($Request->get('AttractivenessID'))*$weight_sector->ratio/count($Request->get('AttractivenessID'))*10;
        if($widthSector >100){$widthSector=100;}
        $data_cart = compact('labels', 'data');
        $select_data = array_combine($id_attr,$data);
        $allAttractivenesses = Attractiveness::all();
        $allSectors = Sector::all();

        $widthSectorLetter=NULL;
        $widthSectorLetter = LetterIndex::where('range_start','<=',$widthSector)->where('range_stop','>=',$widthSector)->first();

        $priced_around = $Project->target*$calc;

        return view('adp.assessment',compact(['Project','allAttractivenesses','data_cart','select_data','allSectors','priced_around','global_type','widthSectorLetter']));
    }

    public function calculation(Request $Request, $project_id)
    {

        $validation = Validator::make($Request->all(), [
            'letter_index' => ['nullable','max:1000'],
            'priced_around' => ['nullable','max:100']
        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        foreach ($Request->get('AttractivenessID') as $AttractivenessID=>$value)
        {

            AttractivenessesProject::updateOrCreate([
                'project_id'=>$project_id,
                'attractiveness_id'=>$AttractivenessID,
            ],[
                'attractiveness_id'=>$AttractivenessID,
                'project_id'=>$project_id,
                'value'=>$value,
            ]);

        }

        Project::where('id',$project_id)->update([
            'letter_index'=>$Request->get('letter_index'),
            'priced_around'=> (int)str_replace(' ', '', $Request->get('priced_around')),
            'global_type'=>$Request->get('global_type'),

        ]);


        $allProjects = Project::with('projectSector')->get()->sortBy('start');
        return Redirect::route("adp.projects", compact('allProjects'));
    }


}

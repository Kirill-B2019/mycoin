<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\ProjectTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdmProjectsController extends AdminController
{

    // ПРОЕКТЫ

    //Просмотр всех
    public function viewProjects()
    {
        $allProjects = Project::with('projectSector')->get()->sortBy('start');
        return view("adp.projects", compact('allProjects'));
    }

    //Просмотр одного
    public function viewSingleProject($projectId)
    {

        $singleProject = Project::find($projectId);


        $categories = $singleProject->projectCat;
        $incomes = $singleProject->projectIncomes;
        $initiator= $singleProject->projectTeam;
        $deteailimages=$singleProject->projectImages;
        $creatorProject = $singleProject->projectUser;

        return view("adp.single_project", compact('singleProject','categories','incomes','initiator','deteailimages','creatorProject'));
    }

    // к созданию
    public function newProjects(Request $request)
    {

        $allCategories = Category::all();
        return view('adp.new-project',compact('allCategories'));
    }

    //создание проекта

    public function createProject(Request $Request): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {

        $validated= validator($Request->all(),[
                 'name'=>['required','string','max:255','unique:projects'],
                 'slogan'=>['required','string','max:500'],
                 'preview_desc'=>['required','string','max:1500'],
                 'coinIn-editor'=>['required'],
                 'preview_image' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
                 'image.*' =>['image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
                 'start'  =>  ['required','date'],
                 'stop'  =>  ['nullable','date'],
                 'target'  =>  ['required','numeric'],
                 'minimum_payment'  =>  ['nullable','numeric'],
                 'collected'  =>  ['nullable','numeric'],
                 'commission'  =>  ['nullable','numeric'],
                 'owner_wallet'=>['required','max:255'],
                 'info_mail' => ['required', 'string', 'email', 'max:255'],
                 'site'=>['nullable','string','max:500'],
                 'vk'=>['nullable','string','max:500'],
                 'instagram'=>['nullable','string','max:500'],
                 'youtube'=>['nullable','string','max:500'],
                 'main_page'=>['nullable','numeric'],
                 'published'=>['nullable','numeric'],
                 'item_Avatar'=> ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
                 'item_Name'=>['required','string','max:255'],
                 'item_LastName'=>['nullable','string','max:500'],
                 'item_Role'=>['required','string','max:500'],
                 'item_Desc'=>['nullable','max:1000'],
                 'global_type'=>['required'],


             ])->validate();


                $preview_image = $Request->file('preview_image');
                $image = $Request->file('image');

        if($Request->get('onMainPage') == 1)
        {
            Project::where('main_page', '=', 1)->update(['main_page' => NULL]);
        }
        $published =$Request->get('published');
        if ($Request->get('published') == 1)
        {
            $published = now();
        }

      $NewProject = Project::create([
            'creator_id'=>Auth::id(),
            'parent'=>$Request->get('inProject'),
            'name'=>$Request->get('name'),
            'announce'=>$Request->get('slogan'),
            'global_type'=>$Request->get('global_type'),
            'preview_desc'=>$Request->get('preview_desc'),
            'desc'=>$Request->get('coinIn-editor'),
            'image'=>$image,
            'start'=>$Request->get('start'),
            'stop'=>$Request->get('stop'),
            'target'  =>  $Request->get('target'),
            'minimum_payment'  =>  $Request->get('minimum_payment'),
            'collected'  =>  $Request->get('collected'),
            'commission'  =>  $Request->get('commission'),
            'owner_wallet'=> $Request->get('owner_wallet'),
            'info_mail' =>  $Request->get('info_mail'),
            'site'=> $Request->get('site'),
            'vk'=> $Request->get('vk'),
            'instagram'=> $Request->get('instagram'),
            'youtube'=> $Request->get('youtube'),
            'main_page'=>$Request->get('onMainPage'),
            'published'=>$published,

        ]);

        //есть картинка анонса

            $preview_image = 'storage/CreatorID_'.Auth::id().'/ProjectID_'.$NewProject->id.'/'.time() . '_preview.' . $Request->file('preview_image')->extension();
            $Request->file('preview_image')->move(public_path('storage').'/CreatorID_'.Auth::id().'/ProjectID_'.$NewProject->id.'/', $preview_image);



        //детальное изображение в отдельной таблице
        $count = 0;
       foreach ($image as $key=>$value)
        {
            $count++;

            $image = 'storage/CreatorID_'.Auth::id().'/ProjectID_'.$NewProject->id.'/'.time() . '_datail_' .$count.'.'.$value->extension();
            $value->move(public_path('storage').'/CreatorID_'.Auth::id().'/ProjectID_'.$NewProject->id.'/', $image);
            ProjectImage::create([
                'project_id'=>$NewProject->id,
                'url'=>$image
            ]);
        }

        $NewProject->preview_image =$preview_image ;
        $NewProject->save();

        //команда проекта в отдельной таблице
        $itemAvatar = 'storage/CreatorID_'.Auth::id().'/ProjectID_'.$NewProject->id.'/Team/'.time() . '_mainItemAvatar.' . $Request->file('item_Avatar')->extension();
        $Request->file('item_Avatar')->move(public_path('storage').'/CreatorID_'.Auth::id().'/ProjectID_'.$NewProject->id.'/Team/', $itemAvatar);

        $newProjectTeam = ProjectTeam::create([
            'project_id'=>$NewProject->id,
            'item_Avatar'=>$itemAvatar,
            'item_Name'=>$Request->get('item_Name'),
            'item_LastName'=>$Request->get('item_LastName'),
            'item_Role'=>$Request->get('item_Role'),
            'item_Desc'=>$Request->get('item_Desc'),
        ]);



                //Добавляем категории
                $NewProject->projectCat()->sync(($Request->categories));
                //Добавляем виды доходов
                $NewProject->projectIncomes()->sync(($Request->incomes));
                $allProjects = Project::all()->sortBy('start');
        return view("adp.projects", compact('allProjects'))
            ->with('status', 'Новый проект: '.$Request->get('name').' СОЗДАН!');


    }


    public function publishProject($id)
    {
            $res=Project::where('id', $id)->update(['published'=>now()]);

            $name = Project::findOrFail($id);

            $allProjects = Project::all()->sortBy('start');
            return view("adp.projects", compact('allProjects'))
                ->with('status', 'Новый проект: '.$name->name.' СОЗДАН!');

    }

    //конец проектам


}



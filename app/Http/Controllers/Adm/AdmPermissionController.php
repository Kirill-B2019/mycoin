<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmPermissionController extends Controller
{
    public function index()
    {

        return view('adp.permissions',['AllPermission'=>Permission::all()]);
    }

    public function create(Request $Request)
    {
        $validation = Validator::make($Request->all(), [
            'name'=>['required','max:255'],
            'slug' => ['required','unique:permissions,slug','max:255'],
             ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        Permission::create([
            'name'=>$Request->get('name'),
            'slug'=>getNormalSlug($Request->get('slug')),
        ]);
        return Redirect::route('adp.permissions',['AllPermission'=>Permission::all()])->with('status', 'Привелегия  '.$Request->get('name').' ДОБАВЛЕНА!');;
    }


    public function update(Request $Request)
    {

        $validation = Validator::make($Request->all(), [
            'name'=>'required|max:255',
        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        Permission::where('id', $Request->get('id'))
            ->update([
                'name'=>$Request->get('name'),
                'updated_at'=>NOW(),
            ]);
        $AllPermission = Permission::all();

        return Redirect::route("adp.permissions",compact('AllPermission'))->with('status', 'Привелегия '.$Request->get('name').' ОБНОВЛЕНА!');
    }
    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        Permission::findOrFail($id)->delete();
        return Redirect::route("adp.permissions",['$AllPermission'=>Permission::all()])->with('status', 'Привелегия УДАЛЕНА!');
    }

}

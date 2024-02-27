<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $AllRoles=Role::all();
        $AllPermissions = Permission::all();
        return view('adp.roles',compact('AllRoles','AllPermissions'));

    }

    public function show($id)
    {

        $Role = Role::findOrFail($id);
        $AllPermissions = Permission::all();
        return view('adp.show_role',compact('Role','AllPermissions'));

    }

    public function create(Request $Request): string|\Illuminate\Http\RedirectResponse
    {
        $validation = Validator::make($Request->all(), [
            'name'=>['required','max:255'],
            'slug' => ['required','unique:roles,slug','max:255'],


        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        $newRole = Role::create([
            'name'=>$Request->get('name'),
            'slug'=>getNormalSlug($Request->get('slug')),
        ]);



        return Redirect::route("adp.roles",['AllRoles'=>Role::all()])->with('status', 'Новая роль: '.$Request->get('name').' СОЗДАНА!');
    }
    public function update(Request $Request, Role $role)
        {

        $validation = Validator::make($Request->all(), [
            'name'=>'required|max:255',
        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }
        $upRole = Role::where('id', $Request->get('id'))
            ->update([
                'name'=>$Request->get('name'),
                'updated_at'=>NOW(),
            ]);
        $upRole = Role::findOrFail($Request->get('id'));
        $upRole->permissions()->sync($Request->perms ?? []);
        $AllRoles = Role::all();
            foreach ($AllRoles as $upRole){
                $upRole->permissions;
            }
        return Redirect::route("adp.roles",compact('AllRoles','upRole'))->with('status', 'Роль '.$Request->get('name').' ОБНОВЛЕНА!');
    }
    public function delete(Role $id): \Illuminate\Http\RedirectResponse
    {
           $id->delete();
           DB::table('permissions_roles')->where('role_id',$id->id)->delete();
           return Redirect::route("adp.roles",['AllRoles'=>Role::all()])->with('status', 'Роль УДАЛЕНА!');
   }

}

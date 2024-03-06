<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmUserController extends AdminController
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $userData = User::all();
        foreach ($userData as $user) {
            $user->Role;
        }
        return view('adp.users', compact('userData'));
    }

    public function update(Request $Request)
    {

        $validation = Validator::make($Request->all(), [
            'users_name' => ['required', 'max:50'],
            'users_email' => ['required', 'email'],
            'users_avatar' => ['nullable', 'mimes:jpeg,jpg,png,gif'],

        ]);

        if ($validation->fails()) {
            return $validation->errors()->first();
        }

        User::where('id', $Request->get('id'))
            ->update([
                'name' => $Request->get('users_name'),
                'email' => $Request->get('users_email'),
            ]);

        return Redirect::route('adp.users')->with('status', 'Запись о пользователе ' . $Request->get('name') . ' ОБНОВЛЕНА!');
    }

    public function delete(Request $Request)
    {

        User::where('id', $Request->get('id'))->delete();
        return Redirect::route('adp.users')->with('status', 'Запись о пользователе ' . $Request->get('name') . ' УДАЛЕНА!');
    }

    //настройка назначений ролей и прав = index
    public function userRolePermissionShow($id)
    {
        $user = User::findOrFail($id);
        $allroles = Role::all();
        $allperms = Permission::all();

        return view('adp.userRolePermission', compact('user', 'allroles', 'allperms'));
    }

    //выдача прав пользователю
    public function updateUserPermission(Request $request, User $user)
    {


        $user->permissions()->sync($request->perms);

        /*
         * Возвращаемся к списку
         */
        $user = User::findOrFail($user->id);
        $allroles = Role::all();
        $allperms = Permission::all();
        $id = $user->id;
        return Redirect::route('adp.userRolePermission', compact('id', 'user', 'allroles', 'allperms'))->with('status', 'Права пользователя ' . $user->name . ' ОБНОВЛЕНЫ!');
    }

    //назначить роль пользователю
    public function assignRole(User $user, Role $role)
    {
        $allroles = Role::all();
        $allperms = Permission::all();
        $user->assignRoles($role->slug);
        $id = $user->id;
        return Redirect::route('adp.userRolePermission',compact('id','user','allroles','allperms'))->with('status', 'Назначена роль ' . $role->name );
    }

    public function unassignRole(User $user, Role $role)
    {
        $allroles = Role::all();
        $allperms = Permission::all();
        $user->unassignRoles($role->slug);
        $id = $user->id;
        return Redirect::route('adp.userRolePermission',compact('id','user','allroles','allperms'))->with('status', 'Отмена роли ' . $role->name );;
    }
}

<?php

namespace App\Traits;
use App\Models\Role;
use App\Models\Permission;


trait HasRolesAndPermissions
{

    public function getRole(){
        return $this->roles()->first();
    }

    /**
     * Возвращает массив всех прав текущего пользователя
     */
    public function getAllPerms() {
        return $this->permissions->pluck('slug')->toArray();
    }

    /**
    * Возвращает массив всех ролей текущего пользователя
    */
    public function getAllRoles() {
        return $this->roles;
    }

    public function roles() {
        return $this
            ->belongsToMany(Role::class, 'roles_users');
    }

    /**
     * Связь модели User с моделью Permission, позволяет получить все права пользователя
     */
    public function permissions() {
        return $this
            ->belongsToMany(Permission::class, 'permissions_users');
    }

    /**
     * Имеет текущий пользователь роль $role?
     */
    public function hasRole($role) {

        return $this->roles->contains('slug', $role);
    }

    /**
     * Имеет текущий пользователь право $permission?
     */
    public function hasPerm($permission) {
        return $this->permissions->contains('slug', $permission);
    }

    /**
     * Имеет текущий пользователь право $permission через одну
     * из своих ролей?
     */
    public function hasPermViaRoles($permission) {
        // смотрим все роли пользователя и ищем в них нужное право
        foreach ($this->roles as $role) {
            if ($role->permissions->contains('slug', $permission)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Имеет текущий пользователь право $permission либо напрямую,
     * либо через одну из своих ролей?
     */
    public function hasPermAnyWay($permission) {
        return $this->hasPermViaRoles($permission) || $this->hasPerm($permission);
    }

    /**
     * Имеет текущий пользователь все права из $permissions либо
     * напрямую, либо через одну из своих ролей?
     */
    public function hasAllPerms(...$permissions) {
        foreach ($permissions as $permission) {
            $condition = $this->hasPermViaRoles($permission) || $this->hasPerm($permission);
            if ( ! $condition) {
                return false;
            }
        }
        return true;
    }

    /**
     * Имеет текущий пользователь любое право из $permissions либо
     * напрямую, либо через одну из своих ролей?
     */
    public function hasAnyPerms(...$permissions) {
        foreach ($permissions as $permission) {
            if ($this->hasPermViaRoles($permission) || $this->hasPerm($permission)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Добавить текущему пользователю права $permissions
     * (в дополнение к тем, что уже были назначены ранее)
     */
    public function assignPermissions(...$permissions) {
        $permissions = Permission::whereIn('slug', $permissions)->get();
        if ($permissions->count() === 0) {
            return $this;
        }
        $this->permissions()->syncWithoutDetaching($permissions);
        return $this;
    }

    /**
     * Отнять у текущего пользователя права $permissions
     * (из числа тех, что были назначены ранее)
     */
    public function unassignPermissions(...$permissions) {
        $permissions = Permission::whereIn('slug', $permissions)->get();
        if ($permissions->count() === 0) {
            return $this;
        }
        $this->permissions()->detach($permissions);
        return $this;
    }

    /**
     * Назначить текущему пользователю права $permissions
     * (отнять при этом все ранее назначенные права)
     */
    public function refreshPermissions(...$permissions) {
        $permissions = Permission::whereIn('slug', $permissions)->get();
        if ($permissions->count() === 0) {
            return $this;
        }
        $this->permissions()->sync($permissions);
        return $this;
    }

    /**
     * Добавить текущему пользователю роли $roles
     * (в дополнение к тем, что уже были назначены)
     */
    public function assignRoles(...$roles) {
        $roles = Role::whereIn('slug', $roles)->get();
        if ($roles->count() === 0) {
            return $this;
        }
        $this->roles()->syncWithoutDetaching($roles);
        return $this;
    }

    /**
     * Отнять у текущего пользователя роли $roles
     * (из числа тех, что были назначены ранее)
     */
    public function unassignRoles(...$roles) {
        $roles = Role::whereIn('slug', $roles)->get();
        if ($roles->count() === 0) {
            return $this;
        }
        $this->roles()->detach($roles);
        return $this;
    }

    /**
     * Назначить текущему пользователю роли $roles
     * (отнять при этом все ранее назначенные роли)
     */
    public function refreshRoles(...$roles) {
        $roles = Role::whereIn('slug', $roles)->get();
        if ($roles->count() === 0) {
            return $this;
        }
        $this->roles()->sync($roles);
        return $this;
    }

}

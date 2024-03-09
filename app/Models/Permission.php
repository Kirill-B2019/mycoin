<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;

    protected $guarded= [];

    /**
     * Связь модели Permission с моделью Role, позволяет получить
     * все роли, куда входит это право
     */
    public function roles() {
        return $this
            ->belongsToMany(Role::class,'permissions_roles');
    }
    /**
     * Связь модели Permission с моделью User, позволяет получить
     * всех пользователей с этим правом
     */
    public function users() {
        return $this
            ->belongsToMany(User::class,'permissions_users');
    }




}

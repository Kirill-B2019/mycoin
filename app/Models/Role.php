<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    protected $table = 'roles';
    protected $guarded = [];

    /**
     * Связь модели Role с моделью Permission, позволяет получить
     * все права для этой роли
     */
    public function permissions() {
        return $this
            ->belongsToMany(Permission::class,'permissions_roles');
    }
    /**
     * Связь модели Role с моделью Usrer, позволяет получить
     * всех пользователей с этой ролью
     */
    public function users() {
        return $this
            ->belongsToMany(User::class,'roles_users');
    }

}

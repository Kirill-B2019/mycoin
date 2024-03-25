<?php

namespace App\Models;



use App\Traits\HasRolesAndPermissions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRolesAndPermissions;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'status_id',
        'role_id',
        'verified',
        'user_desc',
        'user_real_name',
        'user_last_name',
        'vk',
        'instagram',
        'youtube',
        'user_company'
    ];
    protected $guarded = ['is_admin'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function isAdmin()
    {
        return $this->role_id === 2;
    }

    public function acceptedRole($roleSlug){

        $roleID = Role::findOrFail(Auth::user()->role_id);
        //СуперАдмин всегда все видит
        if($roleID->slug == 'SuperAdmin')
        {
            return true;
        }
        return $roleID->slug == $roleSlug;
    }

    public function Role(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function userProject()
    {
        return $this->belongsToMany(Project::class);
    }

    public function userWallet(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(UserWallet::class);
    }




}

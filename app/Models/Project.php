<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, HasRelationships,SoftDeletes;



    /**
     * @var mixed|string
     */
    protected $table = 'projects';
    protected $fillable = [
        'creator_id',
        'parent',
        'name',
        'announce',
        'desc',
        'preview_image',
        'start',
        'stop',
        'target',
        'minimum_payment',
        'minimum_payment',
        'collected',
        'commission',
        'owner_wallet',
        'info_mail',
        'site',
        'region',
        'vk',
        'instagram',
        'youtube',
        'preview_desc',
        'main_page',
        'published',
        'global_type'
    ];
    protected $guarded =[];
    //у проекта несколько категорий
    public function projectCat(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
    //у проекта несколько видов дохода
    public function projectIncomes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Income::class);
    }
    //у проекта несколько картинок
    public function projectImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProjectImage::class);
    }
    //у проекта несколько членов команды
    public function projectTeam(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(ProjectTeam::class);
    }
    //проект создал один пользователь
    public function projectUser()
    {
        return $this->hasOne(User::class,'id','creator_id');
    }
    // у проекта есть мног подписчиков
    public function projectSubscribes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Subscribe::class);
    }

    //у проекта есть тип - сектор
    public function projectSector(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Sector::class,'global_type','id');
    }

    public function projectAttractivenesses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AttractivenessesProject::class);
    }

    public function pubProjectAttractivenesses(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Attractiveness::class,
            AttractivenessesProject::class,
        );
    }

    public function projectOpinion()
    {
        return $this->hasOne(ExpertOpinion::class);
    }

}

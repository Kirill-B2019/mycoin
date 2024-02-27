<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;
    protected $table = 'project_images';
    protected $guarded=[];

    public function imagesProject(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Project::class,'id','project_id');
    }
}

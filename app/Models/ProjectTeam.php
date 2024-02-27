<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTeam extends Model
{
    use HasFactory;
    protected $table = 'project_teams';
    protected $guarded=[];
    public function teamProject(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Project::class);
    }
}

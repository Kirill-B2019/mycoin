<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{


    public $adress;
    public $parent_adress;
    public $version;
    public $confirmations;
    public mixed $criteria;
    public mixed $execute;
    public mixed $data;
    public $active;

    public function __construct($criteria = NUll, $execute = NULL, $data = NULL)
    {
        $this->criteria = $criteria;
        $this->execute = $execute;
        $this->adress = $data['adress'] ?? null;
        $this->parent_adress = $data['parent_adress'] ?? null;
        $this->version = $data['version'] ?? null;
        $this->confirmations = $data['confirmations'] ?? null;
     }

     public function toProject(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
     {
         return $this->belongsToMany(Project::class);
     }

     //TODO Currency
}

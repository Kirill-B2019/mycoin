<?php

namespace App\Models;

use App\Casts\ContractDataCriteriaContext;
use App\Casts\ContractDataExecuteContext;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{

use SoftDeletes;
    public $adress;
    public $parent_adress;
    public $version;
    public $confirmations;
    public mixed $criteria;
    public mixed $execute;
    public mixed $data;
    public $active;

    protected $guarded = [];

    protected $casts=[
        'criteria' => ContractDataCriteriaContext::class,
        'execute' => ContractDataExecuteContext::class
    ];

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

	 public function contractCurrency(): \Illuminate\Database\Eloquent\Relations\HasOne
	 {
		return $this->hasOne(Currency::class);
	 }
     //TODO Currency
}

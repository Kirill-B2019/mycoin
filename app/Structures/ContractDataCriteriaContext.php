<?php

namespace App\Structures;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

class ContractDataCriteriaContext implements Jsonable, Arrayable
{


    public static function fromcCiteriaArray($data)
    {
        $instance = new self();
        $instance->specific = isset($data['specific']) ? $data['specific'] : NULL; // (цель, задача по контракту)
        $instance->adress = isset($data['adress']) ? $data['adress'] : NULL;

       /*    public $adress;
    public $parent_adress;
    public $version;
    public $confirmations;
    public mixed $criteria;
    public mixed $execute;
    public mixed $data;
    public $active;*/
        return $instance;
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }

    public function toJson($options = 0)
    {
        // TODO: Implement toJson() method.
    }
}
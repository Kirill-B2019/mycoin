<?php

namespace App\Structures;

use AllowDynamicProperties;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

 class ContractDataCriteriaContext implements Jsonable, Arrayable
{


    private $specific;
    private $measurable;
    private $achievable;
    private $relevant;
    private $time_bound;

    public static function fromcCiteriaArray($data): self
    {
        $instance = new self();
        $instance->specific = isset($data['specific']) ? $data['specific'] : NULL; // (задача по контракту)
        $instance->measurable = isset($data['measurable']) ? $data['measurable'] : NULL; // (какие результаты покажут завершение цели)
        $instance->achievable  = isset($data['achievable']) ? $data['achievable'] : NULL; // (почему можем достичь эту цель specific {S})
        $instance->relevant  = isset($data['relevant']) ? $data['relevant'] : NULL; // (цель specific {S})
        $instance->time_bound   = isset($data['time_bound ']) ? $data['time_bound '] : NULL; // (конечный срок Time bound {T} для промежуточных и для конечных итогов)

        return $instance;
    }

    public function toArray(): array
    {
        return [
        'specific'=>$this->specific,
        'measurable' =>$this->measurable,
        'achievable' =>$this->achievable,
        'relevant' =>$this->relevant,
        'time_bound' =>$this->time_bound,
        ];
    }

    public function toJson($options = 0): false|string
    {
        return json_encode($this);
    }
}
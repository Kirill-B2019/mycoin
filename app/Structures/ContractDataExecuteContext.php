<?php

namespace App\Structures;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

class ContractDataExecuteContext implements Jsonable, Arrayable
{


    private $stop_contract;
    private string $executed;
    private $executed_at;
    private string$not_executed;
    private $not_executed_at;

    public static function fromcExecuteArray($data): self
    {
        $instance = new self();

        $instance->stop_contract = isset($data['stop_contract']) ? $data['stop_contract'] : NULL; // (когда выполнен)
        $instance->executed = isset($data['executed']) ? $data['executed'] : NULL; // (условия в случае исполнения)
        $instance->executed_at = isset($data['executed_at']) ? $data['executed_at'] : NULL; // (дата когда "условия в случае исполнения" исплонено)
        $instance->not_executed = isset($data['not_executed']) ? $data['not_executed '] : NULL; // (условия в случае неисполнения)
        $instance->not_executed_at = isset($data['not_executed_at']) ? $data['not_executed_at'] : NULL; // (дата когда "условия в случае исполнения" исплонено)
        return $instance;
    }

    /**
     * @inheritDoc
     */
    public function toJson($options = 0): false|string
    {
        return json_encode($this);
    }

    public function toArray(): array
    {
        return [
            'stop_contract'=>$this->stop_contract,
            'executed'=>$this->executed,
            'executed_at'=>$this->executed_at,
            'not_executed'=>$this->not_executed,
            'not_executed_at'=>$this->not_executed_at,

        ];
    }
}
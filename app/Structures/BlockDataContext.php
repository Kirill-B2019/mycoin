<?php

namespace App\Structures;


use App\Traits\HasBlockChain;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;




class BlockDataContext implements Jsonable, Arrayable, \Stringable
{

 use HasBlockChain;
    public  $contract;
    public $decimal_places = 6;
    public $amount = 0;
    public $sender = '';
    public $recipient ='';
    public $fee = 0;
    public $fee_recipient ='';
    public $escrow = false;
    public $system_message ='';
    private $role;
    private $PubKey;
    private $project_id;
    private $atr;

    public function __toString()
    {
        return $this->toJson();
    }
    public static function fromArray($data): self
    {
        $instance = new self();
        $instance->atr = $instance->getBlockAttibutes(isset($data['project_id']) ? $data['project_id'] : 1);
        $instance->project_id = isset($data['project_id']) ? $data['project_id'] : $instance->atr['contract'];
        $instance->contract = isset($data['contract']) ? $data['contract'] : 0;
        $instance->PubKey = isset($data['PubKey']) ? $data['PubKey'] : $instance->getPubKey();
        $instance->contract = isset($data['contract']) ? $data['contract'] : $instance->getContract();
        $instance->role = isset($data['role']) ? $data['role'] : $instance->getRole();
        $instance->decimal_places = isset($data['decimal_places']) ? $data['decimal_places'] : $instance->getDecimalPlaces();
        $instance->amount = isset($data['amount']) ? $data['amount'] : NULL;
        $instance->sender = isset($data['sender']) ? $data['sender'] : NULL;
        $instance->recipient = isset($data['recipient']) ? $data['recipient'] : NULL;
        $instance->fee = isset($data['fee']) ? $data['fee']  : $instance->getFee();
        $instance->fee_recipient = isset($data['fee_recipient']) ? $data['fee_recipient'] : $instance->getFeeRecipient();
        $instance->escrow = isset($data['escrow'])? $data['escrow'] : false;
        $instance->system_message = isset($data['system_message']) ? $data['system_message'] : NULL;

        return $instance;
    }


    public function toJson($options = 0): false|string
    {
        return json_encode($this);
    }

    public function toArray(): array
    {
        return [
            'project_id'=>$this->project_id,
            'atr'=>$this->atr,
            'contract'=>$this->contract,
            'role'=>$this->role,
            'PubKey'=>$this->PubKey,
            'decimal_places'=>$this->decimal_places,
            'amount'=>$this->amount,
            'sender'=>$this->sender,
            'recipient'=>$this->recipient,
            'fee'=>$this->fee,
            'fee_recipient'=>$this->fee_recipient,
            'escrow'=>$this->escrow,
            'system_message' => $this->system_message,
            ];
    }


}

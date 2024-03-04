<?php

namespace App\Models\BlockChain;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

class BlockDataContext implements Jsonable, Arrayable, \Stringable
{



    public $contract = '';
    public $decimal_places = 6;
    public $amount = NULL;
    public $sender ='';
    public $recipient ='';
    public $fee = 0;
    public $fee_recipient ='';
    public bool $escrow = false;
    public string $system_message ='';

    public function __toString()
    {
        return $this->toJson(0);
    }
    public static function fromArray($data): self
 {

     $instance = new self();

     $instance->contract = $data['contract'] ?: '';
     $instance->decimal_places=$data['decimal_places'] ?: 6;
     $instance->amount=$data['amount'] ?: NULL;
     $instance->sender=$data['sender'] ?: NULL;
     $instance->recipient=$data['recipient'] ?: NULL;
     $instance->fee=$data['fee'] ?: 0;
     $instance->fee_recipient=$data['fee_recipient'] ?: NULL;
     $instance->escrow=$data['escrow'] ?: false;
     $instance->system_message=$data['system_message'] ?: '';
     return $instance;
 }

    public function toJson($options = 0)
    {
        return json_encode($this);
    }

    public function toArray()
    {
        return [
            'contract'=>$this->contract,
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
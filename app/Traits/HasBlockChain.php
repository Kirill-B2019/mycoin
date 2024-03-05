<?php

namespace App\Traits;


use App\Models\BlockChain\Block;

trait HasBlockChain
{

    //TODO допиать все гетеры
    public function getContract(): string
    {
            return 'MainContractAdress';
    }
    public function getDecimalPlaces(): int
    {
        return 0;
    }

    public function getFee(): int
    {
        return 0;
    }
    public function getFeeRecipient(): string
    {
        return 'feeRecipient';
    }

}


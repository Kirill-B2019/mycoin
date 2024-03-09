<?php

namespace App\Traits;


use App\Models\BlockChain\Block;

trait HasBlockChain
{
    public function getBlockAttibutes($project_id): array
    {
        if($project_id==0){return [
            'contract' => $this->getContract(0),
        ];}

        return [
           'contract' => $this->getContract($project_id),
        ];
    }
    //TODO допиать все гетеры
    private function getContract($project_id = 0): string
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

    public function getRole($role = 0): string
    {
        $nodeRole = [
            '0'=>'SimpleNode',
            '1'=>'FillNode',
            '2'=>'MiningNode',
            ];
        return $nodeRole[$role];
    }

    public function getPubKey(): string
    {

        return 'PubKey';
    }


}


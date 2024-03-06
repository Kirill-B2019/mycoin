<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\SystemWallet;

class AdmWalletController extends AdminController
{

    public function index()
    {
        $USDT_tx_lists = $this->getListUSDTOut();
        $USDT_ERC_balance_out =  $this->getBalanceUSDTERCOut();

        $res = SystemWallet::firstOrCreate(
            [
                'created_at'=> date('Y-m-d'),
                'ammount_value'=>$USDT_ERC_balance_out/1000000,
            ],[
                'ammount_value'=>$USDT_ERC_balance_out/1000000,
              ]
        );
       return view('adp.wallet_balance', compact('USDT_ERC_balance_out','USDT_tx_lists'));
    }

//Запрос внешнего баланса USDT ERC-20
    public function getBalanceUSDTERCOut()
    {
        $wallet = new SystemWallet();

        $data = array(
            "module" => "account",
            "action" => "tokenbalance",
            'contractaddress' => $wallet->getAPI_USDT_ERC_Contract(),
            "address" => $wallet->getAPI_ETH_WalletId(),
            'tag' => 'latest',
            'apikey' => $wallet->getAPI_ETH_Key(),
        );
        $ch = curl_init($wallet->getAPI_ETH_Url());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = json_decode(curl_exec($ch));
        curl_close($ch);
        return $result->result;
    }

//Запрос внешнего баланса ETH
    public function getBalanceETHOut()
    {
        $wallet = new SystemWallet();

        $data = array(
            "module" => "account",
            "action" => "balance",
            "address" => $wallet->getAPI_ETH_WalletId(),
            'tag' => 'latest',
            'apikey' => $wallet->getAPI_ETH_Key(),
        );
        $ch = curl_init($wallet->getAPI_ETH_Url());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = json_decode(curl_exec($ch));
        curl_close($ch);
        return $result->result;
        }


    public function getListUSDTOut($page = 1)
    {
        $wallet = new SystemWallet();

        $data = array(
            "module" => "account",
            "action" => "tokentx",
            'contractaddress' => $wallet->getAPI_USDT_ERC_Contract(),
            "address" => $wallet->getAPI_ETH_WalletId(),
            'startblock'=>'0',
            'endblock'=>'99999999',
            'page'=>$page,
            'offset'=>'10',
            'sort'=>'desc',
            'apikey' => $wallet->getAPI_ETH_Key(),
        );



        $ch = curl_init($wallet->getAPI_ETH_Url());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = json_decode(curl_exec($ch));
        curl_close($ch);
        return $result->result;
    }


}

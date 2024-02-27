<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemWallet extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    private $api_eth_url;
    private $api_eth_key;
    private $api_wallet_id;
    private $api_usdtERC_contract;


    public function __construct()
    {

       $this->api_eth_url = config('wallet.ether_scan_url');
       $this->api_eth_key = config('wallet.ether_scan_api_key');
       $this->api_wallet_id = config('wallet.eth_wallet_id');
       $this->api_usdtERC_contract = config('wallet.usdtERC_contract_adress');

    }


    public function getAPI_ETH_Url()
    {
        return $this->api_eth_url;
    }
    public function getAPI_ETH_Key()
    {
        return $this->api_eth_key;
    }
    public function getAPI_ETH_WalletId()
    {
        return $this->api_wallet_id;
    }
    public function getAPI_USDT_ERC_Contract()
    {
        return $this->api_usdtERC_contract;
    }

}

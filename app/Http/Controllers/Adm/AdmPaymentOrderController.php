<?php

namespace App\Http\Controllers\Adm;


use App\Http\Controllers\AdminController;
use App\Models\BlockChain\Block;
use App\Models\BlockChain\Chain;
use App\Models\OrderStatus;
use App\Models\PaymentOrder;
use App\Models\Role;
use App\Models\User;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AdmPaymentOrderController extends AdminController
{
    public function reception(Request $Request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $user_name = '';

        if($Request->get('email'))
        {
            $user =  $this->findeOfCreateOnMail($Request->get('email'));
            $user_name = $user->name;



        if($Request->get('amount'))
        {
            $myBlockchain = new Chain();
            $res = $myBlockchain->addBlock(new Block( [

                'amount' => $Request->get('mcp_amount'),
                'system_message'=>'ICO Payment',
                'decimal_places'=>6,

            ]));

	        $this->addPayment($user,5,$res['index'], $Request->get('amount'));
            $this->addAmmountinWallet($user,$Request->get('mcp_amount'));
        }
    }


        $email = $Request->get('email');
        $amount= $Request->get('amount');
        $mcp_amount = $Request->get('mcp_amount');
        return view('ico.payment',compact([
			'amount',
	        'mcp_amount',
	        'email',
	        'user_name'
        ]));

    }

    public function findeOfCreateOnMail($mail)
    {
        $user = User::query()->where('email',$mail)->first();
        if (!$user){
            $user = User::query()->create([
                'name' => 'MYCIOIN_User_'.now()->timestamp,
                'email' => $mail,
                'password' => '0',

            ]);
            $defaultRole = Role::query()->where('start_role',1)->first();
            $user->assignRoles($defaultRole->slug);

            $userWallet = new UserWallet();
              do {
                $wallet = 'MCPW'.Str::random(7).md5($user->email);
            } while (UserWallet::where('address', $wallet)->exists());

            $userWallet->user_id = $user->id; // Предполагается, что $user - это объект пользователя
            $userWallet->address = $wallet;
            $userWallet->save();
/*
               Mail::send('project.emails.welcome', (array)Null,function ($message) use ($user) {
                    $message->to($user->email, $user->name)->subject('Ваш платеж принят в обработку');
                });*/
            return $user;
        }
        else{
            return $user;
        }
    }

    public function addPayment($user,$currency_id,$trnx,$amount)
    {
        $orderStatus = OrderStatus::query()->where('slug','New')->first();

        return $res = PaymentOrder::query()->create([
            'user_id'=> $user->id,
            'currency_id'=>$currency_id,
            'amount'=>$amount,
            'trnx' => $trnx,
            'order_status_id'=>$orderStatus->id,
        ]);
    }

    public function addAmmountinWallet($user,$amount,$currency_id=1)
    {

        $userWallet = UserWallet::query()->where('user_id',$user->id)->first();
        $userWallet->currency_id = $currency_id;
        $userWallet->balance += $amount;
        $userWallet->save();
    }



}

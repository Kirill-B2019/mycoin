<?php

namespace App\Http\Controllers\Adm;


use App\Http\Controllers\AdminController;
use App\Models\BlockChain\Block;
use App\Models\BlockChain\Chain;
use App\Models\OrderStatus;
use App\Models\Payment;
use App\Models\Role;
use App\Models\User;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AdmPaymentOrderController extends AdminController
{
    public function reception(Request $Request)
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
         //   $this->addAmmountinWallet($user,$Request->get('mcp_amount'));
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
        $user = User::where('email', $mail)->first();

        if (!$user) {
            $user = User::create([
                'name' => 'MYCOIN_User_' . now()->timestamp,
                'email' => $mail,
                'password' => '0',
            ]);

            $defaultRole = Role::where('start_role', 1)->first();
            $user->assignRoles($defaultRole->slug);

            return $user;
        } else {
            return $user;
        }
    }


    public function addAmmountinWallet($user, $amount, $currency_id = 1)
    {
        $userWallet = UserWallet::where('user_id', $user->id)->first();

        if ($userWallet) {
            $userWallet->currency_id = $currency_id;
            $userWallet->balance += $amount;
            $userWallet->save();
            return $userWallet;
        } else {
            $newUserWallet = new UserWallet();

            do {
                $address = 'MCPW' . Str::random(6) . md5(now());
            } while (UserWallet::where('address', $address)->exists());

            $newUserWallet->user_id = $user->id; // Присваиваем user_id новому кошельку
            $newUserWallet->address = $address;
            $newUserWallet->currency_id = $currency_id;
            $newUserWallet->balance = $amount;
            $newUserWallet->save();

            return $newUserWallet;
        }
    }


    public function addPayment($user,$currency_id,$index,$amount): Payment
    {
        $orderStatus = OrderStatus::query()->where('slug','New')->first();
        $payment = new Payment();
        $payment->user_id = $user->id;
        $payment->currency_id = $currency_id;
        $payment->amount = $amount;
        $payment->trnx = $index;
        $payment->order_status_id = $orderStatus->id;
        $payment->save();


        // Отправка письма
        $payment = Payment::with('currency')->find($payment->currency_id);

        if ($payment) {
            $currency_name = $payment->currency->name;
        } else {
            $currency_name = ''; // или другое значение по умолчанию, если платеж не найден
        }

        Mail::send('project.emails.newPayment', ['user' => $user, 'payment' => $payment, 'currency_name' => $currency_name], function ($message) use ($payment, $user) {
            $message->to($user->email, $user->name)->subject('Ваш платеж в размере '.$payment->amount.' принят в обработку');
        });
        return $payment;
    }


}

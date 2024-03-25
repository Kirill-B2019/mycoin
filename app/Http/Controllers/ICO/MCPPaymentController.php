<?php

namespace App\Http\Controllers\ICO;

use App\Http\Controllers\Controller;
use App\Models\BlockChain\Block;
use App\Models\BlockChain\Chain;
use App\Models\Role;
use App\Models\User;

use App\Models\UserWallet;
use http\Client\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;

class MCPPaymentController extends Controller
{
    /**
     * @param Request $Request
     * @return Factory|View|Application
     */
    public function reception(Request $Request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        $user_name = '';
        $user_id = '';
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

                $this->addPayment(5,$res['index'], $Request->get('amount'));
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


    // ищем пользоватля
    public function findeOfCreateOnMail($mail)
    {
        $user = User::query()->where('email',$mail)->first();
        if (!$user)
        {
            $user = User::query()->create([
                'name' => 'MYCIOIN_User_'.now()->timestamp,
                'email' => $mail,
                'password' => '0',

            ]);
            $defaultRole = Role::query()->where('start_role',1)->first();
            $user->assignRoles($defaultRole->slug);
            $userWallet = new UserWallet();

            $userWallet->user_email = $user->email; // Предполагается, что $user - это объект пользователя

            $userWallet->save();

        Mail::send(
			   'emails.welcome', (array)Null, static function ($message) use ($user) {

	           $message->to($user->email, $user->name)->subject('Ваш платеж принят в обработку')
		           ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
			   });

        }
        return $user;
    }
}

<?php

namespace App\Http\Controllers\Adm;


use App\Http\Controllers\Controller;
use App\Models\BlockChain\Block;
use App\Models\BlockChain\Chain;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;

class AdmPaymentOrderController extends Controller
{
    public function reception(Request $Request)
    {


        $myBlockchain = new Chain();
        $res = $myBlockchain->addBlock(new Block( ['amount' => 350]));
        dd($res);
        //dd(json_decode($res['data'])->amount);

        if($Request->get('email'))
        {
          // return $this->findeOfCreateOnMail($Request->get('email'));
        }

        if($Request->get('ammount'));
        {

        }

        if($Request->get('sender_'));
        {

        }
      /*  "mcp_amount" => "733.891091"
      "_token" => "jN2hvPgYUBUR1tbDVWLPSOx9LzilSQQFL7r095jH"
      "amount" => "50"
      "sender_adress" => null
      "email" => "wewe@we.ew"*/
    }

    public function findeOfCreateOnMail($mail)
    {
        $user = User::where('email',$mail)->first();
        if (!$user){
            $user = User::create([
                'name' => 'MYCIOIN_User_'.now()->timestamp,
                'email' => $mail,
                'password' => '0',

            ]);
            $defaultRole = Role::where('start_role',1)->first();
            $user->assignRoles($defaultRole->slug);

            /*    Mail::send('emails.welcome', compact('data'), function ($message) use ($user) {
                    $message->to($user->email, $user->name)->subject('Добро пожаловать на проектную площадку MyCOIN in');
                });
            */
            return $user;
        }
        else{
            return $user;
        }
    }
}

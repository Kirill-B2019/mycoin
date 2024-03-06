<?php

namespace App\Http\Controllers\Adm;


use App\Http\Controllers\AdminController;
use App\Models\BlockChain\Block;
use App\Models\BlockChain\Chain;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;

class AdmPaymentOrderController extends AdminController
{
    public function reception(Request $Request)
    {




        if($Request->get('email'))
        {
          $user =  $this->findeOfCreateOnMail($Request->get('email'));
        }

        if($Request->get('ammount'));
        {
            $myBlockchain = new Chain();
            $res = $myBlockchain->addBlock(new Block( [

                'amount' => 5555,
                "mcp_amount" => $Request->get('mcp_amount'),
            ]));

            dd($res);
        }

        if($Request->get('sender_adress'));
        {

        }

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

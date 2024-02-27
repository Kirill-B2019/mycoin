<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


class PublicSubscribeController extends Controller
{


    public function createSubscribeProject(Request $Request)
    {
        $validated = validator($Request->all(),[
            'name'=>['nullable','string','max:255'],
            'subscribe_mail' => ['required', 'string', 'email', 'max:255'],
        ])->validate();

        $newSubscribe = Subscribe::create([
            'name'=>$Request->get('name'),
            'email'=>$Request->get('subscribe_mail'),
            'active'=>'1'
        ]);
        $cookie = Cookie::queue('subscribeProject_'. $Request->get('projectId'), $Request->get('projectId'), 43200); //TODO регулировать срок жизни куки в админке?
        $newSubscribe->subscribesProject()->sync($Request->get('projectId'));

         return Redirect::to(URL::previous());   //TODO: Добавить сообщение
    }


}

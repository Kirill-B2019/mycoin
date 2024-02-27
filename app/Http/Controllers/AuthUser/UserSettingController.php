<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;

class UserSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('AuthUser');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function viewSetting()
    {
        return view('user.setting');
    }
}

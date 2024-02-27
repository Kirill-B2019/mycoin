<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;

class UserDonatesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('AuthUser');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewUserDonates()
    {
        return view('user.mydonates');
    }

    public function addWalletAmount()
        {
            return view('user.addamount');
        }

}

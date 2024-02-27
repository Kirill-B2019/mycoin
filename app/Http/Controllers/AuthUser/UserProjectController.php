<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;

class UserProjectController extends Controller
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
    public function viewProjects()
    {
        return view('user.projects');
    }
}

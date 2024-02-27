<?php

namespace App\Http\Controllers\AuthUser;

use App\Http\Controllers\Controller;

class UserNotesController extends Controller
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
    public function viewNotes()
    {
        return view('user.notes');
    }
}

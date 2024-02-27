<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;

class AdmNotesController extends Controller
{

    public function index()
    {
        return view("adp.notes");
    }


}

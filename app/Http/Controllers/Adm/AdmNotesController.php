<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;

class AdmNotesController extends AdminController
{

    public function index()
    {
        return view("adp.notes");
    }


}

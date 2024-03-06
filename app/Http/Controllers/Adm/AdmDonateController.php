<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;


class AdmDonateController extends AdminController
{


    public function index()
    {
        return view("adp.donates");
    }

}

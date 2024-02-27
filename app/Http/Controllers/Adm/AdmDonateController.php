<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;

class AdmDonateController extends Controller
{


    public function index()
    {
        return view("adp.donates");
    }

}

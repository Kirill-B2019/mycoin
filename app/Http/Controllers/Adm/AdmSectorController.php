<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmSectorController extends AdminController
{
    public function index()
    {
        return view("adp.sector",['Sectors'=>Sector::all()]);

    }
    public function update(Request $Request): string
    {

        $validation = Validator::make($Request->all(), [
          'ratio' => ['nullable','numeric']
       ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }
        Sector::where('id', $Request->get('id'))
            ->update([
                'ratio'=>$Request->get('ratio'),
                'updated_at'=>NOW(),
            ]);

        return Redirect::route("adp.sector",['Sectors'=>Sector::all()])->with('status', 'Сектор ОБНОВЛЕН!');

    }
}

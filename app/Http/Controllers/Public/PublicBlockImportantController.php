<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\BlockImportant;
use App\Models\Project;
use Illuminate\Support\Facades\View;

class PublicBlockImportantController extends Controller
{
    static function index()
    {
       $bloks =  BlockImportant::where('active','=','1')->first();

           if($bloks->count() > 0 )
           {
               return $bloks;
           }
         return NULL;
    }


}

<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmImageUploadController extends AdminController
{
    public function storeImage(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('storage/CreatorID_'.Auth::id().'/images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('storage/CreatorID_'.Auth::id().'/images/'.$fileName);
            $msg = 'Загружено';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}

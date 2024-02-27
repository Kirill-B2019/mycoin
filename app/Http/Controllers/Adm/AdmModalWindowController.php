<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\ModalWindow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdmModalWindowController extends Controller
{
    public function index()
    {

        return view("adp.modals",['modalWindows'=>ModalWindow::all()]);
    }

    /**
     * @throws ValidationException
     */
    public function create(Request $Request)
    {

        $validated= validator($Request->all(),[
            'name'=>['required','max:255'],
            'slug' => ['required','unique:modal_windows,slug','max:255'],
            'content' => ['required'],

        ])->validate();

        ModalWindow::create([
            'name'=>$Request->get('name'),
            'slug'=>getNormalSlug($Request->get('slug')),
            'content'=>$Request->get('content'),
        ]);
        $modalWindows=ModalWindow::all();
        return Redirect::route("adp.modals",compact(['modalWindows']))->with('status', 'Новое модальное окно : '.$Request->get('name').' СОЗДАНО!');

    }

    public function update(Request $Request)
    {
        $validation = Validator::make($Request->all(), [
            'name'=>'required|max:255',


        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }
        ModalWindow::where('id', $Request->get('id'))
            ->update([
                'name'=>$Request->get('name'),
                'content'=>$Request->get('content'),
                'updated_at'=>NOW(),
            ]);
        return Redirect::route("adp.modals",['modalWindows'=>ModalWindow::all()])->with('status', 'Модальное окно : '.$Request->get('name').' ОБНОВЛЕНО!');
    }

    public function delete(Request $Request)
    {
        ModalWindow::where('id',$Request->get('id'))->delete();
        return Redirect::route("adp.modals",['modalWindows'=>ModalWindow::all()])->with('status', 'Модальное окно : '.$Request->get('name').' УДАЛЕНО!');
    }


}
//TODO разделить контрллеры

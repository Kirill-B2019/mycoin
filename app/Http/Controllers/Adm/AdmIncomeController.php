<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\AdminController;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmIncomeController extends AdminController
{

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

        return view('adp.incomes',['incomes'=>Income::all()]);
    }


    public function create(Request $Request): string
    {

        $validation = Validator::make($Request->all(), [
            'name'=>['required','max:255'],
            'shot_desc' => ['required','max:1000'],
        ]);

        if($validation->fails()) {
            return $validation->errors()->first();
        }

        Income::create($Request->all());
        return redirect()->route('adp.incomes')->with('status', 'Вид дохода СОЗДАН!');

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $Request)
    {
        //TODO написать тут
        return Redirect::route('Adm.incomes')->with('status', 'Вид дохода Обновлен!');
    }


    public function destroy(Request $Request) : \Illuminate\Http\RedirectResponse
    {
        Income::where('id',$Request->get('id'))->delete();
        return Redirect::route('adp.incomes')->with('status', 'Вид дохода УДАЛЕН!');
    }
}

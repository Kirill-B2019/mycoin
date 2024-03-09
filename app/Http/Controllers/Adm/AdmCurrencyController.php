<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdmCurrencyController extends Controller
{
	// категории
	public function index()
	{
		return view("adp.currencies",['currencies'=>Currency::all()]);
	}
	public function create(Request $Request): string|\Illuminate\Http\RedirectResponse
	{
		
		$validation = Validator::make($Request->all(), [
			'name'=>['required','max:255'],
			'code' => ['required','unique:currencies,code','max:255'],
			'symbol' => ['nullable','max:15'],
		
		]);
		
		if($validation->fails()) {
			return $validation->errors()->first();
		}
		
		Currency::create([
			'name'=>$Request->get('name'),
			'code'=>getNormalSlug($Request->get('code')),
			'symbol '=>$Request->get('symbol') ?? 0,
			'type'=>$Request->get('type') ?? 1,
	
		]);
		return Redirect::route("adp.currencies")->with('status', 'Новая валюта: '.$Request->get('name').' СОЗДАНА!');
		
	}
	public function update(Request $Request): string
	{
		
		$validation = Validator::make($Request->all(), [
			'name'=>['required','max:255'],
			'code' => ['required','unique:currencies,code','max:255'],
			'symbol' => ['nullable','max:15'],
		
		]);
		
		if($validation->fails()) {
			return $validation->errors()->first();
		}
		Currency::where('id', $Request->get('id'))
			->update([
				'name'=>$Request->get('name'),
				'code'=>getNormalSlug($Request->get('code')),
				'symbol '=>$Request->get('symbol') ?? 0,
				'type'=>$Request->get('type') ?? 1,
		
			]);
		
		return Redirect::route('adp.currencies')->with('status', 'Валюта '.$Request->get('name').' ОБНОВЛЕНА!');
	}
	public function delete(Request $Request): \Illuminate\Http\RedirectResponse
	{
		Currency::where('id',$Request->get('id'))->delete();
		return Redirect::route('adp.currencies')->with('status', 'Валюта '.$Request->get('name').' УДАЛЕНА!');
	}
	// конец категориям
	
}

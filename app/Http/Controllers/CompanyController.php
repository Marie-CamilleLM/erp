<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() 
    {
	return view('company', [
		'companies' => Company::all()
	]);
    }
    public function store() {
	$company = new Company();
	$company->name = request('name');
	$company->balance = request('balance');
	$company->country = request('country');
	
	request()->validate([
		'name' => ['required', 'alpha'],
		'balance' => ['required', 'integer'],
		'country' => ['required', 'alpha'],
	]);
	$company->save();
	return back();
    }
    
    public function delete($id) {
          $company = Company::where('id', $id)->firstorfail()->delete();
          return redirect()->route('company.index');
    }
}

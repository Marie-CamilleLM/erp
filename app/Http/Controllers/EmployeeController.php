<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
	function index()
	{
	    return view('employee', [
		'employees' => Employee::all()
		]);
	}
    public function store() {
	$employee = new Employee();
	$employee->name = request('name');
	$employee->birthday = request('birthday');
	$employee->country = request('country');
	$employee->first_day_in_company = request('first_day_in_company');
	
	request()->validate([
		'name' => ['required', 'alpha'],
		'birthday' => ['required', 'date'],
		'country' => ['required', 'alpha'],
		'first_day_in_company' => ['required', 'date'],
	]);
	$employee->save();
	
	return back();
    }
    
    public function delete($id) {
          $employee = Employee::where('id', $id)->firstorfail()->delete();
          return redirect()->route('employee.index');
    }
}

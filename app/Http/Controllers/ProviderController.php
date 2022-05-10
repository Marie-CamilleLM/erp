<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
	function index()
	{
	    return view('provider', [
		'providers' => Provider::all()
		]);
	}
    public function store() {
	$provider = new Provider();
	$provider->name = request('name');
	$provider->address = request('address');
	$provider->country = request('country');
	
	request()->validate([
		'name' => ['required', 'alpha'],
		'address' => ['required'],
		'country' => ['required', 'alpha'],
	]);
	$provider->save();
	
	return back();
    }

    public function delete($id) {
          $provider = Provider::where('id', $id)->firstorfail()->delete();
          return redirect()->route('provider.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
	function index()
	{
	    return view('client', [
		'clients' => Client::all()
		]);
	}
    public function store() {	
	$client = new Client();
	$client->name = request('name');
	$client->address = request('address');
	$client->country = request('country');
	
	request()->validate([
		'name' => ['required', 'alpha'],
		'address' => ['required'],
		'country' => ['required', 'alpha'],
	]);
	$client->save();
	
	return back();
    }

    public function delete($id) {
          $client = Client::where('id', $id)->firstorfail()->delete();
          return redirect()->route('client.index');
    }
}
